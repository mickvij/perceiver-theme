<?php get_header(); ?>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-logo">perceiver<span>.</span></div>
  <div class="nav-links">
    <a href="#monitoren">Monitoren</a>
    <a href="#bestrijding">Bestrijding</a>
    <a href="#rapportage">Rapportage</a>
    <a href="#werkwijze">Werkwijze</a>
    <a href="#contact" class="nav-cta">Praat met expert</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-text">
      <div class="hero-badge">AI-aangedreven plaagdierbestrijding</div>
      <h1>De&nbsp;nieuwe&nbsp;standaard<br>in bestrijding van<br><em>ratten & muizen.</em></h1>
      <p class="hero-sub">IPM-aanpak gecombineerd met AI-camera­detectie en slimme vallen. Realtime inzicht, maximale effectiviteit.</p>
      <div class="hero-actions">
        <a href="#monitoren" class="btn-primary">Praat met een expert</a>
        <a href="#werkwijze" class="btn-ghost">Onze werkwijze →</a>
      </div>
    </div>

    <div class="hero-visual">
      <div class="float-badge badge-1">
        <div class="badge-icon" style="background:#dcfce7">🎯</div>
        <div>
          <div style="font-size:11px;color:#6b7280;">Nieuw vangst</div>
          <div style="font-size:13px;">Locatie B · Zone 3</div>
        </div>
      </div>

      <div class="hero-slideshow" id="heroSlideshow">
        <!-- SLIDE 1: AI Detection -->
        <div class="hero-slide active" data-slide="0">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-detection.png" alt="AI beeldherkenning detecteert muis met 99% zekerheid">
          <div class="slide-caption">
            <div class="slide-caption-dot"></div>
            <div class="slide-caption-text">AI Beeldherkenning</div>
          </div>
          <div class="slide-step">01 <span>/ 04</span></div>
        </div>

        <!-- SLIDE 2: Phone Alert -->
        <div class="hero-slide" data-slide="1">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-alert.png" alt="Directe melding op telefoon bij detectie">
          <div class="slide-caption">
            <div class="slide-caption-dot"></div>
            <div class="slide-caption-text">Direct Alert</div>
          </div>
          <div class="slide-step">02 <span>/ 04</span></div>
        </div>

        <!-- SLIDE 3: Service Van -->
        <div class="hero-slide" data-slide="2">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-service.png" alt="Perceiver bestrijder komt aan bij locatie">
          <div class="slide-caption">
            <div class="slide-caption-dot"></div>
            <div class="slide-caption-text">Snelle Respons</div>
          </div>
          <div class="slide-step">03 <span>/ 04</span></div>
        </div>

        <!-- SLIDE 4: Dashboard -->
        <div class="hero-slide" data-slide="3">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slide-dashboard.png" alt="Volledig data dashboard met realtime inzichten">
          <div class="slide-caption">
            <div class="slide-caption-dot"></div>
            <div class="slide-caption-text">Data Dashboard</div>
          </div>
          <div class="slide-step">04 <span>/ 04</span></div>
        </div>

        <!-- Progress bar -->
        <div class="slide-progress">
          <div class="slide-progress-bar" id="slideProgressBar"></div>
        </div>
        <!-- Indicators -->
        <div class="slide-indicators">
          <button class="slide-dot active" data-index="0"></button>
          <button class="slide-dot" data-index="1"></button>
          <button class="slide-dot" data-index="2"></button>
          <button class="slide-dot" data-index="3"></button>
        </div>
      </div>

      <div class="float-badge badge-2">
        <div class="badge-icon" style="background:#dbeafe">📍</div>
        <div>
          <div style="font-size:11px;color:#6b7280;">Heatmap update</div>
          <div style="font-size:13px;">3 nieuwe hotspots</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CARDS -->
<div class="cards-section">
  <div class="cards-grid">
    <div class="service-card card-3" onclick="scrollToSection('monitoren')">
      <div>
        <div class="card-icon">📡</div>
        <div class="card-title">Monitoren</div>
        <div class="card-desc">AI-cameradetectie vanaf de eerste beweging.</div>
      </div>
      <a class="card-btn" href="#monitoren">Lees meer over monitoren</a>
    </div>
    <div class="service-card card-2" onclick="scrollToSection('bestrijding')">
      <div>
        <div class="card-icon">⚡</div>
        <div class="card-title">Bestrijding</div>
        <div class="card-desc">AI-gestuurde val die blijft vangen tot de laatste rat of muis.</div>
      </div>
      <a class="card-btn" href="#bestrijding">Lees meer over bestrijden</a>
    </div>
    <div class="service-card card-4" onclick="scrollToSection('rapportage')">
      <div>
        <div class="card-icon">📊</div>
        <div class="card-title">Rapportage</div>
        <div class="card-desc">Volledig inzicht in activiteit en vangst.</div>
      </div>
      <a class="card-btn" href="#rapportage">Lees meer over rapportage</a>
    </div>
    <div class="service-card card-1" onclick="scrollToSection('werkwijze')">
      <div>
        <div class="card-icon">🔍</div>
        <div class="card-title">Werkwijze</div>
        <div class="card-desc">IPM-aanpak, realtime geoptimaliseerd met slimme technologie.</div>
      </div>
      <a class="card-btn" href="#werkwijze">Lees meer over onze werkwijze</a>
    </div>
  </div>
