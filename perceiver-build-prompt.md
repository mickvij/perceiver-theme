# Perceiver Website — Master Build Prompt

## Context: What You Are Building

Build a complete, production-quality marketing website for **Perceiver** — a Dutch company that has created a fundamentally new category in pest control: **aantoonbare en geautomatiseerde plaagdierbeheersing** (verifiable and automated pest management).

This is NOT a monitoring platform with pest control on the side. This is NOT a camera company. This is a **semi-automated pest control system** that detects, decides, traps intelligently, and proves the result — with roughly 80% of the entire pest control process automated.

The website must be in **Dutch** (professional, formal "u"-form). The primary audience is Dutch hospitality business owners (restaurants, hotels, catering) who fear NVWA (Dutch Food Safety Authority) inspections and want provable control over pest risk.

**The site you build will be judged on one thing: does it feel like a company that is setting a new standard, or does it feel like another tech vendor selling cameras?**

---

## Brand Positioning — The Non-Negotiables

### What Perceiver Is
Perceiver combines AI cameras, ML-driven smart trap technology, certified pest controllers, and automatic reporting into one integrated system. It automates the chain from risk analysis → detection → smart trapping → certified intervention → automatic documentation.

### What Perceiver Is NOT
- Not a monitoring dashboard with a pest controller on call
- Not a camera system
- Not an add-on to existing pest control
- Not a night-only solution (it works 24/7 — never frame it as "nachtelijk")

### The Category Claim
Traditional pest control operates on periodic visits (every 4-6 weeks), relies on traps that lose effectiveness as rodents learn to avoid them, and increasingly depends on poison — which is problematic in food environments. Perceiver replaces that entire model.

### The Core Brand Thesis
> No food business should have to gamble on whether it's safe right now. Perceiver makes pest management verifiable, targeted, and largely automated — without the limitations of conventional traps and without dependence on poison.

### The Five Shifts (these must permeate the entire site)
| Traditional Model | Perceiver |
|---|---|
| Periodic control visits | Continuous detection |
| Assumptions between visits | Verifiable proof, continuously |
| Conventional traps that lose effectiveness | Smart trap technology with frequency optimization |
| Increasing dependence on poison | Targeted catching without need for poison |
| Manual reporting after the fact | Automatic documentation in real-time |

---

## Technical Stack

Build this as a **WordPress custom theme** (PHP). The theme should be:
- Named `perceiver-theme-v2` in `style.css`
- Built with vanilla CSS (one stylesheet: `assets/css/main.css`)
- Vanilla JS (one file: `assets/js/main.js`)
- Google Fonts: **Syne** (display/headings) + **DM Sans** (body text)
- No build tools, no SCSS, no npm — clean PHP/CSS/JS
- Mobile-first responsive design
- Smooth scroll, IntersectionObserver `.reveal` animations
- Required WordPress files: `style.css`, `functions.php`, `header.php`, `footer.php`, `front-page.php`, `index.php`

---

## Design System

### Color Palette
```
--brand-core:    #1C38CC   (primary brand blue — buttons, accents, links)
--brand-dark:    #0E1E7A   (deep blue — hero backgrounds, headings)
--accent-teal:   #0D9488   (secondary accent — trust, steps, highlights)
--accent-red:    #DC2626   (urgency — alerts, warning bar, NVWA stat)
--accent-green:  #15803D   (positive confirmation — success, trust)
--accent-amber:  #D97706   (warm accent — secondary persona, highlights)
--surface-light: #F8FAFC   (light backgrounds, alternating sections)
--surface-blue:  #F0F4FF   (callout backgrounds, quote boxes)
--text-primary:  #0F172A   (body text)
--text-muted:    #64748B   (secondary text, captions)
--border:        #E2E8F0   (subtle borders, dividers)
```

### Typography
- **Syne**: Hero headline (clamp 2.5rem–4rem), section headlines (clamp 1.5rem–2.5rem). Bold, tight letter-spacing (-0.02em).
- **DM Sans**: Body text (1rem/1.125rem), subheads, navigation, buttons, labels. Regular 400, Medium 500.
- Line height: 1.6 for body, 1.15 for headlines.

### Spacing Rhythm
- Sections: `padding: clamp(4rem, 8vw, 7rem) 0`
- Content max-width: `1200px`, centered
- Generous whitespace between sections — whitespace = premium. Crowded = cheap.

