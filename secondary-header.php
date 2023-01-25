<div id="secondary-header">

        <!-- Cafe Name and Logo -->
        <div id="brand">
            <a href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_bloginfo("template_directory"); ?>/images/logo.png" width="75px" />
                <h2>Rocky Road Cafe</h2>
            </a>
        </div>

        <!-- Nav -->
            <nav id="nav">
                <?php wp_nav_menu( array(
                    "theme_location" => "secondary-header-menu",
                    "container" => "ul"
                ) ); ?>
            </nav>

    </div>