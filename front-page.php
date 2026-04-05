<?php get_header(); ?>

<!-- NAV -->
<nav id="navbar">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo" aria-label="Perceiver home">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Perceiver logo" width="1833" height="311">
	</a>
	<div class="nav-links">
		<a href="#systeem">Onze oplossing</a>
		<a href="#voor-wie">Voor wie</a>
		<a href="#faq">FAQ</a>
		<a href="#contact" class="nav-mobile-cta nav-mobile-only">Praat met expert</a>
		<a href="/login" class="nav-mobile-login nav-mobile-only">Login</a>
	</div>
	<div class="nav-actions">
		<a href="#contact" class="nav-btn">Praat met expert</a>
		<a href="/login" class="nav-btn-login">Login</a>
	</div>
	<button class="nav-hamburger" id="navHamburger" aria-label="Menu openen" aria-expanded="false">
		<span></span>
		<span></span>
		<span></span>
	</button>
</nav>

<!-- HERO -->
<section class="hero">
	<canvas id="heroMesh" class="hero-mesh"></canvas>
	<div class="hero-noise"></div>
	<div class="hero-content">
		<div class="hero-text">
			<h1><em>Aannames</em> <br>horen niet thuis in <br>voedselveiligheid.</h1>
			<p class="hero-sub">Continu zicht op plaagdieractiviteit met AI-detectie, directe meldingen en meetbaar resultaat.</p>
			<div class="hero-actions">
				<a href="#contact" class="btn-primary">Praat met een expert</a>
				<a href="#systeem" class="btn-ghost">Bekijk hoe het werkt →</a>
			</div>
		</div>

		<div class="hero-visual">
			<div class="float-badge badge-1">
				<div class="badge-icon" style="background:rgba(13,148,136,0.12)">🎯</div>
				<div>
					<div style="font-size:11px;color:#6b7280;">Nieuw vangst</div>
					<div style="font-size:13px;">Locatie B · Zone 3</div>
				</div>
			</div>

			<div class="hero-slideshow" id="heroSlideshow">
				<!-- SLIDE 1: AI Detection -->
				<div class="hero-slide active" data-slide="0">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-detection.png" alt="AI beeldherkenning detecteert muis met 99% zekerheid" loading="lazy" width="1536" height="1024">
					<div class="slide-caption">
						<div class="slide-caption-dot"></div>
						<div class="slide-caption-text">AI Beeldherkenning</div>
					</div>
					<div class="slide-step">01 <span>/ 04</span></div>
				</div>

				<!-- SLIDE 2: Phone Alert -->
				<div class="hero-slide" data-slide="1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-alert.png" alt="Directe melding op telefoon bij detectie" loading="lazy" width="1536" height="1024">
					<div class="slide-caption">
						<div class="slide-caption-dot"></div>
						<div class="slide-caption-text">Direct Alert</div>
					</div>
					<div class="slide-step">02 <span>/ 04</span></div>
				</div>

				<!-- SLIDE 3: Service Van -->
				<div class="hero-slide" data-slide="2">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-service.png" alt="Perceiver bestrijder komt aan bij locatie" loading="lazy" width="1536" height="1024">
					<div class="slide-caption">
						<div class="slide-caption-dot"></div>
						<div class="slide-caption-text">Snelle Respons</div>
					</div>
					<div class="slide-step">03 <span>/ 04</span></div>
				</div>

				<!-- SLIDE 4: Dashboard -->
				<div class="hero-slide" data-slide="3">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slide-dashboard.png" alt="Volledig data dashboard met realtime inzichten" loading="lazy" width="1536" height="1024">
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
				<div class="badge-icon" style="background:rgba(13,148,136,0.12)">🐭</div>
				<div>
					<div style="font-size:11px;color:#6b7280;">Nieuwe detectie</div>
					<div style="font-size:13px;">Huismuis · 99.8%</div>
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
			<p class="frustration-body">De meeste bedrijven in de voedselketen lopen tegen dezelfde knelpunten aan. Herkenbaar?</p>
		</div>
		<div class="frustration-blocks">

			<div class="frust-block frust-block--red reveal reveal-delay-1">
				<div class="frust-block-num">01</div>
				<div class="frust-block-body">
					<div class="frust-block-label">Monitoren</div>
					<h3 class="frust-block-title">Tussen controles bent u blind</h3>
					<p class="frust-block-desc">Uw bestrijder komt eens per vier tot zes weken. Daartussen weet u niet wat er loopt, waar, hoeveel of wanneer. En ook tijdens een controle ziet u slechts een momentopname — niet het patroon. Het werkelijke beeld kent u niet.</p>
				</div>
			</div>

			<div class="frust-block frust-block--amber reveal reveal-delay-2">
				<div class="frust-block-num">02</div>
				<div class="frust-block-body">
					<div class="frust-block-label">Bestrijden</div>
					<h3 class="frust-block-title">De huidige bestrijding loopt vast</h3>
					<p class="frust-block-desc">Vallen verliezen snel hun effectiviteit, omdat knaagdieren ze leren omzeilen. Dan blijft gif over. Waar voedsel in de buurt is, wilt u dat niet en kunt u het vaak ook niet gebruiken. Zo loopt bestrijding vast.</p>
				</div>
			</div>

			<div class="frust-block frust-block--slate reveal reveal-delay-3">
				<div class="frust-block-num">03</div>
				<div class="frust-block-body">
					<div class="frust-block-label">Rapporteren</div>
					<h3 class="frust-block-title">U kunt het niet aantonen</h3>
					<p class="frust-block-desc">Uw rapport laat zien dat er gecontroleerd is. Niet dat het probleem onder controle is. Er zijn geen beelden, geen activiteitsdata en geen bewijs dat uw aanpak werkt. Bij een audit of incident staat u nog steeds met te weinig in handen.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- HET SYSTEEM: Perceiver als geïntegreerd geheel     -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="systeem" class="system-section" style="scroll-margin-top:80px;">
	<!-- Animated mesh background -->
	<canvas id="systemMesh" class="system-mesh"></canvas>
	<!-- Curved top edge (reversed hero curve) -->
	<div class="system-curve-top">
		<svg viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0v60c240 40 480 60 720 60s480-20 720-60V0H0z" fill="#f8fafc"/>
		</svg>
	</div>
	<div class="system-inner" style="max-width:1200px;margin:0 auto;padding:0 40px;position:relative;z-index:2;">

		<!-- Intro -->
		<div style="text-align:center;max-width:960px;margin:0 auto 72px;" class="reveal">
			<div class="section-label" style="color:rgba(255,255,255,0.65);background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);">Perceiver</div>
			<h2 class="section-h2 system-h2" style="color:white;"><span class="nowrap-phrase">Altijd <span class="sys-accent">zicht.</span> Gerichte <span class="sys-accent">actie.</span></span><br>Meetbaar <span class="sys-accent">resultaat.</span></h2>
			<p style="font-size:17px;line-height:1.8;color:rgba(255,255,255,0.6);max-width:780px;margin:0 auto;">Perceiver maakt activiteit continu zichtbaar. Die informatie bepaalt waar en wanneer wordt ingegrepen. Het systeem volgt de uitkomst, stuurt bij waar nodig en legt elke stap vast.</p>
		</div>

		<!-- Editorial strip -->
		<div class="sys-strip reveal">
			<div class="sys-strip-row">
				<div class="sys-strip-left">
					<span class="sys-strip-num">01</span>
					<h3 class="sys-strip-word">Zicht</h3>
				</div>
				<p class="sys-strip-desc">Altijd inzicht in de activiteit van ratten en muizen in en om de locatie.</p>
			</div>
			<div class="sys-strip-row">
				<div class="sys-strip-left">
					<span class="sys-strip-num">02</span>
					<h3 class="sys-strip-word">Actie</h3>
				</div>
				<p class="sys-strip-desc">Op basis van die informatie wordt gericht ingegrepen, op de juiste plek en op het juiste moment.</p>
			</div>
			<div class="sys-strip-row">
				<div class="sys-strip-left">
					<span class="sys-strip-num">03</span>
					<h3 class="sys-strip-word">Resultaat</h3>
				</div>
				<p class="sys-strip-desc">Automatisch wordt vastgelegd wat is waargenomen, wat is gedaan en wat dat aantoonbaar heeft opgeleverd.</p>
			</div>
			<div class="sys-strip-payoff">Zo heeft u <span class="sys-strip-accent">grip</span> op de situatie.</div>
		</div>
	</div>
	<!-- Curved bottom edge -->
	<div class="system-curve-bottom">
		<svg viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 120V60c240-40 480-60 720-60s480 20 720 60v60H0z" fill="#f8fafc"/>
		</svg>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- PERSONA'S: rolgebaseerde waardepropositie          -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="voor-wie" class="personas-section" style="scroll-margin-top:80px;">
	<div style="max-width:1200px;margin:0 auto;padding:0 40px;">
		<div style="text-align:center;margin-bottom:56px;" class="reveal">
			<h2 class="section-h2">Wat betekent dit voor u?</h2>
		</div>
		<div class="persona-grid">
			<div class="persona-card persona-1 reveal reveal-delay-1">
				<div class="persona-avatar-circle">
					<img class="persona-avatar-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/persona-horeca.png" alt="De horecaondernemer" loading="lazy" width="1024" height="1024" />
				</div>
				<div class="persona-role">De horecaondernemer</div>
				<p class="persona-text">&ldquo;Eindelijk weet ik wat er in mijn zaak gebeurt, wordt er gericht ingegrepen en kan ik me richten op mijn gasten.&rdquo;</p>
			</div>

			<div class="persona-card persona-2 reveal reveal-delay-2">
				<div class="persona-avatar-circle">
					<img class="persona-avatar-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/persona-kwaliteit.png" alt="De kwaliteitsmanager" loading="lazy" width="1024" height="1024" />
				</div>
				<div class="persona-role">De kwaliteitsmanager</div>
				<p class="persona-text">&ldquo;Met Perceiver ga ik van aannames naar zekerheid: ik weet wat er gebeurt, houd grip op de situatie en bescherm kwaliteit en merknaam beter tegen risico&rsquo;s.&rdquo;</p>
			</div>

			<div class="persona-card persona-3 reveal reveal-delay-3">
				<div class="persona-avatar-circle">
					<img class="persona-avatar-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/persona-productie.png" alt="De productiemanager" loading="lazy" width="1024" height="1024" />
				</div>
				<div class="persona-role">De productiemanager</div>
				<p class="persona-text">&ldquo;De eerste activiteit is direct zichtbaar, blijft de productieomgeving beter beschermd en worden processen zo min mogelijk verstoord.&rdquo;</p>
			</div>
		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- FAQ: Bezwaren wegnemen vóór conversie               -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="faq" class="faq-section" style="scroll-margin-top:80px;">
	<div class="faq-inner">

		<!-- Links: sticky headline -->
		<div class="faq-sticky-col">
			<div class="faq-sticky">
				<h2 class="faq-h2">Vragen?<br><span class="faq-h2-accent">Antwoorden.</span></h2>
			</div>
		</div>

		<!-- Rechts: accordion -->
		<div class="faq-accordion-col">

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Vervangt Perceiver mijn huidige bestrijder?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Ja, voor muizen en ratten nemen wij de bestrijding volledig over. Werkt u met een bestrijder voor andere plaagdieren, zoals insecten? Dan kan die dienstverlening gewoon naast Perceiver doorlopen.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Is Perceiver ook geschikt voor particulieren?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Nee. Op dit moment richt Perceiver zich uitsluitend op zakelijke klanten.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Welke dieren detecteert het systeem?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Huismuizen, bruine ratten en zwarte ratten.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Wat gebeurt er als er een muis of rat wordt gedetecteerd?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>U ontvangt direct een melding. Onze bestrijding wordt onmiddellijk ingezet om een plaag te voorkomen.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Hoe snel krijg ik een melding?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Direct. Zodra het systeem een knaagdier waarneemt, wordt er automatisch een melding verstuurd.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Monitort het systeem 24/7?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Ja, altijd.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Hoe zit het met gif?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Perceiver werkt uitsluitend zonder gif. Onze aanpak is volledig gebaseerd op AI-detectie en intelligente valtechnologie.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Is Perceiver geschikt voor biologische voedselbedrijven?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Ja, bij uitstek. Omdat Perceiver volledig gifvrij werkt, is ons systeem uitstekend geschikt voor de biologische voedselketen.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Wat zijn de kosten ten opzichte van mijn huidige contract?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>De totale kosten liggen op het niveau van een regulier bestrijdingscontract — maar dan met continue monitoring en aantoonbaar resultaat. In een eerste gesprek maken wij een inschatting voor uw situatie.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Waar worden de camerabeelden opgeslagen?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Alle beelden worden lokaal bij u op locatie opgeslagen en verlaten het pand niet. Alleen met uw toestemming worden beelden zonder privacygevoelige informatie gebruikt om ons AI-model te verbeteren.</p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-question" aria-expanded="false">
					<span>Hoe gaat Perceiver om met privacygevoelige beelden?</span>
					<svg class="faq-chevron" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
				</button>
				<div class="faq-answer">
					<p>Beelden waarop personen zichtbaar zijn, worden na verwerking verwijderd.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ═══════════════════════════════════════════════════ -->
