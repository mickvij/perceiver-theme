// Smooth scroll
  function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
  }
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth' }); }
    });
  });

  // Navbar shrink
  const navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    });
  }

  // Reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.15 });
  reveals.forEach(r => observer.observe(r));

  // ── HERO SLIDESHOW ──
  (function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slide-dot');
    const progressBar = document.getElementById('slideProgressBar');
    const slideshow = document.getElementById('heroSlideshow');

    if (!slides.length || !dots.length || !progressBar || !slideshow) {
      return;
    }

    const DURATION = 4000;
    const TICK = 30;
    let current = 0;
    let elapsed = 0;
    let paused = false;

    function goToSlide(index) {
      slides[current].classList.remove('active');
      dots[current].classList.remove('active');
      current = index;
      slides[current].classList.add('active');
      dots[current].classList.add('active');
      elapsed = 0;
    }

    function tick() {
      if (!paused) {
        elapsed += TICK;
        progressBar.style.width = (elapsed / DURATION * 100) + '%';
        if (elapsed >= DURATION) goToSlide((current + 1) % slides.length);
      }
      requestAnimationFrame(() => setTimeout(tick, TICK));
    }

    dots.forEach(dot => {
      dot.addEventListener('click', () => goToSlide(parseInt(dot.dataset.index)));
    });

    slideshow.addEventListener('mouseenter', () => { paused = true; });
    slideshow.addEventListener('mouseleave', () => { paused = false; });

    tick();
  })();

  // ── FAQ ACCORDION ──
  (function() {
    const items = document.querySelectorAll('.faq-item');
    if (!items.length) return;

    items.forEach(item => {
      const btn = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      if (!btn || !answer) return;

      btn.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');

        // Close all items
        items.forEach(other => {
          other.classList.remove('open');
          other.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
          other.querySelector('.faq-answer').style.maxHeight = null;
        });

        // Open clicked item if it was closed
        if (!isOpen) {
          item.classList.add('open');
          btn.setAttribute('aria-expanded', 'true');
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });
  })();

  // ── MODALS ──
  function openModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.remove('open');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.cta-modal').forEach(modal => {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal(modal.id);
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      document.querySelectorAll('.cta-modal.open').forEach(m => closeModal(m.id));
    }
  });

  // ── 3D MESH BACKGROUND (reusable) ──
  function initMesh(canvasId, blobConfig) {
    const canvas = document.getElementById(canvasId);
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let w, h;
    let t = Math.random() * 10000; // offset so hero & system don't sync

    const blobs = blobConfig;
    const GRID_COLS = 28;
    const GRID_ROWS = 16;

    function resize() {
      const rect = canvas.parentElement.getBoundingClientRect();
      w = canvas.width = rect.width;
      h = canvas.height = rect.height;
    }

    function displace(px, py, time) {
      let dx = 0, dy = 0;
      for (const b of blobs) {
        const bx = (b.x + Math.sin(time * b.speed * 2500 + b.phase) * 0.12) * w;
        const by = (b.y + Math.cos(time * b.speed * 2000 + b.phase * 1.3) * 0.10) * h;
        const dist = Math.sqrt((px - bx) ** 2 + (py - by) ** 2);
        const radius = b.r * Math.min(w, h);
        const influence = Math.max(0, 1 - dist / radius);
        const strength = influence * influence * 28;
        dx += Math.sin(time * b.speed * 3000 + b.phase) * strength;
        dy += Math.cos(time * b.speed * 2800 + b.phase * 0.7) * strength;
      }
      return { dx, dy };
    }

    function draw() {
      t += 6;
      ctx.clearRect(0, 0, w, h);

      // 1. Glowing orbs
      for (const b of blobs) {
        const cx = (b.x + Math.sin(t * b.speed + b.phase) * 0.15) * w;
        const cy = (b.y + Math.cos(t * b.speed * 0.8 + b.phase * 1.3) * 0.12) * h;
        const radius = b.r * Math.min(w, h);

        const grad = ctx.createRadialGradient(cx, cy, 0, cx, cy, radius);
        grad.addColorStop(0, 'rgba(' + b.color.join(',') + ',' + b.alpha + ')');
        grad.addColorStop(0.4, 'rgba(' + b.color.join(',') + ',' + (b.alpha * 0.5) + ')');
        grad.addColorStop(1, 'rgba(' + b.color.join(',') + ',0)');

        ctx.beginPath();
        ctx.arc(cx, cy, radius, 0, Math.PI * 2);
        ctx.fillStyle = grad;
        ctx.fill();
      }

      // 2. Distorted grid mesh
      ctx.strokeStyle = 'rgba(13,148,136,0.12)';
      ctx.lineWidth = 0.8;

      for (let row = 0; row <= GRID_ROWS; row++) {
        ctx.beginPath();
        for (let col = 0; col <= GRID_COLS; col++) {
          const baseX = (col / GRID_COLS) * w;
          const baseY = (row / GRID_ROWS) * h;
          const { dx, dy } = displace(baseX, baseY, t);
          if (col === 0) ctx.moveTo(baseX + dx, baseY + dy);
          else ctx.lineTo(baseX + dx, baseY + dy);
        }
        ctx.stroke();
      }

      for (let col = 0; col <= GRID_COLS; col++) {
        ctx.beginPath();
        for (let row = 0; row <= GRID_ROWS; row++) {
          const baseX = (col / GRID_COLS) * w;
          const baseY = (row / GRID_ROWS) * h;
          const { dx, dy } = displace(baseX, baseY, t);
          if (row === 0) ctx.moveTo(baseX + dx, baseY + dy);
          else ctx.lineTo(baseX + dx, baseY + dy);
        }
        ctx.stroke();
      }

      // 3. Glowing intersection dots
      for (let row = 0; row <= GRID_ROWS; row++) {
        for (let col = 0; col <= GRID_COLS; col++) {
          const baseX = (col / GRID_COLS) * w;
          const baseY = (row / GRID_ROWS) * h;
          const { dx, dy } = displace(baseX, baseY, t);

          let brightness = 0;
          for (const b of blobs) {
            const bx = (b.x + Math.sin(t * b.speed + b.phase) * 0.15) * w;
            const by = (b.y + Math.cos(t * b.speed * 0.8 + b.phase * 1.3) * 0.12) * h;
            const dist = Math.sqrt((baseX - bx) ** 2 + (baseY - by) ** 2);
            const radius = b.r * Math.min(w, h);
            brightness += Math.max(0, 1 - dist / radius) * 0.5;
          }
          brightness = Math.min(brightness, 0.6);

          if (brightness > 0.05) {
            ctx.beginPath();
            ctx.arc(baseX + dx, baseY + dy, 1.5 + brightness * 2, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(13,148,136,' + brightness + ')';
            ctx.fill();
          }
        }
      }

      requestAnimationFrame(draw);
    }

    resize();
    draw();
    window.addEventListener('resize', resize);
  }

  // Hero mesh — blobs shifted for hero layout (teal top-right, gold bottom-left)
  initMesh('heroMesh', [
    { x: 0.65, y: 0.25, r: 0.40, speed: 0.0004, phase: 0.5,  color: [13, 148, 136], alpha: 0.30 },
    { x: 0.85, y: 0.5,  r: 0.35, speed: 0.0003, phase: 2.1,  color: [13, 148, 136], alpha: 0.22 },
    { x: 0.3,  y: 0.7,  r: 0.32, speed: 0.0005, phase: 3.8,  color: [201, 168, 76], alpha: 0.16 },
    { x: 0.15, y: 0.35, r: 0.28, speed: 0.00055,phase: 4.2,  color: [13, 148, 136], alpha: 0.18 },
    { x: 0.5,  y: 0.15, r: 0.30, speed: 0.00035,phase: 1.1,  color: [201, 168, 76], alpha: 0.12 },
    { x: 0.75, y: 0.8,  r: 0.36, speed: 0.00045,phase: 5.5,  color: [13, 148, 136], alpha: 0.25 },
  ]);

  // System section mesh
  initMesh('systemMesh', [
    { x: 0.25, y: 0.3, r: 0.38, speed: 0.0004, phase: 0,    color: [13, 148, 136], alpha: 0.35 },
    { x: 0.7,  y: 0.6, r: 0.42, speed: 0.0003, phase: 1.8,  color: [13, 148, 136], alpha: 0.25 },
    { x: 0.5,  y: 0.2, r: 0.30, speed: 0.0005, phase: 3.2,  color: [201, 168, 76], alpha: 0.18 },
    { x: 0.8,  y: 0.25,r: 0.28, speed: 0.0006, phase: 4.5,  color: [13, 148, 136], alpha: 0.20 },
    { x: 0.15, y: 0.75,r: 0.34, speed: 0.00035,phase: 2.4,  color: [201, 168, 76], alpha: 0.14 },
    { x: 0.55, y: 0.8, r: 0.32, speed: 0.00045,phase: 5.1,  color: [13, 148, 136], alpha: 0.30 },
  ]);

  // Contact section mesh
  initMesh('contactMesh', [
    { x: 0.2,  y: 0.4, r: 0.35, speed: 0.0003, phase: 1.2,  color: [13, 148, 136], alpha: 0.20 },
    { x: 0.75, y: 0.3, r: 0.30, speed: 0.0004, phase: 3.5,  color: [13, 148, 136], alpha: 0.15 },
    { x: 0.5,  y: 0.7, r: 0.28, speed: 0.00035,phase: 5.0,  color: [201, 168, 76], alpha: 0.10 },
    { x: 0.85, y: 0.7, r: 0.32, speed: 0.00045,phase: 2.0,  color: [13, 148, 136], alpha: 0.18 },
  ]);

  // Over ons hero mesh
  initMesh('onsHeroMesh', [
    { x: 0.70, y: 0.20, r: 0.45, speed: 0.0003, phase: 0.8,  color: [13, 148, 136], alpha: 0.28 },
    { x: 0.15, y: 0.60, r: 0.38, speed: 0.00038,phase: 2.5,  color: [201, 168, 76], alpha: 0.12 },
    { x: 0.85, y: 0.75, r: 0.32, speed: 0.00042,phase: 4.2,  color: [13, 148, 136], alpha: 0.18 },
    { x: 0.40, y: 0.85, r: 0.30, speed: 0.00028,phase: 1.1,  color: [26, 42, 108],  alpha: 0.20 },
  ]);

  // Over ons ambitie mesh
  initMesh('onsAmbMesh', [
    { x: 0.50, y: 0.50, r: 0.55, speed: 0.0002, phase: 1.5,  color: [13, 148, 136], alpha: 0.18 },
    { x: 0.85, y: 0.20, r: 0.35, speed: 0.00028,phase: 3.8,  color: [13, 148, 136], alpha: 0.12 },
    { x: 0.15, y: 0.80, r: 0.30, speed: 0.00032,phase: 0.4,  color: [201, 168, 76], alpha: 0.08 },
  ]);

  function handleFormSubmit(e, targetId) {
    e.preventDefault();

    // Check if it's a modal or the inline contact form
    const isModal = document.querySelector('#' + targetId + '.cta-modal');
    const isInlineForm = targetId === 'contact-form';

    if (isModal) {
      // Modal form success
      const box = document.querySelector('#' + targetId + ' .cta-modal-box');
      box.innerHTML = `
        <div style="text-align:center;padding:32px 0 8px;">
          <div style="font-size:54px;margin-bottom:18px;">✅</div>
          <h3 style="font-family:'Syne',sans-serif;font-size:24px;font-weight:800;color:#0d1117;margin-bottom:12px;letter-spacing:-0.5px;">Ontvangen!</h3>
          <p style="font-size:15px;color:#6b7280;line-height:1.7;margin-bottom:32px;max-width:340px;margin-left:auto;margin-right:auto;">We nemen zo snel mogelijk contact met u op, uiterlijk binnen één werkdag.</p>
          <button onclick="closeModal('${targetId}')" style="background:#22c55e;color:white;border:none;padding:13px 32px;border-radius:100px;font-family:'DM Sans',sans-serif;font-size:15px;font-weight:600;cursor:pointer;box-shadow:0 8px 28px rgba(34,197,94,0.35);">Sluiten ✓</button>
        </div>
      `;
    } else if (isInlineForm) {
      // Inline contact form success
      const card = document.querySelector('.contact-form-card');
      card.innerHTML = `
        <div class="form-success">
          <div style="font-size:54px;margin-bottom:18px;">✅</div>
          <h3 style="font-family:'Syne',sans-serif;font-size:24px;font-weight:800;color:#0d1117;margin-bottom:12px;letter-spacing:-0.5px;">Ontvangen!</h3>
          <p style="font-size:15px;color:#6b7280;line-height:1.7;max-width:360px;margin:0 auto 8px;">We nemen zo snel mogelijk contact met je op. Uiterlijk binnen 4 werkuren ontvang je een reactie.</p>
        </div>
      `;
    }
  }
