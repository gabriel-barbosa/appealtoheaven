<?php get_header(); ?>

<!-- section -->
<section>
<?php if (have_posts()):
	while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	</article>
	<!-- /article -->

<?php endif; ?>
</section>
<!-- /section -->


<?php get_footer(); ?>