<!-- CONTACT: Strategische intake-sectie                -->
<!-- ═══════════════════════════════════════════════════ -->
<section id="contact" class="contact-section" style="scroll-margin-top:80px;">
	<!-- Curved top edge -->
	<div class="contact-curve-top">
		<svg viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0v60c240 40 480 60 720 60s480-20 720-60V0H0z" fill="#f8fafc"/>
		</svg>
	</div>

	<canvas id="contactMesh" class="contact-mesh"></canvas>

	<div class="contact-inner">

		<!-- LAAG 1: Context + processtappen -->
		<div class="contact-header reveal">
			<div class="section-label" style="color:rgba(255,255,255,0.75);background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.14);">Volgende stap</div>
			<h2 class="contact-h2">Elke situatie is anders.<br>Laten we beginnen met die van <span class="contact-accent">jou</span>.</h2>

		</div>

		<!-- Formulierkaart — gecentreerd -->
		<div class="contact-form-wrap reveal">
			<div class="contact-form-card">
				<h3 class="contact-form-title">Kom in contact</h3>
				<p class="contact-form-sub">Laat je gegevens achter en wij bellen je terug.</p>
				<form class="cta-form" id="contact-form" onsubmit="handleFormSubmit(event, 'contact-form')">
					<div class="cta-form-row">
						<div class="cta-form-group">
							<label for="cf-naam">Naam <span class="cta-form-required">*</span></label>
							<input id="cf-naam" type="text" placeholder="Je naam" required>
						</div>
						<div class="cta-form-group">
							<label for="cf-tel">Telefoonnummer <span class="cta-form-required">*</span></label>
							<input id="cf-tel" type="tel" placeholder="+31 6 ..." required>
						</div>
					</div>
					<div class="cta-form-row">
						<div class="cta-form-group">
							<label for="cf-email">E-mailadres</label>
							<input id="cf-email" type="email" placeholder="je@bedrijf.nl">
							<span class="cta-form-hint">Optioneel</span>
						</div>
						<div class="cta-form-group">
							<label for="cf-locatie">Type locatie</label>
							<select id="cf-locatie">
								<option value="">Selecteer...</option>
								<option value="restaurant">Restaurant</option>
								<option value="hotel">Hotel</option>
								<option value="catering">Catering</option>
								<option value="productie">Productielocatie</option>
								<option value="retail">Retail</option>
								<option value="anders">Anders</option>
							</select>
							<span class="cta-form-hint">Optioneel</span>
						</div>
					</div>
					<button type="submit" class="contact-submit-btn">
						Bel mij terug
						<svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.338c0 9.13 7.406 16.537 16.537 16.537h2.046a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v1.838z"/></svg>
					</button>
				</form>
				<div class="contact-form-alt">
					Of kom direct in contact: <a href="tel:+31621667013">+31 6 21667013</a> · <a href="mailto:info@perceiver.nl">info@perceiver.nl</a>
				</div>
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
          <input type="email" placeholder="uw@bedrijf.nl" required>
        </div>
      </div>
      <div class="cta-form-group">
        <label>Uw vraag</label>
        <textarea rows="4" placeholder="Waar kunnen wij u mee helpen?" required></textarea>
      </div>
      <button type="submit" class="cta-form-submit">Verstuur vraag →</button>
    </form>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <strong>Perceiver</strong>
    </div>
    <div class="footer-contact">
      <span class="footer-contact-label">Contact</span>
      <a href="tel:+31621667013">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +31 6 21667013
      </a>
      <span class="footer-sep">·</span>
      <a href="mailto:info@perceiver.nl">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        info@perceiver.nl
      </a>
    </div>
    <div class="footer-copy">&copy; <?php echo date('Y'); ?> Perceiver</div>
  </div>
</footer>

<?php get_footer(); ?>
