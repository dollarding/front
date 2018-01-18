<?php get_header(); ?>
<?php get_template_part('top') ?>
	<div class="main">
		<div class="c h">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
