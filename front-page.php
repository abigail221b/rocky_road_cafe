<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo get_bloginfo("name"); ?></title>
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
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic01.jpg" width="300" height="225" /></a>
							<header>
								<h3><a href="#">Brown Sugar Cinnamon Muffins</a></h3>
							</header>
							<p>Delicious and moist muffins made with a blend of brown sugar and cinnamon, perfect for a sweet breakfast or snack</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic02.jpg" width="300" height="225" /></a>
							<header>
								<h3><a href="#">Soft Pretzels</a></h3>
							</header>
							<p>A classic and delicious snack made from dough twisted into a knot shape and then baked. Served with a side of cheese sauce or mustard for dipping</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic03.jpg" width="300" height="225" /></a>
							<header>
								<h3><a href="#">Matcha Latte</a></h3>
							</header>
							<p>A popular and refreshing latte made with matcha green tea powder, steamed milk, and a sweetener of your choice</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic04.jpg" width="300" height="225" /></a>
							<header>
								<h3><a href="#">Roasted Vegetable Medley</a></h3>
							</header>
							<p>A hearty sandwich made with a mix of roasted vegetables, such as bell peppers, zucchini, and onions, and served on a toasted bun</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/pic05.jpg" width="300" height="225" /></a>
							<header>
								<h3><a href="#">Black Bean Patty Sandwich</a></h3>
							</header>
							<p>A vegan-friendly sandwich made with a patty made from black beans, topped with avocado, lettuce, and tomato, on a toasted bun.</p>
						</article>
					</div>
				</section>

			<!-- Main -->
				<div class="wrapper style2"  style="background-image: url('<?php echo get_bloginfo("template_directory"); ?>/images/bcg.jpg'); background-attachment: fixed;">

					<article id="main" class="container special">
						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
						<header>
							<h2>What our customers say about us...</h2>
						</header>
						<div id="testimonials">
							<figure class="snip1157">
								<blockquote> Rocky Road is like a second home to me. I'm pretty sure the staff knows my order by heart, and I'm not even mad about it.
									<div class="arrow"></div>
								</blockquote>
								<div class="footer">
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg" alt="sq-sample3" />
									<div class="author">
										<h5>Emily W.</h5>
									</div>
								</div>

							</figure>
							<figure class="snip1157 hover">
								<blockquote> I've gained 10 pounds since I discovered this place, but it's worth it!
									<div class="arrow"></div>
								</blockquote>
								<div class="footer">
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample27.jpg" alt="sq-sample27" />
									<div class="author">
										<h5>Johnson E.</h5>
									</div>
								</div>
							</figure>
							<figure class="snip1157">
								<blockquote> Rocky Road is my happy place! The staff is friendly and the food is delicious. I can't get enough of the homemade cookies.
									<div class="arrow"></div>
								</blockquote>
								<div class="footer">
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17" />
									<div class="author">
										<h5>Susie S.</h5>
									</div>
								</div>
							</figure>
						</div>
					</article>

				</div>

			<!-- Features -->
			<!--
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Section</h2>
						</header>

					</section>

				</div>
			-->

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