### Visual Identity Rules
- **Premium and analytical**, not CCTV-surveillance-style
- **Clean and spacious**, not cluttered tech-demo
- **Warm and trustworthy**, not cold and robotic
- No stock photos of rats/pests — that associates with the problem, not the solution
- No carousel/slideshow heroes — one clear composition per section
- Dashboard mockups, alert cards, trap status indicators, and report previews are the strongest visual proof elements
- Use subtle shadows, rounded corners (8-12px), and layered depth for UI mockups

---

## Homepage Architecture — Section by Section

The homepage follows a tension arc in three phases:
**Top = Tension → Middle = Clarity → Bottom = Trust → End = Action**

Build these 10 sections in exactly this order:

---

### Section 1: Urgency Bar
A slim bar above the navigation. Dark background (`--brand-dark`), white text, red accent for the number.

**Content:** `[Number] horecazaken gesloten door de NVWA in [year]` + small close button (×).

**Implementation:**
- Fixed position, dismissable (JS: `closeUrgencyBar()`)
- The number should be easy to update (ideally a simple PHP variable or WP customizer field)
- Compact: one line, small text (0.85rem), horizontally centered
- This is supporting urgency — not the identity. Subtle but present.

---

### Section 2: Hero
**Purpose:** First impression. Brand belief + urgency + proof that the system delivers results. One composition.

**Layout:** Two-column, 60/40 split on desktop. Stacks on mobile (text first, visual second).

**Left column (60%):**
- **Headline:** `Camera's die kijken. Vallen die leren. Bewijs dat het werkt.`
  - Style: Syne, bold, `clamp(2rem, 5vw, 3.5rem)`, color `--brand-dark`
  - This headline is non-negotiable. It is the only hero headline that is ownable by Perceiver alone. "Vallen die leren" (traps that learn) cannot be claimed by any competitor.
- **Subhead:** `AI-camera's, slimme valtechnologie en gecertificeerde bestrijding in één systeem. Continu actief, grotendeels geautomatiseerd, volledig gedocumenteerd.`
  - Style: DM Sans, regular, `1.125rem`, color `--text-muted`, max-width 540px
- **Two CTA buttons:**
  - Primary: `Bespreek uw locatie` — solid `--brand-core` background, white text, prominent
  - Secondary: `Bekijk hoe het werkt` — outline/ghost style, scrolls to "Hoe het werkt" section

**Right column (40%):**
Build a **polished dashboard mockup** — not a screenshot, but a designed representation. It should contain three layered elements:
1. A **detection alert card**: dark card with red left-border, showing `Activiteit gedetecteerd — Rattus norvegicus — Keuken zone B — 03:47` with a small camera icon
2. A **trap status indicator**: small card showing `Slimme val B3 — actief — vangfrequentie optimaal` with a green status dot
3. A **report preview**: small card with a mini timeline showing dates and status indicators

These three cards should be arranged with slight overlap/stacking and subtle shadows to create depth. This composition proves in one glance: this system detects, acts, and reports.

**What does NOT belong here:** Pricing. Technical specs. Long text. Multiple images. The word "nacht" as central framing.

**Background:** Gradient from `--brand-dark` to a slightly lighter blue, or a clean dark-to-light transition. The hero should feel bold and premium.

---

### Section 3: Trust Strip
**Purpose:** Immediate credibility. Four proof points, no explanation needed.

**Layout:** Four equal columns on desktop, 2×2 grid on mobile. Light background (`--surface-light`), subtle top border in `--brand-core`.

**Content — exactly these four items:**
1. 🔬 `Gepatenteerde technologie`
2. ✓ `Gecertificeerde bestrijders`
3. 📋 `Audit-ready rapportage`
4. 🌿 `Gifvrije bestrijdingsoptie`

Each item: icon (use simple SVG or emoji placeholder) + label text. No description. No links. Max 4 words per item.

**Style:** Small text (0.9rem), muted color, centered. The strip should feel like a quiet confidence marker, not a feature list.

---

### Section 4: Het Probleem (The Problem)
**Purpose:** Recognition. The visitor thinks: "yes — that's exactly what concerns me."

**Layout:** Clean, centered text block. Max-width 720px. White or very light background.

**Content structure:**
1. **Section headline:** `Tussen twee controles is er geen inzicht én geen actie`
   - Syne, bold, `--brand-dark`, 1.75rem
