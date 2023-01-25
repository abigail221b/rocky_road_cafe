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
                        <div id="post">
                            <header>
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_the_date(); ?></p>
                            </header>
                            <?php the_content(); ?>
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