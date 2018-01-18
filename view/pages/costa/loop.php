<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php $src=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );?>
	<figure>
		<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('c'); ?>>
			<div class="article_thumb">
				<span style="background-image:url(<?php echo $src[0]; ?>)"></span>
			</div>
			<div class="article_text c">
				<h2><?php the_title(); ?></h2>
				<time><?php the_time('F j, Y'); ?></time>
				<p><?php html5wp_excerpt('html5wp_index');?></p>
				<div class="article_info c">
					<span class="comments">
						<fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><path d="M191.3 344.3H459v-76.5H153v76.5H191.3L191.3 344.3zM459 153H153v76.5h306V153zM612 76.5V38.3C612 17.1 594.9 0 573.8 0h-76.5l0 0h-459C17.1 0 0 17.1 0 38.3V459c0 21.1 17.1 38.3 38.3 38.3h286.9L497.3 612V497.3h76.5c21.1 0 38.3-17.1 38.3-38.2v-38.2l0 0V76.5L612 76.5zM535.5 420.8H459l0 0h-38.2v57.4l-95.6-57.4H153l0 0H76.5V76.5h459V420.8z"/></svg>
					</span>
					<span class="readmore">
						<span>קרא בהרחבה</span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 493.6 493.6" xml:space="preserve"><path d="M487.3 226c0-17.4-14-31.5-31.5-31.5H194.5L305.4 83.6c12.2-12.2 12.2-32.2 0-44.7L275.6 9.2c-12.2-12.2-32.2-12.2-44.7 0L15.6 224.5c-6.1 6.1-9.3 14.2-9.3 22.3 0 8 3.1 16.1 9.3 22.3l215.3 215.3c12.2 12.2 32.2 12.2 44.7 0l29.8-29.8c12.2-12.2 12.2-32.2 0-44.7L194.5 299.5h261.1c17.4 0 31.5-14.2 31.5-31.5L487.3 226z"/></svg>
					</span>
				</div>
			</div>
		</a>
	</figure>
<?php endwhile; ?>
<?php endif; ?>