2. **Body text (max 60 words):**
   `Uw bestrijder bezoekt uw locatie één keer per maand. Tussen die bezoeken is er geen enkel inzicht in wat er gebeurt. En als er wordt ingegrepen, werkt dat vaak met methoden die snel hun effectiviteit verliezen — of met gif dat op veel locaties onwenselijk is.`
   - DM Sans, regular, `--text-primary`, 1rem
3. **Contrast statement** — visually distinct, like a pull quote with left border accent:
   `Een bestrijder ziet wat er tijdens zijn bezoek is. Perceiver ziet wat er continu gebeurt — en handelt.`
   - Syne or DM Sans Medium, `1.25rem`, `--brand-dark`, italic, with a `--brand-core` left border (4px)

**Tone:** Not attacking. Not fear-driven. Matter-of-fact. Respectful toward pest controllers. The problem is with the model, not the people.

**What does NOT belong:** Competitor names. Technical comparisons. Long analysis.

---

### Section 5: De Verschuiving (The Shift)
**Purpose:** Establish the category shift. The visitor understands: Perceiver doesn't do the same thing better — it works fundamentally differently.

**Layout:** Two-column comparison table/cards + short explanatory text below.

**Headline:** `Niet beter bestrijden. Fundamenteel anders beheersen.`

**Visual element:** A side-by-side comparison. Left column = "Huidig model" (grey/muted styling). Right column = "Perceiver" (brand blue styling, slightly elevated/highlighted). Five rows:

| Huidig model | Perceiver |
|---|---|
| Periodieke controle | Continue detectie |
| Aannames tussen bezoeken | Aantoonbaar bewijs, continu |
| Vallen die effect verliezen | Slimme vangst met frequentie-optimalisatie |
| Gifafhankelijkheid | Gericht bestrijden zonder gifnoodzaak |
| Rapport achteraf | Automatische vastlegging real-time |

**Below the table (max 2 sentences):**
`Dit is geen verbetering van het bestaande model. Dit is een andere manier van kijken naar plaagdierbeheersing — waarin detectie, besluitvorming en bestrijding één geautomatiseerd systeem vormen.`

**What does NOT belong:** Competitor names. Pricing. Technical specs.

---

### Section 6: Hoe Het Werkt (How It Works)
**Purpose:** Credibility through simplicity. Four steps that show the full process from analysis to result.

**Layout:** Four numbered steps in a horizontal row (desktop) or vertical stack (mobile). Each step: number/icon, title, one sentence. Connected by a subtle line or arrow.

**Headline:** `Van risicoanalyse tot resultaat. Eén systeem.`

**The four steps:**

1. **In kaart brengen**
   `Risicoanalyse van de locatie. Camera's en vallen worden geplaatst op basis van het risicoprofiel per ruimte.`
   Icon suggestion: map/grid icon

2. **Detecteren**
   `AI-camera's registreren activiteit continu en classificeren automatisch: soort, locatie, gedrag.`
   Icon suggestion: camera/eye icon

3. **Gericht bestrijden**
   `Slimme vallen worden aangestuurd op optimale vangfrequentie. Gecertificeerde bestrijders grijpen in waar nodig.`
   Icon suggestion: target/trap icon

4. **Vastleggen**
   `Elk incident, elke actie en elk resultaat wordt automatisch gerapporteerd. Audit-ready.`
   Icon suggestion: document/checkmark icon

**Step styling:** Large step number (Syne, `--brand-core`, 2rem bold) + title (DM Sans Medium) + description (DM Sans regular, `--text-muted`, 0.9rem). Cards with subtle border or background differentiation.

**What does NOT belong:** ML model details. Trap mechanism specifics. Server architecture. PRI methodology detail. Those go on the werkwijze subpage.

---

### Section 7: Bewijs (Proof)
**Purpose:** Build trust by showing proof as tangible artifacts, not just claiming it.

**Layout:** A grid of 4-5 proof cards. Light background section. Cards should feel like real interface elements / documents.

**Headline:** `Geen claims. Bewijs.`

**Proof cards (build as realistic UI mockups):**

1. **Detection Alert Card**
   Dark card, red left accent. Content: `Activiteit gedetecteerd` / `Rattus norvegicus` / `Keuken zone B` / `03:47` / camera icon. Style: monospace-feel for data, small text.

2. **Trap Status Card**
   Card with green status indicator. Content: `Slimme val B3 — actief` / `Vangfrequentie: optimaal` / `3 vangsten deze week`. Small progress bar or indicator.

3. **Process Timeline Card**
   Horizontal mini-timeline: `Risico-inventarisatie → Camera geplaatst → Activiteit bevestigd → Slimme val geplaatst → Gericht gevangen → Dossier compleet`. Each step as a dot/node on a line.

