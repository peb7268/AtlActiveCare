<?php
	/* Template Name: News &amp; Events */
	get_header();
	$the_query = new WP_Query('posts_per_page=10&cat=4,5');
?>

<div id="news_and_events" class="wrapper clearfix">
	<?php
		if($the_query->have_posts()) :
		while($the_query->have_posts()) :
		$i = 0;
		$the_query->the_post();
	?>

	<div class="event" <?php echo print_class($i); ?>>
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}

			$url = determine_link_type($post);
		?>

		<!-- <a href="<?php //echo $url; ?>"> -->
	    	<h1 class="title"><?php the_title(); ?></h1>
		<!-- </a> -->
	    <div class="wrapper clearfix">
	        <?php the_content(); ?>
	    </div>
    </div>

    <?php $i++; endwhile; endif;  ?>

</div>
<?php get_footer(); ?>