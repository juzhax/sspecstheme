<?php
/*
Template Name: Google CSE
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div class="row">
	<div class="small-12 large-12 columns">

		<header>
			<h1 class="entry-title">Search Results</h1>
		</header>
		
		<gcse:searchbox></gcse:searchbox>
		<gcse:searchresults></gcse:searchresults>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php // comments_template(); ?>

	</div>
</div>

<?php get_footer(); ?>
