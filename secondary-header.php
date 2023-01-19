<div id="secondary-header">

        <!-- Cafe Name and Logo -->
        <div id="brand">
            <img src="<?php echo get_bloginfo("template_directory"); ?>/images/logo.png" width="75px" />
            <h2><a href="">Rocky Road Cafe</a></h2>
        </div>

        <!-- Nav -->
            <nav id="nav">
                <?php wp_nav_menu( array(
                    "theme_location" => "header-menu",
                    "container" => "ul"
                ) ); ?>
            </nav>

    </div>