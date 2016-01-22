<?php
/*
Template Name: SS Front
*/
get_header(); ?>

<header id="front-hero">
	<div class="row">
		<div class="small-12 medium-7 columns">
			<h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="subheader">Search for Phone and Tablet Model</h4>
		</div>
		<div class="medium-6 columns end">

			<form id="search-model" action="/search/" method="get">
			<div class="row">
			<div class="large-12 columns text-center">
			<div class="row collapse">
			<!--
			<div class="small-12 columns navbar-search">
				<form action="/search/" onsubmit="location.href='/search/?q=' + document.getElementById('search-text').value; return false;">
				<input id="search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
				<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('search-text').value;"><i class="fa fa-search"></i></div>
				</form>
			</div>
			-->
			<div class="small-8 columns">
				<input id="search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Model Name">
			</div>
			<div class="small-4 columns">
				<button type="submit" class="button postfix radius" onclick="location.href='/search/?q=' + document.getElementById('search-text').value;"><i class="fa fa-search"></i> Search</button>
			</div>
			</div>	
			</div>
			</div>
			</form>
		</div>
	</div>

</header>

	<div class="row">
		<?php get_template_part( 'parts/check-if-sidebar-exist' ); ?>
		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
