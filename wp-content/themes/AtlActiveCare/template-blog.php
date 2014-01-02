<?php
	/* Template Name: Blog Template */
	get_header();
	global $more;

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'category_name' => 'blog',
		'paged' => $paged,
	);

	$the_query = new WP_Query($args);
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
	<div id="pagination">
		<?php $big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $the_query->max_num_pages
			) ); ?>
	</div><!-- #pagination -->

<?php get_footer(); ?>