4. **Patent Card**
   Clean card with patent icon. `Gepatenteerde technologie` + patent number placeholder + one-line description.

5. **Report Preview Card**
   Mini document preview showing a timeline with dates, detection thumbnails, and action log entries. Should look like a real PDF report page, miniaturized.

**Design these as modular components** — they need to be expandable with customer cases, before/after results, and audit examples as those become available.

**What does NOT belong:** Long testimonials. Comparative claims. Technical specifications.

---

### Section 8: Voor Wie (For Whom)
**Purpose:** Recognition. The visitor sees themselves reflected.

**Layout:** One prominent persona block (horeca) + one secondary block (chains) with link.

**Headline:** `Herkenbaar? Dan is dit voor u.`

**Primary persona block:**
Visual warmth — could be a subtle background image of a clean professional kitchen (abstract/blurred) or a solid warm-toned background.
> `U runt een restaurant, hotel of cateringbedrijf. U wilt niet verrast worden door de NVWA. U wilt weten dat het geregeld is, dat er gericht wordt ingegrepen en dat u het kunt bewijzen.`
CTA button: `Bespreek uw locatie`

**Secondary block (smaller, more compact):**
> `Verantwoordelijk voor meerdere locaties? Perceiver biedt centraal inzicht, geautomatiseerde bestrijding per locatie en geconsolideerde rapportage die audit-ready is.`
Link: `Meer voor ketens en kwaliteitsmanagers →`

**What does NOT belong:** Three equal-weight persona cards. That costs focus. Facility managers are NOT on the homepage.

---

### Section 9: Kosten (Costs)
**Purpose:** Proactively neutralize the price objection before it's spoken.

**Layout:** Clean centered section. Subtle background differentiation.

**Headline:** `Meer zekerheid, effectievere bestrijding, vergelijkbare kosten`

**Body (max 40 words):**
`De totale kosten van Perceiver liggen op het niveau van een regulier bestrijdingscontract. Geen extra kostenlaag. Een slimmer model dat de behoefte aan ongeplande bezoeken structureel vermindert en de afhankelijkheid van gif minimaliseert.`

