<?php get_header(); ?>

<section>
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="page-description">
		<?php if(get_field('shop_description')): ?>
		<h2><?php the_field('shop_description'); ?></h2>
		<?php endif; ?>
	</div>

	<?php if (have_posts()):
	$productcounter = 0;

	while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
