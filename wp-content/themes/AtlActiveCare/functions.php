<?php
define('SCRIPTS_DIR', get_bloginfo('stylesheet_directory').'/js');
add_action('init', 'init');


#Custom Stuff
function init(){
    themeSetup();
    registerScripts();
    loadScripts();
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