</div>

<!-- MONITOREN -->
<section id="monitoren" style="scroll-margin-top:80px;margin:0 40px 40px;">

  <!-- Intro: headline + live camera mockup -->
  <div style="background:white;border-radius:32px;padding:72px 80px;box-shadow:0 2px 40px rgba(0,0,0,0.05);overflow:hidden;position:relative;">
    <div style="position:absolute;top:-100px;right:-100px;width:480px;height:480px;background:radial-gradient(circle,rgba(15,163,177,0.06) 0%,transparent 70%);pointer-events:none;"></div>
    <div class="mon-intro">
      <div class="reveal">
        <div class="section-label" style="color:#0fa3b1;background:rgba(15,163,177,0.08)">Monitoren</div>
        <h2 class="section-h2">AI Monitoring van<br><span class="mon-headline-accent">Muizen & Ratten</span></h2>
        <p class="mon-tagline">Altijd zicht op knaagdieractiviteit<br>voordat het een probleem wordt.</p>
        <p style="font-size:15px;line-height:1.75;color:var(--text-muted);max-width:420px;margin-bottom:36px;">Perceiver gebruikt slimme camera's met kunstmatige intelligentie om muizen en ratten automatisch te detecteren. Zo zien we activiteit al in het beginstadium — en kunnen we direct ingrijpen.</p>
        <a href="#mon-steps" class="btn-primary" style="background:linear-gradient(135deg,#0fa3b1,#0891b2);box-shadow:0 8px 28px rgba(15,163,177,0.35);">Bekijk hoe het werkt ↓</a>
      </div>
      <div class="mon-cam-ui reveal reveal-delay-2">
        <div class="mon-cam-header">
          <div class="mon-cam-live"><span class="mon-live-dot"></span>LIVE</div>
          <div class="mon-cam-name">CAM 02 — Keuken A · Restaurant</div>
          <div class="mon-cam-time">23:47:12</div>
        </div>
        <div class="mon-cam-feed">
          <div class="mon-cam-overlay-grid"></div>
          <div class="mon-heatmap-blob" style="width:160px;height:120px;top:18%;left:12%;background:radial-gradient(ellipse,rgba(239,68,68,0.22) 0%,transparent 70%);"></div>
          <div class="mon-heatmap-blob" style="width:100px;height:80px;top:55%;left:60%;background:radial-gradient(ellipse,rgba(245,166,35,0.16) 0%,transparent 70%);"></div>
          <div class="mon-detection-zone">
            <div class="mon-bbox"></div>
            <div class="mon-bbox-label">🐭 Mouse <span>94%</span></div>
          </div>
          <div class="mon-cam-thumbs">
            <div class="mon-cam-thumb"><div class="mon-thumb-label">CAM 01</div><div class="mon-thumb-status">ACTIEF</div></div>
            <div class="mon-cam-thumb"><div class="mon-thumb-label">CAM 03</div><div class="mon-thumb-status">ACTIEF</div></div>
            <div class="mon-cam-thumb alert"><div class="mon-thumb-label">CAM 04</div><div class="mon-thumb-status" style="color:#ef4444;">DETECTIE</div></div>
          </div>
        </div>
        <div class="mon-cam-footer">
          <span class="mon-cam-footer-label">Activiteit</span>
          <div class="mon-cam-footer-track"><div class="mon-cam-footer-fill"></div></div>
          <span class="mon-cam-footer-status">● Detectie actief</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Steps: hoe het systeem werkt -->
  <div id="mon-steps" style="background:var(--bg-light);border-radius:32px;padding:72px 80px;margin-top:16px;">
    <div class="reveal" style="text-align:center;margin-bottom:64px;">
      <div class="section-label" style="color:#0fa3b1;background:rgba(15,163,177,0.1);display:inline-flex;">Hoe het werkt</div>
      <h3 class="section-h2" style="margin-top:14px;margin-bottom:0;font-size:clamp(26px,2.8vw,42px);">Van camera tot inzicht<br>in 4 stappen</h3>
    </div>
    <div class="mon-steps">
      <div class="mon-step reveal reveal-delay-1">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#1a7fe8,#0fa3b1);">📹</div>
        <div class="mon-step-num">STAP 01</div>
        <h4 class="mon-step-title">Camera's op risicolocaties</h4>
        <p class="mon-step-desc">We plaatsen slimme camera's op de plekken waar knaagdieren het meest actief zijn: ingangen, keukens, opslagruimtes, afvalzones en laad- of losplaatsen.</p>
      </div>
      <div class="mon-step reveal reveal-delay-2">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#0fa3b1,#06b6d4);">🧠</div>
        <div class="mon-step-num">STAP 02</div>
        <h4 class="mon-step-title">AI detecteert muizen en ratten</h4>
        <p class="mon-step-desc">De camera's analyseren continu beelden met AI die specifiek getraind is op knaagdieren. Muizen, ratten en echte beweging worden automatisch herkend met meer dan 97% nauwkeurigheid.</p>
      </div>
      <div class="mon-step reveal reveal-delay-3">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#06b6d4,#0891b2);">📊</div>
        <div class="mon-step-num">STAP 03</div>
        <h4 class="mon-step-title">Direct inzicht in activiteit</h4>
        <p class="mon-step-desc">Elke detectie wordt automatisch geregistreerd. U ziet precies waar knaagdieren actief zijn, wanneer ze worden gezien en hoe vaak — realtime en altijd beschikbaar.</p>
      </div>
      <div class="mon-step reveal reveal-delay-4">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#0891b2,#1a7fe8);">⚡</div>
        <div class="mon-step-num">STAP 04</div>
        <h4 class="mon-step-title">Snel en gericht ingrijpen</h4>
        <p class="mon-step-desc">Vroege detectie maakt gerichte en minimale interventie mogelijk. Minder vallen nodig, minder schade en vrijwel geen kans op een echte plaag.</p>
      </div>
    </div>
  </div>

