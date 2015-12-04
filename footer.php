<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<div class="row">
		<div class="small-12 columns">
		<div class="ssBottomBar contain-to-grid">
			<div id="ssBbInner" class="autoCenter">
				<div class="bbBody">
					<a href="//secretspecs.com/about-us/">About Us</a>
					<span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="//secretspecs.com/privacy/">Privacy</a>
					<span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="//secretspecs.com/contact-us/">Contact Us</a>
				</div>
				<div class="bbBody">
					Copyright © 2015 
					<a href="/">Secret Specs</a>
				</div>
			</div>
		</div>
		</div>
		</div>
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
