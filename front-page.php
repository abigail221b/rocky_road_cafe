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
							<p>Where every sip is a smooth ride</p>
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

					<div class="reel" style="overflow: visible; transform: translate(0px, 0px);">

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
							<h2>What our customers say about us...</h2>
						</header>
						<div id="testimonials">
							<div class="blockquote">
								<h1>
									Rocky Road is like a second home to me. I'm pretty sure the staff knows my order by heart, and I'm not even mad about it.
								</h1>
								<h4>&mdash;Johnson E.</h4>
							</div>
							<div class="blockquote">
								<h1>
									I've gained 10 pounds since I discovered this place, but it's worth it!
								</h1>
								<h4>&mdash;Emily W.<br><em>Our new loyal customer</em></h4>
							</div>
							<div class="blockquote">
								<h1>
									I came for the coffee, but stayed for the ambiance. The decor here is straight out of my Pinterest board.
								</h1>
								<h4>&mdash;Susie B.</h4>
							</div>
						</div>
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
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/browser.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/util.js"></script>
			<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/main.js"></script>

	</body>
</html>