<div id="header" style="background-image: url('<?php echo get_bloginfo("template_directory"); ?>/images/header.jpg')">

        <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.php" id="logo">Rocky Road Cafe</a></h1>
                </header>
            </div>

        <!-- Nav -->
            <nav id="nav">
                <?php wp_nav_menu( array(
                    "theme_location" => "header-menu",
                    "container" => "ul"
                ) ); ?>
            </nav>

    </div>