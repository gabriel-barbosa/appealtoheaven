<?php /* Template Name: About */ get_header(); ?>

<!-- section -->
<section class="text-about">
	<h1><?php the_title(); ?></h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="text-hover">
			<?php the_field('about_text'); ?>

			<div class="image-hover">
				<?php $imagehover = get_field('about_image_hover'); ?>
				<img src="<?php echo esc_url($imagehover['url']); ?>" alt="">
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="logo-about">
	<img src="<?php bloginfo('template_url'); ?>/img/logo_about.png" alt="">
</section>

<section class="contact">
	<div class="contact_left">
		<?php
		$link_left = get_field('about_contact_left');
		if( $link_left ):
		    $link_url = $link_left['url'];
		    $link_title = $link_left['title'];
		    ?>
		    <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>

	<div class="contact_right">
		<?php
		$link_right = get_field('about_contact_right');
		if( $link_right ):
		    $link_url = $link_right['url'];
		    $link_title = $link_right['title'];
		    ?>
		    <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>
<!-- /section -->


<?php get_footer(); ?>
