<?php get_header(); ?>

<!-- NAV -->
<nav id="navbar">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo" aria-label="Perceiver home">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Perceiver logo">
	</a>
	<div class="nav-links">
		<a href="#monitoren">Monitoren</a>
		<a href="#bestrijding">Bestrijding</a>
		<a href="#rapportage">Rapportage</a>
		<a href="#werkwijze">Werkwijze</a>
	</div>
	<a href="#contact" class="nav-cta">Praat met expert</a>
</nav>

<!-- HERO -->
<section class="hero">
	<div class="hero-noise"></div>
	<div class="hero-content">
		<div class="hero-text">
			<div class="hero-badge">AI-aangedreven plaagdierbestrijding</div>
			<h1><em>Aannames</em><br>horen niet thuis in<br>voedselveiligheid.</h1>
			<p class="hero-sub">Ziet wat er loopt. Stuurt de bestrijding aan. Legt resultaat vast.</p>
			<div class="hero-actions">
				<a href="#contact" class="btn-primary">Plan een gratis demo</a>
				<a href="#werkwijze" class="btn-ghost">Bekijk hoe het werkt →</a>
			</div>
			<div class="hero-proof">
				<span>Visuele detectie</span>
				<span class="proof-sep">·</span>
				<span>Gerichte vangst</span>
				<span class="proof-sep">·</span>
				<span>Aantoonbaar resultaat</span>
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

	<!-- Decorative light streaks -->
	<div class="hero-streak hero-streak--1"></div>
	<div class="hero-streak hero-streak--2"></div>
	<div class="hero-streak hero-streak--3"></div>

	<!-- Curved bottom edge -->
	<div class="hero-curve">
		<svg viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 120V60C240 20 480 0 720 0s480 20 720 60v60H0z" fill="#f8fafc"/>
		</svg>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- SECTIE 1B: VARIANT MET DRIE KAARTEN (ter vergelijking) -->
<!-- ═══════════════════════════════════════════════════ -->
<section class="frustration-section">
	<div class="frustration-inner">
		<div class="frustration-text reveal">
			<h2 class="section-h2">U draagt de verantwoordelijkheid.<br><span class="frustration-accent">Grip ontbreekt.</span></h2>
			<!-- Introductietekst: wordt later toegevoegd -->
		</div>
		<div class="frustration-cards reveal reveal-delay-2">
			<div class="frust-card">
				<div class="frust-card-accent frust-card-accent--red"></div>
				<div class="frust-card-content">
					<div class="frust-card-label">Monitoren</div>
					<h3 class="frust-card-title">Tussen controles bent u blind</h3>
					<p class="frust-card-desc">Uw bestrijder komt eens per vier tot zes weken. Daartussen weet u niet wat er loopt, waar, hoeveel of wanneer. En ook tijdens een controle ziet u slechts een momentopname — niet het patroon. Het werkelijke beeld kent u niet.</p>
				</div>
			</div>
			<div class="frust-card">
				<div class="frust-card-accent frust-card-accent--amber"></div>
				<div class="frust-card-content">
					<div class="frust-card-label">Bestrijden</div>
					<h3 class="frust-card-title">De huidige bestrijding loopt vast</h3>
					<p class="frust-card-desc">Vallen verliezen snel hun effectiviteit, omdat knaagdieren ze leren omzeilen. Dan blijft gif over. Waar voedsel in de buurt is, wilt u dat niet en kunt u het vaak ook niet gebruiken. Zo loopt bestrijding vast.</p>
				</div>
			</div>
			<div class="frust-card">
				<div class="frust-card-accent frust-card-accent--slate"></div>
				<div class="frust-card-content">
					<div class="frust-card-label">Rapporteren</div>
					<h3 class="frust-card-title">U kunt het niet aantonen</h3>
					<p class="frust-card-desc">Uw rapport laat zien dat er gecontroleerd is. Niet dat het probleem onder controle is. Er zijn geen beelden, geen activiteitsdata en geen bewijs dat uw aanpak werkt. Bij een audit of incident staat u nog steeds met te weinig in handen.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- HET SYSTEEM: Perceiver als geïntegreerd geheel     -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="systeem" class="system-section" style="scroll-margin-top:80px;">
	<div class="system-inner" style="max-width:1200px;margin:0 auto;padding:0 40px;">

		<!-- Intro -->
		<div style="text-align:center;max-width:800px;margin:0 auto 72px;" class="reveal">
			<div class="section-label" style="color:rgba(255,255,255,0.65);background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);">Perceiver</div>
			<h2 class="section-h2" style="color:white;">Altijd zicht. Gerichte actie.<br>Meetbaar resultaat.</h2>
			<p style="font-size:17px;line-height:1.8;color:rgba(255,255,255,0.6);max-width:640px;margin:0 auto;">Perceiver maakt activiteit continu zichtbaar. Die informatie bepaalt waar en wanneer wordt ingegrepen. Het systeem volgt de uitkomst, stuurt bij waar nodig en legt elke stap vast.</p>
		</div>

		<!-- Drie stappen als kaarten -->
		<div class="sys-cards">
			<div class="sys-card reveal reveal-delay-1">
				<div class="sys-card-icon" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">
					<svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
				</div>
				<div class="sys-card-num">01</div>
				<h3 class="sys-card-title">Zicht</h3>
				<p class="sys-card-desc">Camera's met AI-beeldherkenning maken zichtbaar wat er loopt, waar activiteit is en hoe die zich ontwikkelt.</p>
			</div>
			<div class="sys-card reveal reveal-delay-2">
				<div class="sys-card-icon" style="background:linear-gradient(135deg,#6366f1,#818cf8);">
					<svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
				</div>
				<div class="sys-card-num">02</div>
				<h3 class="sys-card-title">Actie</h3>
				<p class="sys-card-desc">Die informatie stuurt waar bestrijding wordt ingezet en wanneer wordt bijgestuurd. Zo sluit de inzet aan op wat er daadwerkelijk gebeurt.</p>
			</div>
			<div class="sys-card reveal reveal-delay-3">
				<div class="sys-card-icon" style="background:linear-gradient(135deg,#10b981,#34d399);">
					<svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
				</div>
				<div class="sys-card-num">03</div>
				<h3 class="sys-card-title">Resultaat</h3>
				<p class="sys-card-desc">De rapportage legt vast wat is waargenomen, wat is gedaan en wat dat heeft opgeleverd. Zo wordt zichtbaar hoe de situatie zich ontwikkelt.</p>
			</div>
		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- PERSONA'S: rolgebaseerde waardepropositie          -->
