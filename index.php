<?php get_header(); ?>

	<main role="main">
		<section class="logo hidden-xs">
			<img src="<?php bloginfo('template_url'); ?>/img/logo_home.svg" alt="">
		</section>

		<section class="logo visible-xs">
			<div>Appeal</div>
			<div>To</div>
			<div>Heaven</div>
			<img src="<?php bloginfo('template_url'); ?>/img/logo_home.svg" alt="">
		</section>


		<!-- section -->
		<section class="stories-slider">
			<div class="container-slider">
				<?php get_template_part('loop'); ?>
			</div>
		</section>
		<!-- /section -->

		<section class="stories-title">
			<div class="title"></div>
			<div class="description"></div>
		</section>
	</main>

<?php get_footer(); ?>
