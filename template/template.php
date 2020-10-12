<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&family=Rubik:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php site_url(); ?>/dist/css/styles.css">
	<link rel="icon" type="image/x-icon" href="<?php site_url(); ?>/favicon.ico" />
	<title><?php page_title(); ?> | <?php site_name(); ?></title>
</head>

<body>

	<!-- facebook id -->
	<div id="fb-root"></div>

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
			<ul class="r-menu-overlay__items">
				<?php nav_menu(); ?>
			</ul>
			<ul class="r-menu-overlay__items">
				<li class="r-menu-overlay__item r-menu-overlay__item--sub">
					Boomverzorging
				</li>
				<?php tree_menu(); ?>
			</ul>

		</div>

	</div><!-- end of r-menu-overlay -->

	<div class="r-contact-overlay">
		<div class="r-contact-overlay__inner">

			<div class="r-contact-overlay__top">
				<div class="r-contact-overlay__close js-close-contact">
					<div class="c-close-btn"></div>
				</div>
			</div>

			<div class="c-overlay-branding">
				<div class="c-overlay-branding__title"><?php site_name(); ?></div>
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

			<div class="c-facebook">
				<div class="fb-page" data-href="https://www.facebook.com/arborservice" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/arborservice">
							<a href="https://www.facebook.com/arborservice">Arbor - service</a>
						</blockquote>
					</div>
				</div>
			</div>

		</div>
	</div><!-- end of r-contact-overlay -->

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
			</div><!-- end of r-header-top -->

			<div class="r-header__branding">

				<div class="r-branding__title">
					<div class="container">
						<a href="<?php ('site_url'); ?>/">
							<h1 class="heading-one"><?php site_name(); ?></h1>
						</a>
						<!-- slogan -->
						<div class="r-branding__slogan">
							<span><?php site_slogan(); ?></span>
						</div>
					</div>
				</div>

			</div><!-- end of r-header__branding -->
		</header>

		<!-- on desktop this is the right part -->
		<div class="r-main">

			<div class="r-content">
				<div class="container">
					<?php page_content(); ?>
				</div>
			</div>

			<footer class="r-footer">
				<div class="container r-footer__inner">
					<!-- Contact information -->
					<div class="r-footer__contact">
						<p>Joey Liberloo <br>Nijverheidsstraat 36<br>3583 Paal-Beringen</p>
						<div class="r-footer__mail-link">
							<a href="mailto: <?php echo strrev('moc.liamtoh@ecivres-robra'); ?> ">Contacteer ons</a>
						</div>


						<a class="c-btn c-btn--accent" href="tel:+32491550999">+32491550999</a>
					</div>

					<!-- Facebook region  -->
					<div class="c-facebook">
						<div class="fb-page" data-href="https://www.facebook.com/arborservice" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/arborservice">
									<a href="https://www.facebook.com/arborservice">Arbor - service</a>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div><!-- end of r-main -->

		<div class="r-footer__copy">
			© <?php echo date('Y'); ?> | <?php site_name(); ?>
		</div>

	</div><!-- end of grid-container -->

	<div class="cookie__alert" role="alert">
		<p>We gebruiken cookies om ervoor te zorgen dat u de beste ervaring op onze website krijgt. </p>

		<div class="cookie__flex">
			<a href="<?php ('site_url'); ?>/privacyverklaring">Lees meer</a>
			<button type="button" class="c-btn c-btn--accent-two cookie__accept">
				Akkoord
			</button>
		</div>

	</div><!-- end of cookie__alert -->

</body>

<script src="../dist/js/all.js"></script>

</html>