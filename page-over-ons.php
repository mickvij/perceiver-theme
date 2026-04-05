<?php
/**
 * Template Name: Over ons
 * Template Post Type: page
 *
 * Perceiver — Over ons pagina
 * Strategisch ontworpen op basis van brand positioning, business plan en founding insight.
 */
get_header(); ?>

<!-- NAV -->
<nav id="navbar">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo" aria-label="Perceiver home">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Perceiver logo" width="1833" height="311">
	</a>
	<div class="nav-links">
		<a href="<?php echo esc_url(home_url('/')); ?>#systeem">Onze oplossing</a>
		<a href="<?php echo esc_url(home_url('/')); ?>#voor-wie">Voor wie</a>
		<a href="<?php echo esc_url(home_url('/')); ?>#faq">FAQ</a>
		<a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="nav-active">Over ons</a>
		<a href="<?php echo esc_url(home_url('/')); ?>#contact" class="nav-mobile-cta nav-mobile-only">Praat met expert</a>
		<a href="/login" class="nav-mobile-login nav-mobile-only">Login</a>
	</div>
	<div class="nav-actions">
		<a href="<?php echo esc_url(home_url('/')); ?>#contact" class="nav-btn">Praat met expert</a>
		<a href="/login" class="nav-btn-login">Login</a>
	</div>
	<button class="nav-hamburger" id="navHamburger" aria-label="Menu openen" aria-expanded="false">
		<span></span>
		<span></span>
		<span></span>
	</button>
</nav>

<!-- ── HERO: Founding insight ── -->
<section class="ons-hero">
	<canvas id="onsHeroMesh" class="ons-hero-mesh"></canvas>
	<div class="ons-hero-inner reveal">
		<div class="ons-hero-label">Over ons</div>
		<h1 class="ons-hero-h1">De rekensom<br>klopt niet.</h1>
		<p class="ons-hero-sub">Elke maand een bezoek. Elke maand hetzelfde rapport. Elke maand hetzelfde probleem. Op een gegeven moment stopt u met geloven dat er iets verandert. Wij ook — en daarom hebben we Perceiver gebouwd.</p>
	</div>
</section>

<!-- ── AANLEIDING: Waarom Perceiver bestaat ── -->
<section class="ons-aanleiding">
	<div class="ons-aanleiding-inner">
		<div class="ons-aanleiding-grid">
			<div class="ons-aanleiding-left reveal">
				<div class="ons-label">Waarom Perceiver bestaat</div>
				<h2 class="ons-h2">Niet omdat de markt<br>erop wachtte.<br>Maar omdat het te lang<br>onopgelost bleef.</h2>
			</div>
			<div class="ons-aanleiding-right reveal">
				<p>De voedselindustrie geeft jaarlijks miljoenen uit aan plaagdierbestrijding. Toch stijgt het aantal sluitingen door de NVWA jaar op jaar. Het rapport zegt 'gecontroleerd'. Het probleem is er nog.</p>
				<p>Die kloof — tussen wat er op papier staat en wat er werkelijk in uw locatie speelt — is de reden dat Perceiver bestaat. Niet als betere versie van wat er al was. Als iets fundamenteel anders.</p>
				<p>De vraag was nooit: hoe organiseren we meer bezoeken? De vraag was: waarom weten we zo weinig tussen die bezoeken in?</p>
				<blockquote class="ons-quote">
					"Het rapport laat zien dat er gecontroleerd is.<br>Niet dat het probleem onder controle is."
				</blockquote>
				<p class="ons-quote-context">Dat verschil is beslissend — bij een audit, bij een incident, bij elke dag dat u verantwoordelijk bent voor uw locatie.</p>
			</div>
		</div>
	</div>
</section>

<!-- ── OVERTUIGING: Drie principes ── -->
<section class="ons-overtuiging">
	<div class="ons-overtuiging-inner">
		<div class="ons-overtuiging-header reveal">
			<div class="ons-label ons-label-light">Onze overtuiging</div>
			<h2 class="ons-h2 ons-h2-light">Plaagdierbeheersing<br>zonder bewijs<br>is geen beheersing.</h2>
		</div>
		<div class="ons-overtuiging-items">
			<div class="ons-ov-item reveal">
				<div class="ons-ov-num">01</div>
				<div class="ons-ov-content">
					<h3 class="ons-ov-title">Zicht</h3>
					<p class="ons-ov-desc">Wat u niet continu kunt zien, kunt u niet beheersen. Tussen twee controles weet u niet wat er loopt, waar, hoeveel of wanneer. Perceiver maakt activiteit voortdurend zichtbaar — zonder dat er iemand langs hoeft te komen.</p>
				</div>
			</div>
			<div class="ons-ov-item reveal">
				<div class="ons-ov-num">02</div>
				<div class="ons-ov-content">
					<h3 class="ons-ov-title">Actie</h3>
					<p class="ons-ov-desc">Detectie zonder respons is monitoring. Geen meerwaarde. Perceiver stuurt de bestrijding aan op basis van wat het systeem ziet — gericht, op het juiste moment, op de juiste plek. Niet op basis van een schema, maar op basis van feiten.</p>
				</div>
			</div>
			<div class="ons-ov-item reveal">
				<div class="ons-ov-num">03</div>
				<div class="ons-ov-content">
					<h3 class="ons-ov-title">Bewijs</h3>
					<p class="ons-ov-desc">Een rapport dat alleen zegt dat er gecontroleerd is, beschermt u niet als er iets misgaat. Perceiver legt automatisch vast wat er is waargenomen, wat er is gedaan en wat dat aantoonbaar heeft opgeleverd. Altijd beschikbaar, altijd audit-ready.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ── AANPAK: Technologie + uitvoering ── -->
