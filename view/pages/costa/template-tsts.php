<?php /* Template Name: Testimonials */ get_header(); ?>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );?>
	<div class="myTop" data-parallax="scroll" data-image-src="<?php echo $src[0]; ?>">
		<div class="c h">
			<h1><?php echo get_post_meta($post->ID, '_yoast_wpseo_title', true);?></h1>
		</div>
	</div>
	
	<?php if(get_field('testimonials')):?>
	<div class="tests">
		<div class="c h">
			<?php while(the_repeater_field('testimonials')):?>
			<figure>
				<p><?php the_sub_field('testimonial');?></p>
				<span>
					<img alt="<?php the_sub_field('name');?>" src="<?php the_sub_field('pic');?>">
					<b><?php the_sub_field('name');?></b>
					<strong><?php the_sub_field('job');?></strong>
				</span>
			</figure>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>

<?php get_footer(); ?>