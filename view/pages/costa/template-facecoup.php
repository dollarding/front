<?php /* Template Name: Facecoup */ get_header(); ?>
<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full);?>
<div class="facecoup" style="background-image:url(<?php echo $src[0];?>)">
	<div class="facecoup_logo c">
		<img alt="facecoup logo" src="<?php the_field('logo');?>" />
	</div>
	<div class="facecoup-text">
		<div class="c h text aligncenter">
			<?php the_content()?>
		</div>
	</div>
	<div class="facecoup_posts">
		<div class="c h">
			<?php while(the_repeater_field('facecoup_posts')):?>
			<figure>
				<div class="facecoup_post">
					<div class="facecoup_post_header">
						<img alt="facecoup post header" src="<?php the_sub_field('post_header');?>">
					</div>
					<div class="facecoup_post_body">
						<img alt="" src="<?php the_sub_field('post_photo');?>">
						<span><?php the_sub_field('post_text');?></span>
					</div>
					<div class="facecoup_post_footer">
						<img alt="facecoup post footer" src="<?php the_sub_field('post_footer');?>">
					</div>
				</div>
			</figure>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="facecoup_buttons">
		<div class="c h">
			<?php $count=1;?>
			<?php while(the_repeater_field('facecoup_packs')):?>
			<figure>
				<a class="pop" href="#pack<?php echo $count;?>">
					<span class="facecoup_icon" style="background:<?php the_sub_field('packbg');?>">
						<?php echo file_get_contents(get_sub_field('facecoup_icon')); ?>
					</span>
					<h2><?php the_sub_field('package_name');?></h2>
				</a>
				<div class="white-popup mfp-hide" id="pack<?php echo $count;?>">
					<div class="packpoptitle" style="background:<?php the_sub_field('packbg');?>">
						<h2>
							<?php echo file_get_contents(get_sub_field('facecoup_icon')); ?>
							<span><?php the_sub_field('package_name');?></span>
						</h2>
						<a class="x">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 31.8 31.8" xml:space="preserve"><path d="M30.9 9.3c0.6-0.5 0.9-1.3 0.9-2 0-0.8-0.3-1.5-0.9-2L27.1 1.5c-0.5-0.5-1.3-0.8-2-0.8 -0.7 0-1.5 0.3-2 0.9l-7.2 7.4L8.9 1.6C8.3 1 7.5 0.6 6.7 0.6 5.9 0.6 5.1 0.9 4.6 1.5l-3.7 3.6C0.3 5.6 0 6.3 0 7.1c0 0.8 0.3 1.5 0.9 2l7.7 7.4 -6.9 7c-1 1.1-1.1 2.8-0.1 3.9l2.7 2.9c0.5 0.6 1.2 0.9 2 0.9 0.8 0 1.5-0.2 2-0.8l7.5-7 7.3 7c0.5 0.5 1.3 0.8 2 0.8 0.8 0 1.5-0.3 2-0.9l2.7-2.9c1-1.1 1-2.8 0-3.9l-6.7-7L30.9 9.3z"/></svg>
						</a>
					</div>
					<div class="packpoptext c">
						<?php the_sub_field('package_text');?>
					</div>
					<div class="packageform c">
						<b><?php the_sub_field('facecoup_action');?></b>
						<?php the_sub_field('facecoup_cf');?>
					</div>
				</div>
			</figure>
			<?php $count++;?>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="c h text aligncenter">
		<p>בכפוף ל<a href="/about/terms/">תנאי השירות</a></p>
	</div>
</div>
<?php get_footer(); ?>