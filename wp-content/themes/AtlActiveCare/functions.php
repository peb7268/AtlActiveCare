<?php
define('THEME_DIR', get_template_directory_uri());
define('CSS_DIR', THEME_DIR.'/styles');
#define('IMG_DIR', THEME_DIR.'/images');
#define('VIDEOS_DIR', THEME_DIR.'/videos');
#define('SLIDESHOW_DIR', IMG_DIR.'/slideshow');
define('SCRIPTS_DIR', get_bloginfo('stylesheet_directory').'/js');

//Hooks
add_action('init', 'init');

#Custom Stuff
function init(){
    themeSetup();
    registerScripts();
    loadScripts();
    attatch_shortcodes();
    removeDefaults();
}
function removeDefaults() {
	remove_filter ('the_content','wpautop');
	remove_filter ('the_excerpt','wpautop');
}
function attatch_shortcodes() {
    add_shortcode('image', 'image');
}
function registerScripts(){
    wp_register_script('global', SCRIPTS_DIR.'/global.js', array('jquery'), null, FALSE);
}

function loadScripts(){
    wp_enqueue_script('global');
}

function themeSetup(){
    #WordPress Theme Setup
    register_nav_menus( array(
        'Primary' => 'Primary Navigation Menu',
    ));
    add_theme_support( 'post-thumbnails' );
}

function randomHero(){
    $img_path = __DIR__.'/images';
    $images = array('home_banner1.jpg', 'home_banner2.jpg', 'home_banner3.jpg', 'home_banner4.jpg');
    $key = array_rand($images);
    $path = $img_path.'/'.$images[$key];
    $path = explode("/Applications/XAMPP/xamppfiles/htdocs/clients", $path);
    echo "<img src='http://localhost/clients/".$path[1]."' >";
}

function image(){
    $dir = get_bloginfo('stylesheet_directory').'/images/';
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