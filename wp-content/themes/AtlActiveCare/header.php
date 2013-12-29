<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"></link>
    <link href='http://fonts.googleapis.com/css?family=Varela|Raleway:400,200,800,900' rel='stylesheet' type='text/css'>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div id="content-wrapper">
<div id="red-bar">
    <h2 id="header-meta">
    Active Release Technique Provider > Johns Creek Chiropractor > Sports Injuries and Auto Accident > 6290 Abbotts Bridge Rd. #204 Johns Creek, GA 30097 > <span class="large">t: 770-559-4236</span></h1>
</div>
<div id="header-wrapper">
    <div class="wrapper">
        <ul id="header" class="sections clearfix">
            <li id="logo-wrapper">
                <a href="<?php bloginfo('url'); ?>">
                    <div id="logo">
                        <p class="tagline">ATLANTA</p>
                        <p class="sub-message">
                            CHIROPRACTIC <br>
                            <span class="sub-message">
                                JOINT &amp; SOFT TISSUE
                            </span>
                        </p>
                    </div>
                </a>
            </li>
            <li id="menu-wrapper">
                <?php
                    $args = array(
                        'container'       => '',
                        'menu_class' => 'clearfix',
                        'menu_id'         => 'nav',
                    );
                    wp_nav_menu( $args );
                ?>
            </li>
            <li id="cta-header">
                <p>Dr. Lee Chiropractic is now </p>
                <p class="bold">ACTIVE CARE ATLANTA</p>
                <p class="location"><em>(Same Location and Same Doctors)</em></p>
                <p class="date"> >> Sat. Openings: Dec. 21st and Jan. 4th</p>
            </li>
        </ul>
    </div>
</div>
