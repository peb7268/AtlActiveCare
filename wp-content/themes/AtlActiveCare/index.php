<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

    <div id="hero">
        <div class="wrapper" style="width: 1500px; overflow: hidden;">
        <?php randomHero(); ?>
        <div id="hero-copy-wrapper">
            <h4>
                Active Care Atlanta specializes in Sports Injuries, Performance Care and Auto Accident Injuries. Our doctors are among the few chiropractors in Georgia that are certified in Active Release Techniques (ART®). ART® is a state-of-the-art soft tissue release system based treatment designed for overused muscles, tendons, ligaments, fascia, and nerves.
            </h4>
        </div>
        </div>
    </div>

   <ul id="footer_sprite" class="clearfix">
        <li id="active_release"><a href="<?php echo SITE_URL; ?>/services#aasi">Active Release</a></li>
        <li id="car_accident"><a href="<?php echo SITE_URL; ?>/services#aa">Car Accident</a></li>
        <li id="crossfit_care"><a href="<?php echo SITE_URL; ?>/services#cfc">Crossfit Care</a></li>
        <li id="dance_medicine"><a href="<?php echo SITE_URL; ?>/services#dm">Dance Medicine</a></li>
        <li id="pregnancy"><a href="<?php echo SITE_URL; ?>/services#pp">Pregnancy</a></li>
        <li id="massage"><a href="<?php echo SITE_URL; ?>/services#re">Massage</a></li>
    </ul>

<?php get_footer(); ?>