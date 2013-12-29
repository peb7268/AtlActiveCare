<?php
	get_header();
	if (have_posts()) : while(have_posts()) : the_post();
?>
    <div class="wrapper">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="the_content wrapper clearfix">
    	<div class="post-thumbnail">
        	<?php
        	if(has_post_thumbnail()) {
        		the_post_thumbnail('single_landscape');
        	}
        	?>
        </div>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>