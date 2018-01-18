<?php get_header(); ?>
<?php get_template_part('top') ?>
	<div class="main">
		<div class="c h">
			<article>
				<div class="loop">
					<?php get_template_part('loop'); ?>
				</div>
				<?php get_template_part('pagination'); ?>
			</article>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>