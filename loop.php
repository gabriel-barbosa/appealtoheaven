<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div id="post-<?php the_ID(); ?>" class="story-item">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="image-container">
					<img src="<?php the_post_thumbnail_url('slide'); ?>" alt="">
				</div>
			</a>

			<div class="post-info" data-link="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" data-description="<?php the_field('description'); ?>"></div>
		<?php endif; ?>
		<!-- /post thumbnail -->
	</div>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>


<?php endif; ?>
