<?php
	/* Template Name: Blog Template */
	get_header();
	$the_query = new WP_Query('posts_per_page=10');
?>

<div id="blog" class="wrapper clearfix">
	<?php
		if($the_query->have_posts()) :
		while($the_query->have_posts()) :
		$the_query->the_post();
	?>

	<article class="post">
		<?php
		if ( has_post_thumbnail() ) {?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php } ?>
	    <a href="<?php the_permalink(); ?>">
		    <h1 class="title">
		    	<?php the_title(); ?>
		    </h1>
	    </a>
	    <div class="wrapper clearfix">
	        <?php the_content(); ?>
	    </div>
    </article>
    <?php endwhile; endif;  ?>

</div>
<?php get_footer(); ?>