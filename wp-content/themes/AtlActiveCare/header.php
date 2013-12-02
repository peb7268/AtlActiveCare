<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"></link>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,800,900' rel='stylesheet' type='text/css'>
    <?php wp_head() ?>
</head>
<body>


<h2 id="header-meta">Active Release Technique Provider > Johns Creek Chiropractor > Sports Injuries and Auto Accident > 6290 Abbotts Bridge Rd. #204 Johns Creek, GA 30097 > <span class="large">t: 770-559-4236</span></h1>

    <ul id="header" class="sections clearfix">
        <li>
            <div id="logo">
                ACTIVE
                CARE
                <span class="tagline">ATLANTA</span>
                
                <span class="sub-message">
                    CHIROPRACTIC
                    <span class="sub-message">
                        JOINT &amp; SOFT TISSUE
                    </span>
                </span>
            </div>
        </li>
        <li>
            <?php 
                $args = array(
                    'container'       => '',
                    'menu_class' => 'clearfix',
                    'menu_id'         => 'nav',
                );
                wp_nav_menu( $args ); 
            ?> 
        </li>
        <li>
            <p>Dr. Lee Chiropractic is now </p>
            <p>ACTIVE CARE ATLANTA</p>
            <p><em>Same Location and Same Doctors</em></p>
            <p> >> November Sat. Openings: 9th and 23rd.</p>        
        </li>
    </ul>
