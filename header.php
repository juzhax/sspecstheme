<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">

		<?php wp_head(); ?>
		
		<script type='text/javascript'>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		(function() {
		var gads = document.createElement('script');
		gads.async = true;
		gads.type = 'text/javascript';
		var useSSL = 'https:' == document.location.protocol;
		gads.src = (useSSL ? 'https:' : 'http:') +
		'//www.googletagservices.com/tag/js/gpt.js';
		var node = document.getElementsByTagName('script')[0];
		node.parentNode.insertBefore(gads, node);
		})();
		</script>

		<script type='text/javascript'>
		googletag.cmd.push(function() {
		var mapping = googletag.sizeMapping().
		addSize([768, 0], [728, 90]).
		addSize([0, 0], [300, 250]).
		build();
		googletag.defineSlot('/6880916/Secret-Top-728-300', [728, 90], 'ad-top').
		defineSizeMapping(mapping).
		addService(googletag.pubads());
		googletag.enableServices();
		});

		googletag.cmd.push(function() {
		var mapping = googletag.sizeMapping().
		addSize([768, 0], [728, 90]).
		addSize([0, 0], [300, 250]).
		build();
		googletag.defineSlot('/6880916/Secret-After-728-300', [728, 90], 'ad-after').
		defineSizeMapping(mapping).
		addService(googletag.pubads());
		googletag.enableServices();
		});

		googletag.cmd.push(function() {
		var mapping = googletag.sizeMapping().
		addSize([768, 0], [728, 90]).
		addSize([0, 0], [300, 250]).
		build();
		googletag.defineSlot('/6880916/Secret-Bottom-728-300', [728, 90], 'ad-bottom').
		defineSizeMapping(mapping).
		addService(googletag.pubads());
		googletag.enableServices();
		});

		googletag.cmd.push(function() {
		var mapping = googletag.sizeMapping().
		addSize([768, 0], [336, 280]).
		addSize([0, 0], [300, 250]).
		build();
		googletag.defineSlot('/6880916/Secret-Side-336-300', [336, 280], 'ad-side').
		defineSizeMapping(mapping).
		addService(googletag.pubads());
		googletag.enableServices();
		});

		</script>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php

		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
		get_template_part( 'parts/off-canvas-menu' );
		endif;
	?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>