<section class="ons-aanpak">
	<div class="ons-aanpak-inner">
		<div class="ons-aanpak-grid">
			<div class="ons-aanpak-left reveal">
				<div class="ons-label">Hoe we werken</div>
				<h2 class="ons-h2">Gepatenteerde<br>technologie.<br>Gecertificeerde<br>uitvoering.</h2>
				<p>Perceiver is geen software-platform met een bestrijder op afstand. Het systeem combineert AI-camera's, slimme valtechnologie en gecertificeerde plaagdierbestrijders in één geïntegreerd geheel — waarbij het overgrote deel van het bestrijdingsproces automatisch verloopt.</p>
				<p>Onze technologie is gepatenteerd. Onze bestrijders zijn gecertificeerd. Het bewijs zit in het systeem — niet in een belofte.</p>
			</div>
			<div class="ons-aanpak-right reveal">
				<div class="ons-aanpak-pillar">
					<div class="ons-pillar-icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
					</div>
					<div>
						<div class="ons-pillar-title">Continue detectie</div>
						<div class="ons-pillar-desc">AI-camera's registreren activiteit 24/7 en classificeren automatisch: soort, locatie, gedrag. Geen aannames. Geen momentopnames.</div>
					</div>
				</div>
				<div class="ons-aanpak-pillar">
					<div class="ons-pillar-icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
					</div>
					<div>
						<div class="ons-pillar-title">Slimme valtechnologie</div>
						<div class="ons-pillar-desc">Vallen worden aangestuurd op basis van gedetecteerde activiteit. Ze leren, ze optimaliseren, ze onthouden. Geen gif waar het niet hoeft.</div>
					</div>
				</div>
				<div class="ons-aanpak-pillar">
					<div class="ons-pillar-icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
					</div>
					<div>
						<div class="ons-pillar-title">Automatische rapportage</div>
						<div class="ons-pillar-desc">Elk incident, elke actie, elk resultaat wordt vastgelegd zonder menselijke tussenkomst. Altijd inzichtelijk, voor u en voor uw auditor.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ── TEAM ── -->
<section class="ons-team">
	<div class="ons-team-inner">
		<div class="ons-team-header reveal">
			<div class="ons-label">Het team</div>
			<h2 class="ons-h2">Mensen die de<br>industrie kennen.</h2>
		</div>
		<div class="ons-team-grid">
			<div class="ons-team-card reveal">
				<div class="ons-team-avatar-wrap">
					<div class="ons-avatar-initials">MV</div>
				</div>
				<div class="ons-team-body">
					<div class="ons-team-name">Mick Vijverberg</div>
					<div class="ons-team-role">Oprichter &amp; CEO</div>
					<p class="ons-team-bio">Vul hier een korte, specifieke introductie in. Vermijd generieke omschrijvingen — één zin over achtergrond, één zin over waarom hij Perceiver heeft gebouwd, één zin die vertrouwen geeft.</p>
				</div>
			</div>
			<div class="ons-team-card reveal">
				<div class="ons-team-avatar-wrap">
					<div class="ons-avatar-initials">??</div>
				</div>
				<div class="ons-team-body">
					<div class="ons-team-name">Naam teamlid</div>
					<div class="ons-team-role">Rol</div>
					<p class="ons-team-bio">Vul hier een korte, specifieke introductie in. Expertise, achtergrond en waarom deze persoon onmisbaar is voor wat Perceiver doet.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ── AMBITIE: Pullquote sectie ── -->
<section class="ons-ambitie">
	<canvas id="onsAmbMesh" class="ons-amb-mesh"></canvas>
	<div class="ons-ambitie-inner reveal">
		<div class="ons-label ons-label-light">Onze ambitie</div>
		<blockquote class="ons-ambitie-quote">
			"Elke locatie in de Nederlandse voedselketen<br>die met zekerheid kan zeggen:<br><em>ik heb het aantoonbaar onder controle.</em>"
		</blockquote>
		<p class="ons-ambitie-toelichting">Dat is geen groeistrategie. Het is een concreet probleem dat oplosbaar is. Perceiver is precies daarvoor gebouwd — niet als tijdelijke maatregel, maar als nieuwe standaard.</p>
	</div>
</section>

<!-- ── CTA ── -->
<section class="ons-cta">
	<div class="ons-cta-inner reveal">
		<h2 class="ons-cta-h2">Klaar om te zien hoe<br>het bij uw locatie werkt?</h2>
		<p class="ons-cta-sub">Elke situatie is anders. Wij laten u zien wat Perceiver voor uw specifieke locatie betekent — vrijblijvend.</p>
		<a href="<?php echo esc_url(home_url('/')); ?>#contact" class="ons-cta-btn">Plan een gesprek</a>
	</div>
</section>

<!-- ── FOOTER ── -->
<footer>
	<div class="footer-inner">
		<div class="footer-brand">
			<strong>Perceiver</strong>
			<span>De nieuwe standaard in plaagdierbeheersing.</span>
		</div>
		<div class="footer-contact">
			<a href="tel:+31621667013">+31 6 21667013</a>
			<span class="footer-sep">·</span>
			<a href="mailto:info@perceiver.nl">info@perceiver.nl</a>
		</div>
		<div class="footer-copy">&copy; <?php echo date('Y'); ?> Perceiver</div>
	</div>
</footer>

<?php get_footer(); ?>
