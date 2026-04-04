// @ts-check
const { test, expect } = require('@playwright/test');

// ── Pagina's die altijd getest worden ──────────────────────────────────────
// Voeg hier nieuwe pagina's toe als je ze aanmaakt
const PAGES = [
  { url: '/',        name: 'Homepage' },
  { url: '/over-ons', name: 'Over ons' },
];

// ── Helpers ────────────────────────────────────────────────────────────────
async function slowScroll(page) {
  const totalHeight = await page.evaluate(() => document.body.scrollHeight);
  for (let y = 0; y < totalHeight; y += 120) {
    await page.evaluate((y) => window.scrollTo(0, y), y);
    await page.waitForTimeout(30);
  }
  await page.evaluate(() => window.scrollTo(0, 0));
  await page.waitForTimeout(300);
}

async function forceReveal(page) {
  await page.evaluate(() => {
    document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
  });
}

// ── Tests per pagina ───────────────────────────────────────────────────────
for (const { url, name } of PAGES) {
  test.describe(name, () => {

    test('pagina laadt zonder errors', async ({ page }) => {
      const errors = [];
      page.on('console', msg => { if (msg.type() === 'error') errors.push(msg.text()); });
      page.on('pageerror', err => errors.push(err.message));

      await page.goto(url);
      await page.waitForLoadState('networkidle');

      // Geen kritieke JS-errors
      const criticalErrors = errors.filter(e =>
        !e.includes('favicon') && !e.includes('gtag') && !e.includes('analytics')
      );
      expect(criticalErrors, `JS errors op ${name}: ${criticalErrors.join(', ')}`).toHaveLength(0);
    });

    test('title en meta aanwezig', async ({ page }) => {
      await page.goto(url);
      const title = await page.title();
      expect(title.length, 'Pagina heeft geen title').toBeGreaterThan(5);
    });

    test('navbar zichtbaar', async ({ page }) => {
      await page.goto(url);
      await expect(page.locator('nav')).toBeVisible();
      await expect(page.locator('.nav-logo')).toBeVisible();
    });

    test('geen afbeeldingen kapot (404)', async ({ page }) => {
      const broken = [];
      page.on('response', response => {
        const url = response.url();
        if (url.match(/\.(png|jpg|jpeg|webp|svg)/) && response.status() === 404) {
          broken.push(url);
        }
      });
      await page.goto(url);
      await page.waitForLoadState('networkidle');
      expect(broken, `Broken images: ${broken.join(', ')}`).toHaveLength(0);
    });

    test('footer zichtbaar', async ({ page }) => {
      await page.goto(url);
      await slowScroll(page);
      await expect(page.locator('footer')).toBeVisible();
    });

  });
}

// ── Homepage specifieke tests ───────────────────────────────────────────────
test.describe('Homepage — secties', () => {

  test.beforeEach(async ({ page }) => {
    await page.goto('/');
    await page.waitForLoadState('networkidle');
    await slowScroll(page);
    await forceReveal(page);
  });

  test('hero: headline en knoppen zichtbaar', async ({ page }) => {
    await expect(page.locator('.hero h1')).toBeVisible();
    await expect(page.locator('.btn-primary')).toBeVisible();
    await expect(page.locator('.btn-ghost')).toBeVisible();
  });

  test('hero: headline tekst aanwezig', async ({ page }) => {
    const text = await page.locator('.hero h1').textContent();
    expect(text?.length ?? 0, 'Hero headline is leeg').toBeGreaterThan(10);
  });

  test('frustration-section: 3 blokken aanwezig', async ({ page }) => {
    const blocks = page.locator('.frust-block');
    await expect(blocks).toHaveCount(3);
    for (let i = 0; i < 3; i++) {
      await expect(blocks.nth(i)).toBeVisible();
    }
  });

  test('system-section: zichtbaar', async ({ page }) => {
    await page.evaluate(() => document.querySelector('.system-section')?.scrollIntoView());
    await expect(page.locator('.system-section')).toBeVisible();
  });

  test('persona-section: 3 kaarten met avatar-cirkel', async ({ page }) => {
    const cards = page.locator('.persona-card');
    await expect(cards).toHaveCount(3);
    const circles = page.locator('.persona-avatar-circle');
    await expect(circles).toHaveCount(3);
  });

  test('FAQ: minimaal 5 vragen aanwezig', async ({ page }) => {
    const questions = page.locator('.faq-question');
    const count = await questions.count();
    expect(count, 'Te weinig FAQ-vragen').toBeGreaterThanOrEqual(5);
  });

  test('contact-sectie: formulier aanwezig', async ({ page }) => {
    await page.evaluate(() => document.querySelector('.contact-section')?.scrollIntoView());
    await expect(page.locator('.contact-section')).toBeVisible();
    await expect(page.locator('.contact-form-card').first()).toBeVisible();
  });

});

// ── Mobile-specifieke tests ─────────────────────────────────────────────────
test.describe('Mobile — hamburger en layout', () => {

  test('hamburger zichtbaar op mobile', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'Alleen op mobile');
    await page.goto('/');
    await expect(page.locator('.nav-hamburger')).toBeVisible();
  });

  test('hero visual verborgen op mobile', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'Alleen op mobile');
    await page.goto('/');
    const heroVisual = page.locator('.hero-visual');
    await expect(heroVisual).toBeHidden();
  });

  test('hero knoppen volledig zichtbaar op mobile', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'Alleen op mobile');
    await page.goto('/');
    await expect(page.locator('.btn-primary')).toBeVisible();
    await expect(page.locator('.btn-ghost')).toBeVisible();
  });

  test('geen horizontale overflow op mobile', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'Alleen op mobile');
    await page.goto('/');
    const scrollWidth = await page.evaluate(() => document.body.scrollWidth);
    const viewportWidth = await page.evaluate(() => window.innerWidth);
    expect(scrollWidth, 'Horizontale overflow gedetecteerd').toBeLessThanOrEqual(viewportWidth + 2);
  });

});