**CTA link:** `Bekijk de kostenopbouw →` (links to future kosten subpage — use # for now)

**What does NOT belong:** Exact Euro amounts. ROI calculations. Competitor price comparisons. Hardware breakdowns. Those go on the kosten subpage.

---

### Section 10: FAQ / Bezwaren (FAQ)
**Purpose:** Remove final doubts before the visitor reaches the CTA.

**Layout:** Accordion-style FAQ. Clean, minimal. Max 6 questions.

**Headline:** `Veelgestelde vragen`

**Questions and answers (implement as expandable accordions):**

1. **Worden beelden opgeslagen in de cloud?**
   Nee. Alle beeldverwerking gebeurt lokaal, op een server in uw pand.

2. **Hoe zit het met gif?**
   Perceiver werkt primair met slimme valtechnologie. Gifgebruik wordt geminimaliseerd of is niet nodig.

3. **Wat gebeurt er met mijn huidige bestrijder?**
   Perceiver werkt naast of vervangt uw huidige partij. Wij begeleiden de overgang.

4. **Wat als er een melding komt?**
   U hoeft niets te doen. Het systeem stuurt aan, de bestrijder handelt, u ontvangt het rapport.

5. **Is dit geschikt voor meerdere locaties?**
   Ja. Met centraal dashboard en rapportage per locatie.

6. **Hoe zit het met privacy?**
   Camera's detecteren plaagdieren, geen personen. U bent eigenaar van alle data.

---

### Section 11: CTA (Closing)
**Purpose:** Conversion. The visitor takes the next step.

**Layout:** Full-width section with `--brand-dark` or gradient background. Centered content. Warm, inviting, not pushy.

**Headline:** `Wij staan naast u. Niet naast een schema.`
- Syne, white, bold, large

**Subtext:**
`Wilt u weten hoe Perceiver werkt voor uw locatie? Neem contact op — vrijblijvend.`

**Three CTA buttons, hierarchically styled:**
1. **Primary:** `Bespreek uw locatie` — large, solid white button with brand text
2. **Secondary:** `Vraag een risico-inschatting aan` — outline/ghost button, white border
3. **Tertiary:** `Stel uw vraag direct` — text link style, underlined

All three open the same modal contact form (or link to contact page with `#` for now).

---

## Navigation

**Header:** Fixed/sticky on scroll. Logo left, nav links center-right, CTA button right.

**Nav items:** `Het probleem` | `Hoe het werkt` | `Voor wie` | `Bewijs` | `Kosten` | **`Bespreek uw locatie`** (button)

All nav links smooth-scroll to their respective homepage sections. Mobile: hamburger menu with slide-in panel.

**Footer:** Four columns:
1. Logo + one-line brand description + contact info
2. `Navigatie` — links to all sections
3. `Diensten` — Horeca / Ketens / Werkwijze / Kosten
4. `Informatie` — Over Perceiver / FAQ / Privacy / Contact

---

## Modal: Contact Form

A clean modal (`#modal-contact`) triggered by all primary CTAs. Contains:
- Name field
- Company name
- Email
- Phone
- Textarea: "Waar kunnen wij u mee helpen?"
- Submit button: `Verstuur`
- Close button (×)

On submit: show a success toast: `Bedankt. Wij nemen binnen één werkdag contact met u op.`

No actual form processing needed — just the front-end with `preventDefault()`.

---

## Mobile-Specific Requirements

- Sticky CTA bar at bottom of screen on mobile: `Bespreek uw locatie` button, always visible
- Hero stacks: text first, dashboard mockup second
- Trust strip: 2×2 grid
- Comparison table: scrollable or stacked cards
- Process steps: vertical stack with connecting line
- Proof cards: single column, full width
- FAQ: full-width accordions
- Large touch targets on all interactive elements (min 44px)

---

## Interaction & Animation

- **`.reveal` pattern:** Sections and key elements start with `opacity: 0; transform: translateY(30px)` and animate to visible state when they enter viewport (IntersectionObserver, threshold 0.15). Stagger child elements by 100ms.
- **Nav scroll state:** After scrolling past hero, add `.scrolled` class to header — background becomes solid white with subtle shadow.
- **Smooth scroll:** All anchor links use `scroll-behavior: smooth` with offset for fixed header.
- **FAQ accordions:** Click to expand/collapse with smooth height animation. Only one open at a time.
- **Urgency bar:** Dismissable with × button. Stays dismissed for the session (sessionStorage).
- **No gimmicks.** Every animation must serve trust, clarity, or conversion. Nothing decorative.

---

## Copy Discipline — Critical Rules

These rules are non-negotiable. Do not generate or use copy that violates them:

1. **Never use "de enige" (the only one)** — use "de eerste" or rephrase
2. **Never use "volledig geëlimineerd"** — use "gericht teruggedrongen"
3. **Never use "exponentieel"** — delete it
4. **Never use "nacht" as the primary frame** — Perceiver works 24/7. Use "continu"
5. **Never use "pest control service"** — use "plaagdierbeheersing"
6. **Never mention competitor names** on the homepage
7. **Never use "Demo aanvragen"** as CTA text — too software-like
8. **Always write "u" (formal)**, never "je/jij"
9. **Sell outcomes, not monitoring** — the customer buys effective pest control, not a dashboard
10. **Every claim must be defensible** — write as if an auditor will check it

---

## What This Site Must Feel Like

When someone lands on this homepage, within 5 seconds they should understand:
1. This is fundamentally different from what I have now
2. This system doesn't just see — it acts
3. This is serious, professional, and proven
4. I want to know more

The site should NOT feel like:
- A SaaS product page
- A surveillance/CCTV company
- A startup trying too hard
- A tech demo looking for investors
- A comparison page attacking competitors

The site SHOULD feel like:
- A new standard being introduced — calmly, confidently
- A company that deeply understands my problem
- A premium, trustworthy partner
- Something that makes me think: "why doesn't everyone do it this way?"

---

## File Structure

```
perceiver-theme-v2/
├── style.css              (WordPress theme header + minimal styles)
├── functions.php          (enqueue styles/scripts, theme support, nav menus)
├── header.php             (<!DOCTYPE html> through nav + urgency bar)
├── footer.php             (footer + modals + closing tags)
├── front-page.php         (all 11 homepage sections)
├── index.php              (WordPress fallback template — basic posts loop)
├── assets/
│   ├── css/
│   │   └── main.css       (complete stylesheet — all components)
│   └── js/
│       └── main.js        (nav, reveals, FAQ, modals, smooth scroll, urgency bar)
```

Build all files completely. No placeholders, no "add content here" comments. Every section fully implemented with real Dutch copy, real styling, real interactions.
