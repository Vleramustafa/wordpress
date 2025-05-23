<?php

function load_scripts(){
    wp_enqueue_style(
        'style', 
        get_stylesheet_uri(),
        array(), 
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
    
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');

    

    wp_enqueue_script('dropdown',get_template_directory_uri().'/js/dropdown.js',array(),'1.0',false);

    wp_enqueue_script('bootstrap2',get_template_directory_uri() .'/js/bootstrap.bundle.min.js',array('jquery'));
    
}
add_action('wp_enqueue_scripts', 'load_scripts');

function config(){
    register_nav_menus(
        array(
            'wp_devs_main_menu'=>'Main Menu',
            'wp_devs_footer_menu'=>'Footer Menu'
        )
        );
    
        $args=array(
            'height'=>225,
            'width'=>1920
        );
        add_theme_support('custom-header',$args);
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo',array(
            'height'=>110,
            'width'=>200,
            'flex-height'=>true,
            'flex-width'=>true

        ));

        add_theme_support('automatic-feed-links');
        add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption','style','script'));
        add_theme_support('title-tag');


}
add_action('after_setup_theme','config',0);
?>