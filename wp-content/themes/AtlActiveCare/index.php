<?php get_header(); ?>
<div id="socialWidgetWrapper">
    <h4>Social</h4>
    <ul id="social_buttons">
        <li>Facebook</li>
        <li>Twitter</li>
        <li>Linkedin</li>
    </ul>
</div>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="wrapper">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="wrapper clearfix">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>