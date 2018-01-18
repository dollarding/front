<?php get_header(); ?>
	<div class="top">
		<div class="c h">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
		</div>
	</div>
	<div class="main">
		<div class="c h">
			<article>
				<div class="loop c">
					<?php get_template_part('loop'); ?>
				</div>
				<?php get_template_part('pagination'); ?>
			</article>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>