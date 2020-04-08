<?php /* Template Name: Home */ get_header(); ?>

<?php if(have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="landing-cover">
			<?php $featuredimage = get_field('featured_image');
			if( get_field('featured_video') ): ?>
				<video autoplay muted loop playsinline>
					<source src="<?php the_field('featured_video'); ?>" type="video/mp4">
				</video>
			<?php elseif($featuredimage): ?>
				<img src="<?php echo esc_url($featuredimage['url']); ?>" alt="">
			<?php endif; ?>
		</div>
<?php endwhile; wp_reset_query(); endif; ?>


<section class="logo">
	<img class="desktop" src="<?php bloginfo('template_url'); ?>/img/logo_home.svg" alt="">
	<img class="tablet" src="<?php bloginfo('template_url'); ?>/img/logo_tablet.svg" alt="">
	<img class="mobile" src="<?php bloginfo('template_url'); ?>/img/logo_mobile.svg" alt="">
</section>

<!-- section -->
<section class="stories-slider">
	<div class="container-slider">
		<?php $args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
		);
			$query = new WP_Query($args); ?>
			<?php if ($query->have_posts()): ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
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
		<?php endwhile; wp_reset_query(); endif; ?>
	</div>
</section>
<!-- /section -->

<section class="stories-title">
	<div class="title"></div>
	<div class="description"></div>
</section>

<?php get_footer(); ?>