</section>

<!-- BESTRIJDING -->
<section id="bestrijding" style="scroll-margin-top:80px;margin:0 40px 40px;">

  <!-- Intro: dark hero with bestrijdingsplan UI -->
  <div style="background:linear-gradient(135deg,#0f0a1e,#1e0d42,#0f0a1e);border-radius:32px;padding:72px 80px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:-80px;right:-80px;width:450px;height:450px;background:radial-gradient(circle,rgba(232,64,106,0.22) 0%,transparent 70%);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-50px;width:350px;height:350px;background:radial-gradient(circle,rgba(124,58,237,0.18) 0%,transparent 70%);pointer-events:none;"></div>
    <div class="bes-intro">
      <div class="reveal">
        <div class="section-label" style="color:#f472b6;background:rgba(244,114,182,0.12)">Bestrijding</div>
        <h2 class="section-h2" style="color:white;">Slimme bestrijding<br><span class="bes-accent">op basis van data</span></h2>
        <p class="bes-tagline">Vallen worden alleen geplaatst waar knaagdieren daadwerkelijk actief zijn.</p>
        <p style="font-size:15px;line-height:1.75;color:rgba(255,255,255,0.58);max-width:420px;margin-bottom:28px;">In plaats van overal standaard vallen te plaatsen, gebruikt Perceiver de data van het AI-monitoringsysteem om precies te bepalen waar en wanneer bestrijding nodig is. Sneller gevangen, minder verstoring.</p>
        <div class="bes-badges">
          <div class="bes-badge">🚫 Geen gif nodig</div>
          <div class="bes-badge">🔬 Gepatenteerde technologie</div>
          <div class="bes-badge">🧠 AI-gestuurd</div>
        </div>
        <a href="#bes-steps" class="btn-primary" style="background:linear-gradient(135deg,#e8406a,#c026d3);box-shadow:0 8px 28px rgba(232,64,106,0.35);">Bekijk hoe het werkt ↓</a>
      </div>
      <div class="bes-ui reveal reveal-delay-2">
        <div class="bes-ui-header">
          <div class="bes-ui-live"><span class="bes-live-dot"></span>Bestrijdingsplan actief</div>
          <div class="bes-ui-badge">3 locaties</div>
        </div>
        <div class="bes-events">
          <div class="bes-event">
            <div class="bes-event-source">
              <div class="bes-event-dot detect"></div>
              <div>
                <div class="bes-event-label">Detectie · Keuken A</div>
                <div class="bes-event-sub">Vandaag 23:47 · Muis · Zone 3</div>
              </div>
            </div>
            <div class="bes-event-arrow">→</div>
            <div class="bes-event-result">
              <div class="bes-event-action-dot trap"></div>
              <div class="bes-event-action-label">Val geplaatst</div>
            </div>
          </div>
          <div class="bes-event">
            <div class="bes-event-source">
              <div class="bes-event-dot detect"></div>
              <div>
                <div class="bes-event-label">Detectie · Opslag B</div>
                <div class="bes-event-sub">Gisteren 02:14 · Rat · Zone 7</div>
              </div>
            </div>
            <div class="bes-event-arrow">→</div>
            <div class="bes-event-result">
              <div class="bes-event-action-dot trap"></div>
              <div class="bes-event-action-label">Val geplaatst</div>
            </div>
          </div>
          <div class="bes-event success">
            <div class="bes-event-source">
              <div class="bes-event-dot caught"></div>
              <div>
                <div class="bes-event-label">Vangst · Kelder C</div>
                <div class="bes-event-sub">Vandaag 04:31 · Muis gevangen</div>
              </div>
            </div>
            <div class="bes-event-arrow">→</div>
            <div class="bes-event-result">
              <div class="bes-event-action-dot caught"></div>
              <div class="bes-event-action-label" style="color:#22c55e;">Gevangen ✓</div>
            </div>
          </div>
        </div>
        <div class="bes-floorplan">
          <div class="bes-fp-label">Locatieoverzicht · Nu actief</div>
          <div class="bes-fp-rooms">
            <div class="bes-room trap-active">
              <div class="bes-room-name">Keuken</div>
              <div class="bes-trap-marker active"></div>
            </div>
            <div class="bes-room trap-active">
              <div class="bes-room-name">Opslag</div>
              <div class="bes-trap-marker active"></div>
            </div>
            <div class="bes-room">
              <div class="bes-room-name">Entree</div>
              <div class="bes-trap-marker"></div>
            </div>
            <div class="bes-room caught">
              <div class="bes-room-name">Kelder</div>
              <div class="bes-trap-marker caught"></div>
            </div>
          </div>
        </div>
        <div class="bes-ui-footer">
          <div class="bes-ui-stat">
            <div class="bes-ui-stat-n">3</div>
            <div class="bes-ui-stat-l">vallen actief</div>
          </div>
          <div class="bes-ui-stat green">
            <div class="bes-ui-stat-n">0</div>
            <div class="bes-ui-stat-l">gif gebruikt</div>
          </div>
          <div class="bes-ui-stat">
            <div class="bes-ui-stat-n">98%</div>
            <div class="bes-ui-stat-l">succesratio</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Steps: eerst detecteren, dan gericht bestrijden -->
  <div id="bes-steps" style="background:var(--bg-light);border-radius:32px;padding:72px 80px;margin-top:16px;">
    <div class="reveal" style="text-align:center;margin-bottom:64px;">
      <div class="section-label" style="color:#e8406a;background:rgba(232,64,106,0.08);display:inline-flex;">Hoe het werkt</div>
      <h3 class="section-h2" style="margin-top:14px;margin-bottom:0;font-size:clamp(26px,2.8vw,42px);">Eerst detecteren.<br>Dan gericht bestrijden.</h3>
    </div>
    <div class="mon-steps bes-steps">
      <div class="mon-step reveal reveal-delay-1">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#e8406a,#c026d3);">📡</div>
        <div class="mon-step-num" style="color:#e8406a;">STAP 01</div>
        <h4 class="mon-step-title">Activiteit wordt gedetecteerd</h4>
        <p class="mon-step-desc">De camera's signaleren wanneer een muis of rat actief is. Het systeem registreert de locatie, het tijdstip en de frequentie — zodat een nauwkeurig beeld ontstaat van waar knaagdieren zich bevinden.</p>
      </div>
      <div class="mon-step reveal reveal-delay-2">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#c026d3,#9333ea);">🪤</div>
        <div class="mon-step-num" style="color:#e8406a;">STAP 02</div>
        <h4 class="mon-step-title">Vallen alleen waar nodig</h4>
        <p class="mon-step-desc">Op basis van detectiedata plaatsen we vallen precies op de locaties waar activiteit is gezien. Geen onnodige vallen, geen overbodige verstoring van de omgeving.</p>
      </div>
      <div class="mon-step reveal reveal-delay-3">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#9333ea,#7c3aed);">🧠</div>
        <div class="mon-step-num" style="color:#e8406a;">STAP 03</div>
        <h4 class="mon-step-title">AI optimaliseert de vangst</h4>
        <p class="mon-step-desc">De slimme vallen herkennen wanneer een knaagdier nadert, welke soort aanwezig is en wat de activiteit rondom de val is. Zo bepaalt het systeem het optimale vangmoment voor maximale effectiviteit.</p>
      </div>
      <div class="mon-step reveal reveal-delay-4">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#7c3aed,#e8406a);">✅</div>
        <div class="mon-step-num" style="color:#e8406a;">STAP 04</div>
        <h4 class="mon-step-title">Vallen verdwijnen na oplossing</h4>
        <p class="mon-step-desc">Zodra het systeem geen activiteit meer detecteert, worden de vallen verwijderd. Geen permanente middelen, geen gif — een schone en professionele omgeving.</p>
      </div>
    </div>
  </div>

  <!-- Comparison: traditioneel vs. Perceiver -->
  <div style="background:white;border-radius:32px;padding:72px 80px;margin-top:16px;box-shadow:0 2px 40px rgba(0,0,0,0.05);">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="color:#e8406a;background:rgba(232,64,106,0.08);display:inline-flex;">Waarom anders</div>
      <h3 class="section-h2" style="margin-top:14px;margin-bottom:0;font-size:clamp(24px,2.5vw,38px);">Traditioneel vs. Perceiver</h3>
    </div>
    <div class="bes-comparison">
      <div class="bes-comp-col bad">
        <div class="bes-comp-header">❌ Traditionele aanpak</div>
        <ul>
          <li>Vallen op vaste plekken, ongeacht activiteit</li>
          <li>Knaagdieren wennen aan vallen — vangst wordt minder</li>
          <li>Gif als standaard bestrijdingsmiddel</li>
          <li>Vallen blijven permanent aanwezig in het bedrijf</li>
          <li>Beperkt zicht op daadwerkelijke resultaten</li>
        </ul>
      </div>
      <div class="bes-comp-col good">
        <div class="bes-comp-header">✓ Perceiver aanpak</div>
        <ul>
          <li>Vallen uitsluitend geplaatst op basis van AI-detectie</li>
          <li>AI past vangstrategie continu aan per locatie en seizoen</li>
          <li>Geen gif nodig — veilig voor personeel en voedselomgeving</li>
          <li>Vallen verdwijnen zodra het probleem is opgelost</li>
          <li>Volledig inzicht via realtime data en rapportage</li>
        </ul>
      </div>
    </div>
  </div>

