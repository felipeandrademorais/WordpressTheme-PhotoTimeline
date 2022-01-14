<?php


    // Importando o arquivo do Customizer
    require get_template_directory() . '/inc/customizer.php';

    function  load_scripts() {
        //Styles
        wp_enqueue_style( 'geral',  get_template_directory_uri().'/assets/css/geral.css', array(), '1.0', 'all');
        //Scripts
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', array(), null, true);
        wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), null, true);
    }

    add_action('wp_enqueue_scripts', 'load_scripts');


    function posts_types() {
        register_post_type(
            'timeline',
            array(
                'labels' => array(
                    'name' => __('Timeline'),
                    'singular_name' => __('Timeline')
                ),
                'public' => false,
                'show_ui' => true,
                'has_archive' => false,
                'menu_icon' => 'dashicons-format-gallery',
                'supports' => array('title')
            )
        );
    }

    add_action('init', 'posts_types');