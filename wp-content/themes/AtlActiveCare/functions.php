<?php
define('THEME_DIR', get_template_directory_uri());
define('CSS_DIR', THEME_DIR.'/styles');
#define('IMG_DIR', THEME_DIR.'/images');
#define('VIDEOS_DIR', THEME_DIR.'/videos');
#define('SLIDESHOW_DIR', IMG_DIR.'/slideshow');
define('SCRIPTS_DIR', get_bloginfo('stylesheet_directory').'/js');
define('SITE_URL', get_bloginfo('url'));

//Hooks
add_action('wp_loaded', 'init');

#Custom Stuff
function init(){
    themeSetup();
    registerScripts();
    attatch_shortcodes();
    removeDefaults();
}
function removeDefaults() {
	remove_filter ('the_content','wpautop');
	remove_filter ('the_excerpt','wpautop');
}
function attatch_shortcodes() {
    add_shortcode('image', 'image');
    add_shortcode('pdf', 'pdf');
}
function registerScripts(){
    wp_register_script('global', SCRIPTS_DIR.'/global.js', array('jquery'), null, FALSE);
    wp_register_script('fancybox', SCRIPTS_DIR.'/vendors/fancybox/source/jquery.fancybox.js', array('jquery', 'global'), null, FALSE);

    wp_register_style( 'fancybox',  SCRIPTS_DIR.'/vendors/fancybox/source/jquery.fancybox.css', array(), null, 'all');
}

function loadScripts(){
    wp_enqueue_script('global');
    if(is_page(13)){
        wp_enqueue_script('fancybox');
        wp_enqueue_style('fancybox');
    }
}

function themeSetup(){
    add_action('wp', 'loadScripts');
    #WordPress Theme Setup
    register_nav_menus( array(
        'Primary' => 'Primary Navigation Menu',
    ));

    #Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog_featured_image', 300, 170);
    add_image_size( 'single_landscape', 960, 9999);
}

function randomHero(){
    $img_path = get_bloginfo('template_directory').'/images';
    $images = array('home_banner1.jpg', 'home_banner2.jpg', 'home_banner3.jpg', 'home_banner4.jpg');
    $key = array_rand($images);
    $path = $img_path.'/'.$images[$key];
    echo "<img src='". $path ."'>";
}

function image(){
    $dir = get_bloginfo('stylesheet_directory').'/images/';
    return $dir;
}

function pdf(){
    $dir = get_bloginfo('stylesheet_directory').'/docs/';
    return $dir;
}

function determine_link_type($post){
    $cats = wp_get_post_categories($post->ID);
    if(in_array(3, $cats)){
        $url = get_post_meta($post->ID, 'url', true);
    } else {
        $url = get_permalink();
    }
    return $url;
}

function print_class($i){
    if($i % 2 == 0){
        return "class='odd'";
    } else {
        return "class='even'";
    }
}

function dd($mixed){
    switch(gettype($mixed)){
        case "string":
            var_dump($mixed);
            die();
        break;
        case "object":
            echo "<pre>";
                var_dump($mixed);
            echo "</pre>";
            die();
        break;
        case "array":
            echo "<pre>";
                print_r($mixed);
            echo "</pre>";
            die();
        break;
    }
}