</section>

<!-- RAPPORTAGE -->
<section id="rapportage" style="scroll-margin-top:80px;margin:0 40px 40px;">

  <!-- Block 1: Intro with live dashboard -->
  <div style="background:linear-gradient(135deg,#fffbeb,#fef3c7,#fff7ed);border-radius:32px;padding:72px 80px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:-100px;right:-80px;width:450px;height:450px;background:radial-gradient(circle,rgba(245,166,35,0.18) 0%,transparent 70%);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-60px;width:320px;height:320px;background:radial-gradient(circle,rgba(239,68,68,0.09) 0%,transparent 70%);pointer-events:none;"></div>
    <div class="rap-intro">
      <div class="reveal">
        <div class="section-label" style="color:#b45309;background:rgba(180,83,9,0.08)">Rapportage</div>
        <h2 class="section-h2">Volledig inzicht.<br><span class="rap-accent">Altijd beschikbaar.</span></h2>
        <p class="rap-tagline">Alle detecties, vangsten en maatregelen overzichtelijk vastgelegd.</p>
        <p style="font-size:15px;line-height:1.75;color:#78716c;max-width:420px;margin-bottom:36px;">Het Perceiver-systeem registreert automatisch waar en wanneer muizen en ratten worden gezien en gevangen. Deze data vormt de basis voor rapportages en een continu verbeterend bestrijdingsplan.</p>
        <a href="#rap-steps" class="btn-primary" style="background:linear-gradient(135deg,#f5a623,#ef4444);box-shadow:0 8px 28px rgba(245,166,35,0.35);">Bekijk hoe het werkt ↓</a>
      </div>
      <div class="rap-dashboard reveal reveal-delay-2">
        <div class="rap-dash-header">
          <div class="rap-dash-title">📋 Perceiver Dashboard</div>
          <div class="rap-dash-period">Maandoverzicht · Maart 2026</div>
          <div class="rap-dash-export">↓ PDF</div>
        </div>
        <div class="rap-kpis">
          <div class="rap-kpi">
            <div class="rap-kpi-n" style="color:#f5a623">14</div>
            <div class="rap-kpi-l">Vangsten</div>
          </div>
          <div class="rap-kpi">
            <div class="rap-kpi-n">42</div>
            <div class="rap-kpi-l">Detecties</div>
          </div>
          <div class="rap-kpi">
            <div class="rap-kpi-n" style="color:#22c55e">↓83%</div>
            <div class="rap-kpi-l">Activiteitsdaling</div>
          </div>
        </div>
        <div class="rap-chart">
          <div class="rap-chart-label">Activiteit per dag · Week 10</div>
          <div class="rap-bars">
            <div class="rap-bar-wrap"><div class="rap-bar" style="height:38%"></div><div class="rap-bar-day">Ma</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar highlight" style="height:62%"></div><div class="rap-bar-day">Di</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar peak" style="height:88%"></div><div class="rap-bar-day">Wo</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar highlight" style="height:54%"></div><div class="rap-bar-day">Do</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar" style="height:32%"></div><div class="rap-bar-day">Vr</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar" style="height:18%"></div><div class="rap-bar-day">Za</div></div>
            <div class="rap-bar-wrap"><div class="rap-bar" style="height:12%"></div><div class="rap-bar-day">Zo</div></div>
          </div>
        </div>
        <div class="rap-zones">
          <div class="rap-zones-label">Activiteit per zone</div>
          <div class="rap-zone-row">
            <div class="rap-zone-name">Keuken A</div>
            <div class="rap-zone-track"><div class="rap-zone-fill high" style="width:78%"></div></div>
            <div class="rap-zone-level high">Hoog</div>
          </div>
          <div class="rap-zone-row">
            <div class="rap-zone-name">Opslag B</div>
            <div class="rap-zone-track"><div class="rap-zone-fill" style="width:44%"></div></div>
            <div class="rap-zone-level mid">Matig</div>
          </div>
          <div class="rap-zone-row">
            <div class="rap-zone-name">Entree</div>
            <div class="rap-zone-track"><div class="rap-zone-fill" style="width:18%"></div></div>
            <div class="rap-zone-level low">Laag</div>
          </div>
        </div>
        <div class="rap-dash-footer">
          <div class="rap-footer-status">✅ Rapport gegenereerd · 13 mrt</div>
          <div class="rap-footer-dl">↓ Download PDF</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Block 2: Steps -->
  <div id="rap-steps" style="background:var(--bg-light);border-radius:32px;padding:72px 80px;margin-top:16px;">
    <div class="reveal" style="text-align:center;margin-bottom:64px;">
      <div class="section-label" style="color:#b45309;background:rgba(180,83,9,0.08);display:inline-flex;">Hoe het werkt</div>
      <h3 class="section-h2" style="margin-top:14px;margin-bottom:0;font-size:clamp(26px,2.8vw,42px);">Van detectie tot rapport<br>volledig automatisch.</h3>
    </div>
    <div class="mon-steps rap-steps">
      <div class="mon-step reveal reveal-delay-1">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#f5a623,#f59e0b);">📋</div>
        <div class="mon-step-num" style="color:#f5a623;">STAP 01</div>
        <h4 class="mon-step-title">Alles automatisch vastgelegd</h4>
        <p class="mon-step-desc">Elke detectie, vangst en maatregel wordt automatisch geregistreerd. Geen handmatige invoer, geen ontbrekende data — alles altijd compleet en actueel.</p>
      </div>
      <div class="mon-step reveal reveal-delay-2">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#f59e0b,#ef4444);">📍</div>
        <div class="mon-step-num" style="color:#f5a623;">STAP 02</div>
        <h4 class="mon-step-title">Inzicht in locaties en patronen</h4>
        <p class="mon-step-desc">Zie precies waar knaagdieren binnenkomen, welke routes ze nemen en op welke momenten ze actief zijn. Risicolocaties en seizoenspatronen worden direct zichtbaar.</p>
      </div>
      <div class="mon-step reveal reveal-delay-3">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#ef4444,#f5a623);">📅</div>
        <div class="mon-step-num" style="color:#f5a623;">STAP 03</div>
        <h4 class="mon-step-title">Dagelijks datagestuurd plan</h4>
        <p class="mon-step-desc">Op basis van de meest recente data wordt elke dag het bestrijdingsplan bijgesteld. Waar zijn vallen nodig? Waar kunnen ze weg? Het systeem bepaalt dit automatisch.</p>
      </div>
      <div class="mon-step reveal reveal-delay-4">
        <div class="mon-step-icon" style="background:linear-gradient(135deg,#f5a623,#ef4444);">🏆</div>
        <div class="mon-step-num" style="color:#f5a623;">STAP 04</div>
        <h4 class="mon-step-title">Audit- en complianceklaar</h4>
        <p class="mon-step-desc">Alle rapportages zijn direct exporteerbaar voor HACCP-controles, audits en certificeringstrajecten. Transparante documentatie van elke maatregel, vangst en meting.</p>
      </div>
    </div>
  </div>

  <!-- Block 3: Feature highlights -->
  <div style="background:white;border-radius:32px;padding:72px 80px;margin-top:16px;box-shadow:0 2px 40px rgba(0,0,0,0.05);">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="color:#b45309;background:rgba(180,83,9,0.08);display:inline-flex;">Wat u ontvangt</div>
      <h3 class="section-h2" style="margin-top:14px;margin-bottom:0;font-size:clamp(24px,2.5vw,38px);">Drie vormen van inzicht<br>in één systeem</h3>
    </div>
    <div class="rap-features">
      <div class="rap-feature-card reveal reveal-delay-1">
        <div class="rap-feature-icon" style="background:linear-gradient(135deg,rgba(245,166,35,0.15),rgba(245,166,35,0.04));">📄</div>
        <div class="rap-feature-title">Bezoekersverslagen</div>
        <div class="rap-feature-desc">Overzichtelijke verslagen met alle waarnemingen per locatie: waar knaagdieren zijn gezien, vangsten, genomen maatregelen en geplaatste of verwijderde vallen. Transparant en aantoonbaar.</div>
      </div>
      <div class="rap-feature-card reveal reveal-delay-2">
        <div class="rap-feature-icon" style="background:linear-gradient(135deg,rgba(239,68,68,0.12),rgba(239,68,68,0.03));">📈</div>
        <div class="rap-feature-title">Trend- en patroonanalyse</div>
        <div class="rap-feature-desc">Analyseer hoe activiteit zich door de tijd ontwikkelt. Identificeer seizoenspatronen, structurele risicofactoren en verbetermogelijkheden in gebouw en proces.</div>
      </div>
      <div class="rap-feature-card reveal reveal-delay-3">
        <div class="rap-feature-icon" style="background:linear-gradient(135deg,rgba(34,197,94,0.12),rgba(34,197,94,0.03));">✅</div>
        <div class="rap-feature-title">HACCP & Audit klaar</div>
        <div class="rap-feature-desc">Voor horeca en voedselbedrijven: directe documentatie voor voedselveiligheidscontroles en certificeringstrajecten. Altijd compliant, altijd gereed voor inspectie.</div>
      </div>
    </div>
  </div>

