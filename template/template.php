<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&family=Rubik:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php site_url(); ?>/dist/css/styles.css">
	<title><?php page_title(); ?> | <?php site_name(); ?></title>
</head>

<body>

	<div class="r-menu-overlay">
		<div class="r-menu-overlay__top">
			<div class="r-menu-overlay__close js-close-menu">
				<span class="c-close-btn">&nbsp;</span>
			</div>
		</div>

		<div class="c-overlay-branding">
			<div class="c-overlay-branding__title"><?php site_name(); ?></div>

			<div class="c-overlay-branding__logo">
				<a class="c-overlay-branding__link" href="index.php">
					<img src="../dist/images/logo_accent-clr.png" alt="">
				</a>
			</div>

		</div>


		<div class="r-menu-overlay__list">
			<div class="">
				<ul class="r-menu-overlay__items">
					<li class="r-menu-overlay__item">
						<a class="r-menu-overlay__link" href="index.php">Home</a></li>
					<li class="r-menu-overlay__item">
						<a class="r-menu-overlay__link" href="#">Bedrijven</a></li>
					<li class="r-menu-overlay__item">
						<a class="r-menu-overlay__link" href="#">Tuinwerken</a></li>
					<li class="r-menu-overlay__item">
						<a class="r-menu-overlay__link" href="#">Boomverzorging</a>
						<ul class="r-menu-overlay__items">
							<li>
								<a class="r-menu-overlay__link" href="#">Aanplanten van bomen of leibomen</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="r-contact-overlay">
		<div class="r-contact-overlay__inner">

			<div class="r-contact-overlay__top">
				<div class="r-contact-overlay__close js-close-contact">
					<div class="c-close-btn"></div>
				</div>
			</div>

			<div class="c-overlay-branding">
				<div class="c-overlay-branding__title">Arbor service</div>
				<div class="c-overlay-branding__logo">
					<a class="c-overlay-branding__link" href="index.php">
						<img src="../dist/images/logo_accent-two-clr.png" alt="">
					</a>
				</div>
			</div>

			<div class="r-contact-overlay__body">
				<p>Arbor service bvba<br>Nijverheidsstraat 36<br>
					3583 Paal-Beringen</p>
				<a class="c-phone c-phone--bgc" href="tel:+32491550999">+32491550999</a>
			</div>

			<div class="r-contact-overlay__social">
				<a href="https://www.facebook.com/arborservice">
					<img class="r-contact-overlay__icon" src="../dist/images/facebook-icon.jpg" alt="">
				</a>
			</div>

			<div class="fb-page" data-href="https://www.facebook.com/arborservice" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/arborservice">
						<a href="https://www.facebook.com/arborservice">Arbor - service</a>
					</blockquote>
				</div>
			</div>

		</div>
	</div>

	<div class="r-grid-container">

		<header class="r-header">
			<div class="r-header__top">
				<div class="container r-header__top-inner">
					<div class="r-header__menu">
						<div class="c-hamburger-btn">
							<span class="c-hamburger-btn--open">&nbsp;</span>
							<span class="c-hamburger-btn__label"> Menu</span>
						</div>
					</div>
					<div class="r-header__contact">
						<div class="c-contact-btn js-open-contact">
							<img src="../dist/images/contact-btn.png" alt="" />
						</div>
					</div>
				</div>
			</div>

			<div class="r-header__branding">

				<div class="r-branding__title">
					<div class="container">
						<h1 class="heading-one"><?php site_name(); ?></h1>
						<!-- slogan -->
						<div class="r-branding__slogan">
							<span><?php site_slogan(); ?></span>
						</div>
					</div>

				</div>

			</div>
		</header>

		<div class="r-main">

			<div class="r-content">
				<div class="container">
					<?php page_content(); ?>
				</div>
			</div>

			<footer class="r-footer">
				<div class="container r-footer__inner">
					<div class="r-footer__contact">
						<p>Joey Liberloo <br>Nijverheidsstraat 36<br>3583 Paal-Beringen</p>
						<a class="c-btn c-btn--accent" href="tel:+32491550999">+32491550999</a>
					</div>
			</footer>
		</div>



		<div class="r-footer__copy">
			© <?php echo date('Y'); ?> | <?php site_name(); ?>
		</div>

	</div>

	</div>

	<div class="cookie__alert" role="alert">
		<p>We gebruiken cookies om ervoor te zorgen dat u de beste ervaring op onze website krijgt. </p>

		<div class="cookie__flex">
			<a href="#">Lees meer</a>

			<button type="button" class="c-btn c-btn--accent-two cookie__accept">
				Akkoord
			</button>
		</div>
	</div>

</body>

<script src="../dist/js/all.js"></script>

</html>