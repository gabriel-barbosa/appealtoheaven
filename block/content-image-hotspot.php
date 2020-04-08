<div class="image-hotspot">
  <?php $imagehover = get_field('block_image'); ?>
  <img src="<?php echo esc_url($imagehover['url']); ?>" alt="">
  <?php
  if( have_rows('products') ):
    while ( have_rows('products') ) : the_row();
    $coordinate = get_sub_field('product_coordinates');

    $position = explode(",", $coordinate);
    $color = get_field('text_color');
    $index = get_sub_field('index_number');

    $post_object = get_sub_field('product');
    if( $post_object ):

    	$post = $post_object;
    	setup_postdata( $post );
      global $woocommerce;
      $price = get_post_meta( $post->ID, '_price', true ); ?>

      <div class="hotspot-pin" style="left: <?php echo $position[0]; ?>; top: <?php echo $position[1]; ?>; color: <?php if($color) : echo $color; endif; ?>;">
          <div class="product-index"><?php if($index) : echo $index; endif; ?></div>
          <div class="product-link">
            <a href="<?php echo esc_html( get_permalink($post_object->ID)); ?>" <?php if($color): ?>style="color: <?php echo $color; ?>;"<?php endif; ?>>
              <?php echo esc_html( get_the_title($post_object->ID) ); ?>
              <?php if($price): ?><br><?php echo wc_price( $price ); ?><?php endif; ?>
            </a>
          </div>
      </div>

      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php endwhile; endif; ?>
</div>