</section>

<!-- WERKWIJZE -->
<section id="werkwijze" style="scroll-margin-top:80px;">
  <div style="background:white;border-radius:32px;margin:0 40px 80px;padding:80px;box-shadow:0 2px 40px rgba(0,0,0,0.05);">
    <div class="reveal">
      <div class="section-label" style="color:#1a7fe8;background:rgba(26,127,232,0.08)">Werkwijze</div>
      <h2 class="section-h2">Gestructureerd. Slim.<br>Duurzaam effectief.</h2>
      <p class="section-sub">Onze IPM-methodiek combineert preventie, detectie en interventie in een naadloos samenspel van technologie en vakkennis.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card reveal reveal-delay-1">
        <div class="step-num">01</div>
        <div class="step-icon">🔎</div>
        <div class="step-title">Inspectie & Analyse</div>
        <div class="step-desc">Een grondige locatie-inspectie legt risicofactoren bloot. We analyseren routes, nestplaatsen en kwetsbare zones.</div>
        <div class="step-connector"></div>
      </div>
      <div class="step-card reveal reveal-delay-2">
        <div class="step-num">02</div>
        <div class="step-icon">📐</div>
        <div class="step-title">Strategie & Plaatsing</div>
        <div class="step-desc">Op basis van heatmaps en AI-analyse plaatsen we vallen en camera's op optimale locaties.</div>
        <div class="step-connector"></div>
      </div>
      <div class="step-card reveal reveal-delay-3">
        <div class="step-num">03</div>
        <div class="step-icon">🔄</div>
        <div class="step-title">Monitor & Optimaliseer</div>
        <div class="step-desc">Realtime dashboards geven direct inzicht. Het systeem optimaliseert continu op basis van nieuwe data.</div>
      </div>
    </div>
  </div>
