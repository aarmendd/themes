<?php

function load_css(){
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false , "all" );
    wp_enqueue_style("bootstrap");

    wp_register_style("main", get_template_directory_uri() . "/css/main.css", array(), false , "all" );
    wp_enqueue_style("main");
    
}
add_action("wp_enqueue_scripts", "load_css");


function load_js(){
    wp_enqueue_script("jquery");
    wp_register_script( "bootstrapjs", get_template_directory_uri() . "/js/bootstrap.min.js", "jquery", false, true);
    wp_enqueue_script("bootstrapjs");
}
add_action("wp_enqueue_scripts", "load_js");

// Theme Options
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("widgets");


// Menus
register_nav_menus( 
    array(
        "header-menu" => "Header Menu Location"
    )
);

// Custom Image Sizes

add_image_size("blog-small", 200, 200, true);
add_image_size("blog-large", 800, 400, false);

// Sidebars

function my_sidebars(){
    register_sidebar(
        array(
           "name" => "Name of the sidebar",
           "id" => "id-sidebar",
           "before_title" => '<h4 class="widget-title">',
           "after_title" => "</h4>"
        )
    );
}
add_action("widgets_init","my_sidebars");

// Custom post types

function post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'hierarchical' => true, // if true it acts as a page, false it acts as a post
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        //'rewrite' => array('slug' => 'my-cars'),
    );

    register_post_type('cars',$args);
}
add_action('init','post_type');

// Taxonomy

function my_taxonomy(){
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true, //if false it acts as a tag
    );

    register_taxonomy('brands', array('cars'), $args);
}
add_action('init','my_taxonomy');

