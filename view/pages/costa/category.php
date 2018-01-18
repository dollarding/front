<?php get_header(); ?>
<?php get_template_part('top') ?>
	<div class="main">
		<div class="c h">
			<div class="loop c">
			<?php get_template_part('loop'); ?>
			</div>
			<?php get_template_part('pagination'); ?>
		</div>
	</div>
<?php get_footer(); ?>