</section>

<!-- SAMENWERKEN / CONTACT CTA -->
<section id="contact" style="scroll-margin-top:80px;margin:0 40px 80px;">
  <div class="cta-section">
    <div class="cta-bg-blob cta-blob-1"></div>
    <div class="cta-bg-blob cta-blob-2"></div>
    <div class="cta-bg-blob cta-blob-3"></div>
    <!-- Centered content -->
    <div class="cta-center reveal">
      <div class="section-label" style="color:rgba(255,255,255,0.75);background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.14);">Contact</div>
      <h2 class="cta-h2">Klaar om uw<br>bedrijf te<br><span class="cta-h2-accent">beschermen?</span></h2>
      <p class="cta-p">Perceiver detecteert ratten en muizen 24/7 — preventief, stil en betrouwbaar. Neem vandaag contact op voor een vrijblijvend gesprek.</p>

      <div class="cta-trust-bar">
        <div class="cta-trust-item">
          <div class="cta-trust-dot"></div>
          <span>Reactie binnen 4 uur</span>
        </div>
        <div class="cta-trust-sep">·</div>
        <div class="cta-trust-item"><span>Geen verplichtingen</span></div>
        <div class="cta-trust-sep">·</div>
        <div class="cta-trust-item"><span>Gratis demo</span></div>
      </div>

      <div class="cta-contacts">
        <a href="tel:+31621667013" class="cta-contact">
          <div class="cta-contact-icon">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.338c0 9.13 7.406 16.537 16.537 16.537h2.046a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v1.838z"/></svg>
          </div>
          <div>
            <div class="cta-contact-label">Bellen</div>
            <div class="cta-contact-value">+31 6 21667013</div>
          </div>
        </a>
        <a href="mailto:info@perceiver.nl" class="cta-contact">
          <div class="cta-contact-icon">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
          </div>
          <div>
            <div class="cta-contact-label">Mailen</div>
            <div class="cta-contact-value">info@perceiver.nl</div>
          </div>
        </a>
      </div>

      <div class="cta-btns">
        <button class="cta-btn-a" onclick="openModal('modal-callback')">
          Plan een gratis demo
          <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </button>
        <button class="cta-btn-b" onclick="openModal('modal-vraag')">
          Stel een vraag
        </button>
      </div>
    </div>

    <!-- Decorative: person in gradient glow -->
    <div class="cta-right reveal reveal-delay-2">
      <div class="cta-person-glow"></div>
      <img
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cta-person.png"
        alt="Perceiver specialist"
        class="cta-person"
      >
      <div class="cta-float-card">
        <div class="cta-float-dot"></div>
        <div class="cta-float-text">
          <div class="cta-float-label">AI Detectie</div>
          <div class="cta-float-value">Activiteit gesignaleerd</div>
        </div>
        <div class="cta-float-badge">Live</div>
      </div>
    </div>
  </div>
