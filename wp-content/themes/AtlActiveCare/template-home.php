<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

    <div id="socialWidgetWrapper">
        <h4>Social</h4>
        <div id="social_buttons" class="clearfix">
            <ul id="links" class="left clearfix">
                <li>
                     <a href="https://www.facebook.com/ActiveCareAtlanta" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/activecareatl" target="_blank">Twitter</a>
                </li>
                <li>
                    <a href=" https://plus.google.com/108273537002822560144/posts" target="_blank">Google+</a>
                </li>
                <li>
                    <a href="https://maps.google.com/maps?expflags=enable_star_based_justifications:true&ie=UTF8&cid=10918895883272021449&q=Active+Care+Atlanta&iwloc=A&gl=US&hl=en" target="_blank">Find Us</a>
                </li>
            </ul>
            <ul id="buttons" class="left clearfix">
                <li>
                    <div class="fb-like" data-href="http://www.activecareatl.com" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" data-colorscheme="dark"></div>
                </li>
                <li>
                    <a href="https://twitter.com/activecareatl" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @activecareatl</a>
                </li>
                <li>
                    <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="120"></div>
                </li>
            </ul>
        </div>
    </div>

    <div id="hero">
        <div class="wrapper">
        <?php randomHero(); ?>
        <div id="hero-copy-wrapper">
            <div class="wrapper">
                <h4>
                    Active Care Atlanta specializes in Sports Injuries, Performance Care and Auto Accident Injuries. Our doctors are among the few chiropractors in Georgia that are certified in Active Release Techniques (ART®). ART® is a state-of-the-art soft tissue release system based treatment designed for overused muscles, tendons, ligaments, fascia, and nerves.
                </h4>
            </div>
        </div>
        </div>
    </div>

<div id="home_footer">
   <ul id="footer_sprite" class="clearfix">
        <li id="active_release"><a href="<?php echo SITE_URL; ?>/services#aasi">Active Release</a></li>
        <li id="car_accident"><a href="<?php echo SITE_URL; ?>/services#aa">Car Accident</a></li>
        <li id="crossfit_care"><a href="<?php echo SITE_URL; ?>/services#cfc">Crossfit Care</a></li>
        <li id="dance_medicine"><a href="<?php echo SITE_URL; ?>/services#dm">Dance Medicine</a></li>
        <li id="pregnancy"><a href="<?php echo SITE_URL; ?>/services#pp">Pregnancy</a></li>
        <li id="massage"><a href="<?php echo SITE_URL; ?>/services#els">Massage</a></li>
    </ul>
</div>
<?php get_footer(); ?>