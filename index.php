<?php require "includes/header.php" ?>
    <div id="hero">
        <?php randomHero(); ?>
        <h4>
            Active Care Atlanta specializes in Sports Injuries, Performance Care and Auto Accident Injuries. Our doctors are among the few chiropractors in Georgia that are certified in Active Release Techniques (ART®). ART® is a state-of-the-art soft tissue release system based treatment designed for overused muscles, tendons, ligaments, fascia, and nerves.
        </h4>
    </div>
    <ul id="footer_sprite" class="clearfix">
        <li id="active_release"><a href="#"></a></li>
        <li id="car_accident"><a href="#"></a></li>
        <li id="crossfit_care"><a href="#"></a></li>
        <li id="dance_medicine"><a href="#"></a></li>
        <li id="pregnancy"><a href="#"></a></li>
        <li id="massage"><a href="#"></a></li>
    </ul>
<?php require "includes/footer.php" ?>


<?php
    function randomHero(){
        $img_path = __DIR__.'/images';
        $images = array('home_banner1.jpg', 'home_banner2.jpg', 'home_banner3.jpg', 'home_banner4.jpg');
        $key = array_rand($images);
        $path = $img_path.'/'.$images[$key];
        $path = explode("/Applications/XAMPP/xamppfiles/htdocs/clients", $path);
        echo "<img src='http://localhost/clients/".$path[1]."' >";
    }
?>