</section>

<!-- MODAL: Stel een vraag -->
<div class="cta-modal" id="modal-vraag">
  <div class="cta-modal-box">
    <button class="cta-modal-close" onclick="closeModal('modal-vraag')">✕</button>
    <div class="cta-modal-icon">💬</div>
    <h3 class="cta-modal-title">Stel een vraag</h3>
    <p class="cta-modal-sub">We beantwoorden uw vraag zo snel mogelijk, uiterlijk binnen één werkdag.</p>
    <form class="cta-form" onsubmit="handleFormSubmit(event, 'modal-vraag')">
      <div class="cta-form-row">
        <div class="cta-form-group">
          <label>Naam</label>
          <input type="text" placeholder="Uw naam" required>
        </div>
        <div class="cta-form-group">
          <label>E-mailadres</label>
          <input type="email" placeholder="uw@email.nl" required>
        </div>
      </div>
      <div class="cta-form-group">
        <label>Bedrijfsnaam</label>
        <input type="text" placeholder="Uw bedrijf (optioneel)">
      </div>
      <div class="cta-form-group">
        <label>Uw vraag</label>
        <textarea rows="4" placeholder="Waar kunnen wij u mee helpen?" required></textarea>
      </div>
      <button type="submit" class="cta-form-submit">Verstuur vraag →</button>
    </form>
  </div>
