<?php /* Template Name: 1 col &amp; Sidebar */ ?>
    <?php get_header(); ?>
    <?php if (have_posts) : while(have_posts()) : the_post(); ?>
        <div class="wrapper andSidebar">
            <h1 class="title"><?php the_title(); ?></h1>
        </div>
        <div class="wrapper andSidebar clearfix">
            <div class="inner">
                <?php the_content(); ?>
            </div>
            <?php get_sidebar('general'); ?>
        </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>

