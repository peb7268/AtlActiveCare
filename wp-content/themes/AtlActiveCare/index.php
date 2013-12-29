<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="wrapper">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="wrapper clearfix">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>