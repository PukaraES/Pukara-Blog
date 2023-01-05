<?php

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'puk-menu' ),
            'footer'  => __( 'Secondary menu', 'puk-menu' ),
        )
    );

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}


function theme_scripts(){
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/main.min.css', array(), null);
}

function wph_add_class_for_p_tag($content) {
    $content = str_replace('<p>', '<p class="py-6">', $content);
    return $content;
}

add_filter('the_content', 'wph_add_class_for_p_tag', 9999);


add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'theme_scripts');

