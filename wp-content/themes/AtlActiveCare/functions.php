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