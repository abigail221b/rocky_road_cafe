<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/style.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header" style="background-image: url('<?php echo get_bloginfo("template_directory"); ?>/images/header.jpg')">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Rocky Road Cafe</a></h1>
							<hr />
							<p>Another fine freebie by HTML5 UP</p>
						</header>
						<footer>
							<a href="<?php get_bloginfo("template-directory"); ?>/menu" class="button">Our Menu</a>
						</footer>
					</div>

				<!-- Nav -->
					<nav id="nav">
					<?php wp_nav_menu( array(
						"theme_location" => "header-menu",
						"container" => "ul"
					) ); ?>
					</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>We serve fair-trade, organic, locally roasted coffee. Our food are made fresh in-house. You can count on us to fuel the rest of your day!</h2>
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<header>
						<h2>Featured Menu Items</h2>
					</header>

					<div class="reel">

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Fermentum sagittis proin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Fermentum sagittis proin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Varius magnis sollicitudin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Varius magnis sollicitudin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
					</div>
				</section>

			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
						<header>
							<h2><a href="#">Sed massa imperdiet magnis</a></h2>
							<p>
								Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
								pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
							</p>
						</header>
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
							mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</p>
						<footer>
							<a href="#" class="button">Continue Reading</a>
						</footer>
					</article>

				</div>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Section</h2>
						</header>

					</section>

				</div>

			<!-- Footer -->
				<?php get_footer(); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>