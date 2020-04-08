<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $productcounter;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
if($productcounter == 8) { $productcounter = 0; }
$productcounter++;
?>

<div class="product-item nth-<?php echo $productcounter; ?>">
	<a href="<?php the_permalink() ;?>"><img src="<?php the_post_thumbnail_url('large'); ?>" alt=""></a>

	<div class="product-info">
		<div class="title">
			<?php the_title(); ?>
			<span class="price"><?php echo $product->get_price_html(); ?> <a href="<?php the_permalink(); ?>">buy</a></span>
		</div>

		<?php if(get_field('thumbnail_resume')): ?>
		<div class="description">
			<?php the_field('thumbnail_resume'); ?>
		</div>
	<?php endif; ?>
	</div>
</div>
