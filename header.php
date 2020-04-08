<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' –'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <script type='text/javascript' src='<?php echo get_bloginfo('url') ?>/wp-content/themes/appealtoheaven/js/jquery.mousewheel.min.js'></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<div class="gradient-background">
		</div>

		<header class="header">
				<nav class="nav left">
					<div class="nav-item logo-menu"><a href="<?php bloginfo('url'); ?>">
						<span>AppealToHeaven</span>
						<img src="<?php bloginfo('template_url'); ?>/img/logo_menu_translated.svg" alt="">
					</a></div>
					<div class="nav-item"><a href="<?php bloginfo('url'); ?>/shop/">Shop</a></div>
					<div class="nav-item"><a href="<?php bloginfo('url'); ?>/about/">About</a></div>
					<div class="nav-item"><a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms&Conditions</a></div>
				</nav>

				<nav class="nav right">
					<div class="nav-item"><a href="#">Newsletter</a></div>
					<div class="nav-item"><a href="#">IG</a></div>
					<div class="nav-item"><a href="#">FB</a></div>
					<div class="nav-item"><a href="#">YT</a></div>
					<?php global $woocommerce; ?>
					<div class="nav-item"><a href="<?php bloginfo('url'); ?>/cart/">Cart (<?php echo $woocommerce->cart->cart_contents_count; ?>)</a></div>
				</nav>

				<nav class="nav mobile">
						<div class="toggle-item">
							<img src="<?php bloginfo('template_url'); ?>/img/logo_menu.svg" alt="">
						</div>
					</div>
				</nav>
		</header>

		<nav class="toggle-menu">
				<div class="nav-item logo-menu"><a href="<?php bloginfo('url'); ?>">Home</a></div>
				<div class="nav-item"><a href="<?php bloginfo('url'); ?>/shop/">Shop</a></div>
				<div class="nav-item"><a href="<?php bloginfo('url'); ?>/about/">About</a></div>
				<div class="nav-item"><a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms& Conditions</a></div>
				<div class="nav-item submenu">
					<div><a href="#">Newsletter</a></div>
					<div><a href="#">Instagram</a></div>
					<div><a href="#">Facebook</a></div>
					<div><a href="#">Youtube</a></div>
					<?php global $woocommerce; ?>
					<div><a href="<?php bloginfo('url'); ?>/cart/">Cart (<?php echo $woocommerce->cart->cart_contents_count; ?>)</a></div>
				</div>
		</nav>
		<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
