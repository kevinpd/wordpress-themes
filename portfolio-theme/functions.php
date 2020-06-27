<?php  /*  Theme Supports  */
    add_theme_support('title-tag');

    add_theme_support('customer-logo', 
        array(
            'flex-height' => true,
            'flex-width' => true,
        )
    );

    /*  Enqueue Styles  */
    function trial_register_styles() {
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    }
    add_action('wp_enqueue_scripts', 'trial_register_styles');

    /*  Enqueue Scripts  */

    /*  Nav Menu  */
    function register_my_menus() {
        register_nav_menus( array(
            'main-menu' => __('Main Menu'),
            'mobile-menu' => __('Mobile Menu'),
            'social-menu' => __('Social Menu'),
        ));
    };
    add_action('init', 'register_my_menus');
?>