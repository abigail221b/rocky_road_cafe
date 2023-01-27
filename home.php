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
	<body class="left-sidebar is-preload">
		<div id="page-wrapper"><!-- Scripts -->
            <!-- Header -->
				<?php get_template_part("secondary-header"); ?>

			<!-- Main -->
			<div class="wrapper style1">
				<div class="container">
					<article id="main">
						<header>
							<h1>Our Blog</h1>
						</header>
						<div id="blog-posts">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="post-preview">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_date(); ?></p>
								<?php the_post_thumbnail(array("500", "200")); ?>
								<p><?php the_excerpt(); ?></p>
							</div>
						<?php endwhile; endif; ?>
</div>
					</div>
				</div>
			</div>

            <!-- Footer -->
				<?php get_footer(); ?>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
        </div>
	</body>
</html>