</div>

<!-- MODAL: Teruggebeld worden -->
<div class="cta-modal" id="modal-callback">
  <div class="cta-modal-box">
    <button class="cta-modal-close" onclick="closeModal('modal-callback')">✕</button>
    <div class="cta-modal-icon">📅</div>
    <h3 class="cta-modal-title">Plan een gratis demo</h3>
    <p class="cta-modal-sub">Laat uw gegevens achter en wij bellen u terug om een vrijblijvende demo in te plannen.</p>
    <form class="cta-form" onsubmit="handleFormSubmit(event, 'modal-callback')">
      <div class="cta-form-row">
        <div class="cta-form-group">
          <label>Naam</label>
          <input type="text" placeholder="Uw naam" required>
        </div>
        <div class="cta-form-group">
          <label>Telefoonnummer</label>
          <input type="tel" placeholder="+31 6 ..." required>
        </div>
      </div>
      <div class="cta-form-group">
        <label>E-mailadres</label>
        <input type="email" placeholder="uw@email.nl" required>
      </div>
      <div class="cta-form-group">
        <label>Beste tijd om te bellen</label>
        <select>
          <option value="">Geen voorkeur</option>
          <option value="ochtend">Ochtend (9:00 – 12:00)</option>
          <option value="middag">Middag (12:00 – 17:00)</option>
          <option value="avond">Avond (17:00 – 19:00)</option>
        </select>
      </div>
      <button type="submit" class="cta-form-submit">Bel mij terug →</button>
    </form>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <p>&copy; <?php echo date('Y'); ?> <strong>Perceiver</strong> — De nieuwe standaard in plaagdierbestrijding</p>
</footer>

<?php get_footer(); ?>
