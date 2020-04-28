<?php get_header(); ?>

<section>
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>

	<?php if(is_archive()) { ?>
	<div class="page-description">
		<?php $args = array(
	    'taxonomy'   => "product_cat",
		);
		$product_categories = get_terms($args); ?>

		<h2>
		<?php $output = ''; foreach($product_categories as $cat) {
		    if(!empty($output))
		        $output .= ', ';
		    $output .= '<span class="cat"><a href="'. esc_url( get_term_link( $cat ) ) .'">'. $cat->name .'</a></span>';
			}
			echo $output; ?>
		</h2>
	</div>
	<?php } ?>

	<?php if (have_posts()):
	$productcounter = 0;

	while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