<!-- ═══════════════════════════════════════════════════ -->
<section class="personas-section">
	<div style="max-width:1200px;margin:0 auto;padding:0 40px;">
		<div style="text-align:center;margin-bottom:56px;" class="reveal">
			<h2 class="section-h2">Wat betekent dit voor u?</h2>
		</div>
		<div class="persona-grid">
			<div class="persona-card reveal reveal-delay-1">
				<div class="persona-avatar" style="background:linear-gradient(135deg,#f59e0b,#d97706);">
					<svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.15c0 .415.336.75.75.75z"/></svg>
				</div>
				<div class="persona-role">De horecaondernemer</div>
				<p class="persona-text">U wilt weten of uw zaak schoon is — zonder elke nacht wakker te liggen. Met Perceiver ziet u direct of er activiteit is. Geen verrassing bij een NVWA-controle. Geen onverwachte sluiting. Gewoon grip op wat er in uw pand gebeurt, ook als u er niet bent.</p>
			</div>
			<div class="persona-card reveal reveal-delay-2">
				<div class="persona-avatar" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">
					<svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg>
				</div>
				<div class="persona-role">De kwaliteitsmanager</div>
				<p class="persona-text">U moet aantonen dat uw plaagdierbeheersing werkt — niet alleen dat er iemand langskomt. Perceiver levert doorlopende data: waar is activiteit, wat is er gedaan, wat is het resultaat. Bij een audit of certificering heeft u het bewijs direct bij de hand.</p>
			</div>
		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- CTA                                                -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="contact" style="scroll-margin-top:80px;margin:0 40px 80px;">
	<div class="cta-section">
		<div class="cta-bg-blob cta-blob-1"></div>
		<div class="cta-bg-blob cta-blob-2"></div>
		<div class="cta-bg-blob cta-blob-3"></div>
		<div class="cta-center reveal">
			<div class="section-label" style="color:rgba(255,255,255,0.75);background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.14);">Contact</div>
			<h2 class="cta-h2">Weten wat er speelt<br>in uw pand?</h2>
			<p class="cta-p">Plan een vrijblijvend gesprek. We laten u zien hoe Perceiver werkt en wat het voor uw situatie kan betekenen.</p>

			<div class="cta-trust-bar">
				<div class="cta-trust-item">
					<div class="cta-trust-dot"></div>
					<span>Reactie binnen 4 uur</span>
				</div>
				<div class="cta-trust-sep">·</div>
				<div class="cta-trust-item"><span>Geen verplichtingen</span></div>
				<div class="cta-trust-sep">·</div>
				<div class="cta-trust-item"><span>IPM-conforme werkwijze</span></div>
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
					Plan een gesprek
					<svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
				</button>
				<button class="cta-btn-b" onclick="openModal('modal-vraag')">
					Stel een vraag
				</button>
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
