<?php require "includes/header.php" ?>
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
            <ul id="nav" class="clearfix">
                <li><a href="#">OUR DOCTORS</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">ARTICLES</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">NEW PATIENT</a></li>
                <li><a href="#">TESTIMONIALS</a></li>
                <li><a href="#">NEWS/EVENTS</a></li>
                <li><a href="#">HOURS/CONTACT</a></li>
            </ul>
        </li>
        <li>
            <p>Dr. Lee Chiropractic is now </p>
            <p>ACTIVE CARE ATLANTA</p>
            <p><em>Same Location and Same Doctors</em></p>
            <p> >> November Sat. Openings: 9th and 23rd.</p>        
        </li>
    </ul>
    <div id="hero">
        <?php randomHero(); ?>
        <h4>
            Active Care Atlanta specializes in Sports Injuries, Performance Care and Auto Accident Injuries. Our doctors are among the few chiropractors in Georgia that are certified in Active Release Techniques (ART®). ART® is a state-of-the-art soft tissue release system based treatment designed for overused muscles, tendons, ligaments, fascia, and nerves.
        </h4>
    </div>
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