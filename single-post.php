<?php get_header(); ?>

<!-- section -->
<section>
<?php if (have_posts()):
	while (have_posts()) : the_post(); ?>

	<?php $previous_post = get_adjacent_post(); # Previous
		$next_post = get_adjacent_post( false, '', false ); # Next
	?>

	<?php if ( is_a(  $previous_post, 'WP_Post' ) ) { ?>
	<div class="nav-single-post previous">
		<a href="<?php echo get_permalink($previous_post); ?>"><img src="<?php bloginfo('template_url'); ?>/img/previous_story.svg" alt=""></a>
	</div>
	<?php } ?>

	<?php if ( is_a(  $next_post, 'WP_Post' ) ) { ?>
	<div class="nav-single-post next">
		<a href="<?php echo get_permalink($next_post); ?>"><img src="<?php bloginfo('template_url'); ?>/img/next_story.svg" alt=""></a>
	</div>
	<?php } ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

		$layout = get_field('choose_layout');
		if ($layout == 'horizontal') {?>
			<div class="horizontal-wrapper">
				<div class="horizontal-content">
					<div class="horizontal-page_builder">
						<div class="horizontal-title">
							<h1><?php the_title(); ?></h1>
							<h3><?php the_field('description'); ?></h3>
						</div>

						<p class="resume">
							<?php the_field('horizontal_resume'); ?>
						</p>
					</div>
					<?php
					$images = get_field('image_gallery');
					$imgCounter = 0;
					if ($images) {?>
						<?php
							foreach( $images as $image ) {
								$imgCounter++;?>
								<div class="img-wrapper">
									<div class="img-caption"><?php echo $imgCounter?>. <?php echo esc_html($image['caption']); ?></div>
									<img class="gallery-img" src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div><?php
							}?>
						<?php
					}?>
				</div>
			</div><?php
		}else{
			the_content();
		}?>

	</article>
	<!-- /article -->

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
