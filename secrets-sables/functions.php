<?php
/* Start global */
    
    // Définis le menu d'en-tête
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'secrets-sables' ),
    ) );
    // Définis le menu de pied de page
    register_nav_menus( array(
        'footer' => __( 'Pied de page', 'secrets-sables' ),
        ) );

    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );

    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );

    function add_theme_scripts() {
        // Ajoute le chargement d'un fichier css au chargement de wordpress
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', ['style']);
        // Ajoute le chargement d'un script js au chargement de wordpress
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', [], null, true);
    }
    // Appele la fonction au chargement de Wordpress
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/* End global */
/* Start WooCommerce */
    function customtheme_add_woocommerce_support()
    {
    add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
/* End WooCommerce */
/* Start Bootstrap */
    function wpbootstrap_after_setup_theme() {
    // On ajoute un menu
    register_nav_menu('header_menu', "Menu du header");
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');
    // Chargement des styles et des scripts Bootstrap sur WordPress
    function wpbootstrap_styles_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
        wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
/* End Bootsrap */
?>