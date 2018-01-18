<?php /* Template Name: LP1 */ get_header(); ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );?>
<div class="lptop" style="background-image:url(<?php echo $src[0]; ?>)">
	<div class="c h">
		<h1><?php the_title(); ?></h1>
		<?php if(get_field('slogan')):?><p><?php the_field('slogan');?></p><?php endif; ?>
	</div>
</div>
<div class="main">
	<div class="c h">
		<?php if(get_field('popups')):$counter = 0;$delay = .5;?>
		<div class="lp-popups c">
		<?php while(the_repeater_field('popups')):?>
			<figure class="c wow rollIn" data-wow-delay="<?php echo $delay ; ?>s">
				<a class="c pop" href="#popup<?php echo $counter;?>">
					<h2><?php the_sub_field('popuptitle');?></h2>
					<img alt="<?php the_sub_field('popuptitle');?>" src="<?php the_sub_field('popupimg');?>"/>
					<p><?php the_sub_field('popupdesc');?></p>
					<span>קרא עוד <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><polygon points="612 286.9 325.1 286.9 325.1 0.3 286.9 0.3 286.9 286.9 0 286.9 0 325.1 286.9 325.1 286.9 611.7 325.1 611.7 325.1 325.1 612 325.1 "/></svg></span>
				</a>
				<div id="popup<?php echo $counter;?>" class="white-popup mfp-hide">
					<div class="popUpTitle c">
						<h3><?php the_sub_field('popuptitle');?></h3>
					</div>
					<div class="text c">
						<?php the_sub_field('popupcontent');?>
					</div>
	          		<a class="popup-modal-x popup-modal-dismiss x">
	          			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><polygon points="612 36 576.5 0.6 306 270.6 35.5 0.6 0 36 270.5 306 0 576 35.5 611.4 306 341.4 576.5 611.4 612 576 341.5 306 "/></svg>
	          		</a>
	          		<div class="c packageform">
	          			<b>לפרטים והזמנת החבילה, אנא מלאו את הפרטים מטה ואנו נעמוד איתכם בקשר בהקדם</b>
	          			<?php echo do_shortcode('[contact-form-7 id="316" title="Services"]'); ?>
	          		</div>
				</div>
			</figure>
		<?php $counter++; $delay=$delay+.2; endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>