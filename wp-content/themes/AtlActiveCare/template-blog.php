<?php
	/* Template Name: Blog Template */
	get_header();
	global $more;
	$the_query = new WP_Query('posts_per_page=10');
?>

<div id="blog" class="wrapper clearfix">
	<div class="row clearfix">
	<?php $i = 1;
		if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
		$more = 0;
	?>
		<article class="post">
			<?php if( has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('blog_featured_image'); ?>
				</a>
			<?php } ?>
		    <a href="<?php the_permalink(); ?>">
			    <h1 class="title">
			    	<?php the_title(); ?>
			    </h1>
		    </a>
		    <div class="wrapper clearfix">
		        <?php the_content('Read More'); ?>
		    </div>
	    </article>
	<?php if($i % 3 == 0) echo "</div><div class='row clearfix'>"; ?>
    <?php $i++; endwhile; endif;  ?>

</div>
<?php get_footer(); ?>