<?php /* Template Name: Terms&Conditions */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section class="intro">
		<h1>Terms&<br class="visible-xs">Conditions</h1>
		<?php the_field('header_text'); ?>
	</section>

	<section class="two-col">
		<div class="col">
			<?php if( have_rows('delivery') ): ?>
			<?php while( have_rows('delivery') ): the_row(); ?>
				<div class="delivery">
					<h1>Delivery</h1>
					<?php the_sub_field('delivery_text'); ?>

					<div class="two-col address">
						<div>
							Address:
						</div>

						<div class="border">
							<?php the_sub_field('address'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>

			<?php if(get_field('lost_items')): ?>
				<div class="lost-items">
					<h1>Lost Items</h1>
					<?php the_field('lost_items'); ?>
				</div>
			<?php endif; ?>

			<?php if(get_field('revocation')): ?>
				<div class="lost-items">
					<h1>Revocation</h1>
					<?php the_field('revocation'); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="col">
			<?php if(get_field('policy')): ?>
				<div class="lost-items">
					<h1>Policy</h1>
					<?php the_field('policy'); ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
