<?php /* Template Name: LP2 */ get_header(); ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );?>
<div class="lp2top" style="background-image:url(<?php echo $src[0]; ?>)"></div>
<div class="main">
	<div class="c h">
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>