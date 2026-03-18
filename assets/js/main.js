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

  function handleFormSubmit(e, modalId) {
    e.preventDefault();
    const box = document.querySelector('#' + modalId + ' .cta-modal-box');
    box.innerHTML = `
      <div style="text-align:center;padding:32px 0 8px;">
        <div style="font-size:54px;margin-bottom:18px;">✅</div>
        <h3 style="font-family:'Syne',sans-serif;font-size:24px;font-weight:800;color:#0d1117;margin-bottom:12px;letter-spacing:-0.5px;">Ontvangen!</h3>
        <p style="font-size:15px;color:#6b7280;line-height:1.7;margin-bottom:32px;max-width:340px;margin-left:auto;margin-right:auto;">We nemen zo snel mogelijk contact met u op, uiterlijk binnen één werkdag.</p>
        <button onclick="closeModal('${modalId}')" style="background:#22c55e;color:white;border:none;padding:13px 32px;border-radius:100px;font-family:'DM Sans',sans-serif;font-size:15px;font-weight:600;cursor:pointer;box-shadow:0 8px 28px rgba(34,197,94,0.35);">Sluiten ✓</button>
      </div>
    `;
  }
