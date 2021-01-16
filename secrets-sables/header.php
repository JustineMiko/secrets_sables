<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
            <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'header_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'header-menu',
                        'menu_class'        => 'nav navbar-nav ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
            </div>
        </nav>
    </header>
<!-- Fin du header -->
    
<?php wp_body_open(); ?>