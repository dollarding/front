<?php get_header(); ?>
<?php get_template_part('top') ?>
	<div class="main">
		<div class="c h">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('text'); ?>>
				<div class="c">
					<div class="postinfo c">
						<p>פורסם ב<span><?php the_time('F j, Y'); ?></span> בקטגוריות <span><?php the_category(', ');?></span></p>
					</div>
					<div class="postshare c">
						<a target="_blank" href="http://www.facebook.com/sharer.php?m2w&s=100&p[url]=<?php echo the_permalink(); ?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 96.1 96.1" xml:space="preserve"><path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z"/></svg>
						</a>
						<a target="_blank" href="http://twitter.com/home?status=Blog+Slideshow+Post%20<?php echo the_permalink(); ?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><path d="M612 116.3c-22.5 10-46.7 16.8-72.1 19.8 25.9-15.5 45.8-40.2 55.2-69.4 -24.3 14.4-51.2 24.8-79.8 30.5 -22.9-24.4-55.5-39.7-91.6-39.7 -69.3 0-125.6 56.2-125.6 125.5 0 9.8 1.1 19.4 3.3 28.6C197.1 206.3 104.6 156.3 42.6 80.4c-10.8 18.5-17 40.1-17 63.1 0 43.6 22.2 82 55.8 104.5 -20.6-0.7-39.9-6.3-56.9-15.8v1.6c0 60.8 43.3 111.6 100.7 123.1 -10.5 2.8-21.6 4.4-33.1 4.4 -8.1 0-15.9-0.8-23.6-2.3 16 49.9 62.3 86.2 117.3 87.2 -42.9 33.7-97.1 53.7-155.9 53.7 -10.1 0-20.1-0.6-29.9-1.7 55.6 35.7 121.5 56.5 192.4 56.5 230.9 0 357.2-191.3 357.2-357.2l-0.4-16.3C573.9 163.5 595.2 141.4 612 116.3z"/></svg>
						</a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 89.6 89.6" xml:space="preserve"><path d="M4.8 22.7c0 7.5 2.5 12.9 7.4 16 4 2.6 8.7 3 11.1 3 0.6 0 1.1 0 1.4 0 0 0-0.8 5 2.9 10l-0.2 0C21 51.7 0 53 0 70.3c0 17.6 19.3 18.5 23.2 18.5 0.3 0 0.5 0 0.5 0 0 0 0.3 0 0.8 0 2.5 0 8.9-0.3 14.9-3.2C47.1 81.8 51 75.3 51 66.2c0-8.8-6-14.1-10.3-17.9 -2.7-2.3-5-4.4-5-6.3 0-2 1.7-3.5 3.8-5.4 3.4-3.1 6.7-7.5 6.7-15.8 0-7.3-0.9-12.2-6.8-15.3 0.6-0.3 2.8-0.5 3.8-0.7C46.4 4.4 51 3.9 51 1.3V0.8H28C27.8 0.8 4.8 1.7 4.8 22.7zM41.9 67.8c0.4 7-5.6 12.2-14.6 12.9 -9.2 0.7-16.7-3.5-17.2-10.5 -0.2-3.4 1.3-6.7 4.2-9.3 2.9-2.7 7-4.3 11.4-4.6 0.5 0 1-0.1 1.5-0.1C35.7 56.2 41.5 61.2 41.9 67.8zM35.9 17.9c2.3 7.9-1.1 16.2-6.6 17.8 -0.6 0.2-1.3 0.3-1.9 0.3 -5 0-9.9-5-11.7-12 -1-3.9-0.9-7.3 0.2-10.6 1.2-3.2 3.2-5.4 5.8-6.1 0.6-0.2 1.3-0.3 1.9-0.3C29.6 7 33.5 9.5 35.9 17.9zM74.6 35.2v-15h-9.5v15h-15v9.5h15v15h9.5v-15h15v-9.5H74.6z"/></svg>
						</a>
						<a target="_blank" href="http://linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 260.4 260.4" xml:space="preserve"><path d="M34.7 0.2C15.6 0.2 0 15.7 0 34.9 0 54 15.6 69.6 34.7 69.6c19.1 0 34.7-15.6 34.7-34.7C69.4 15.8 53.8 0.2 34.7 0.2zM60.7 83.5H8.7c-2.5 0-4.5 2-4.5 4.5v167.7c0 2.5 2 4.5 4.5 4.5h52.1c2.5 0 4.5-2 4.5-4.5V88C65.2 85.5 63.2 83.5 60.7 83.5zM193.9 81.6c-19.1 0-35.8 5.8-46 15.3V88c0-2.5-2-4.5-4.5-4.5H93.4c-2.5 0-4.5 2-4.5 4.5v167.7c0 2.5 2 4.5 4.5 4.5h52c2.5 0 4.5-2 4.5-4.5v-83c0-23.8 4.4-38.6 26.2-38.6 21.5 0 23.1 15.8 23.1 40v81.5c0 2.5 2 4.5 4.5 4.5h52.1c2.5 0 4.5-2 4.5-4.5v-92C260.4 125.5 252.8 81.6 193.9 81.6z"/></svg>
						</a>
						<a target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php echo the_permalink(); ?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 511.6 511.6" xml:space="preserve"><path d="M49.1 178.7c6.5 4.6 26 18.1 58.5 40.7 32.5 22.6 57.5 39.9 74.8 52.1 1.9 1.3 5.9 4.2 12.1 8.7 6.2 4.5 11.3 8.1 15.4 10.9 4.1 2.8 9 5.9 14.8 9.3 5.8 3.4 11.3 6 16.4 7.7 5.1 1.7 9.9 2.6 14.3 2.6h0.3 0.3c4.4 0 9.1-0.9 14.3-2.6 5.1-1.7 10.6-4.3 16.4-7.7 5.8-3.4 10.8-6.5 14.8-9.3 4.1-2.8 9.2-6.4 15.4-10.9 6.2-4.5 10.2-7.4 12.1-8.7 17.5-12.2 62.1-43.1 133.6-92.8 13.9-9.7 25.5-21.4 34.8-35.1 9.3-13.7 14-28.1 14-43.1 0-12.6-4.5-23.3-13.6-32.3 -9-8.9-19.7-13.4-32.1-13.4H45.7c-14.7 0-25.9 4.9-33.8 14.8C3.9 79.6 0 91.9 0 106.8c0 12 5.2 25 15.7 39C26.2 159.7 37.3 170.7 49.1 178.7zM483.1 209.3c-62.4 42.3-109.8 75.1-142.2 98.5 -10.8 8-19.6 14.2-26.4 18.7 -6.8 4.5-15.7 9-27 13.7 -11.2 4.7-21.7 7-31.4 7h-0.3 -0.3c-9.7 0-20.2-2.3-31.4-7 -11.2-4.7-20.2-9.2-27-13.7 -6.8-4.5-15.6-10.7-26.4-18.7 -25.7-18.8-73-51.7-141.9-98.5C18 202 8.4 193.8 0 184.4v226.7c0 12.6 4.5 23.3 13.4 32.3 8.9 8.9 19.7 13.4 32.3 13.4h420.3c12.6 0 23.3-4.5 32.3-13.4 8.9-8.9 13.4-19.7 13.4-32.3V184.4C503.4 193.6 493.9 201.9 483.1 209.3z"/></svg>
						</a>
						<a href="#single_comments">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><path d="M554.6 0H57.4C25.7 0 0 25.7 0 57.4v344.3C0 433.3 25.7 459 57.4 459h76.5v153L382.5 459h172.1c31.7 0 57.4-25.7 57.4-57.4V57.4C612 25.7 586.3 0 554.6 0zM535.5 382.5H363.4l-153 95.6L191.3 382.5H76.5v-306h459V382.5z"/></svg>
							<fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count>
						</a>
					</div>
				</div>
				<?php if(get_field('intro')):?>
					<div class="single_intro c">
						<?php if ( has_post_thumbnail()):?>
							<?php the_post_thumbnail('thumbnail');?>
						<?php endif; ?>
						<?php the_field('intro');?>
					</div>
				<?php endif; ?>
				
				<?php if (get_field('gallery')):?>
				<div class="single_gallery c">
					<div class="single_gallery_slider">
						<?php while (the_repeater_field('gallery')):?>
							<figure>
								<?php if (get_sub_field('image')):?>
									<?php $image = wp_get_attachment_image_src(get_sub_field('image'),'large');?>
									<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'),'thumbnail');?>
									<a class="pop-image" rel="gal1" href="<?php echo $image[0];?>" style="background-image:url('<?php echo $thumb[0];?>')"></a>
								<?php endif; ?>
								<?php if (get_sub_field('youtube')):?>
									<a class="pop-video" rel="gal1" href="http://www.youtube.com/watch?v=<?php the_sub_field('youtube');?>" style="background-image:url('http://img.youtube.com/vi/<?php the_sub_field('youtube');?>/hqdefault.jpg')">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 232.2 232.2" xml:space="preserve"><path d="M203.8 99.6L49.3 2.3c-4.6-2.7-10.2-2.3-14.5-2.3 -17.1 0-17.1 13.2-17.1 16.6v198.9c0 2.8-0.1 16.6 17.1 16.6 4.3 0 10 0.5 14.5-2.3l154.5-97.3c12.7-7.5 10.5-16.4 10.5-16.4S216.5 107.2 203.8 99.6z"/></svg>
									</a>
								<?php endif; ?>
							</figure>
						<?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
				<?php the_content();?>
				<?php $posts = get_field('related');if( $posts ): ?>
					<div class="related c">
						<h3>עוד פוסטים שיעניינו אותך</h3>
						<?php foreach( $posts as $p ):?>
						<?php $psrc = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), thimbnail );?>
						<figure>
							<a href="<?php echo get_permalink( $p->ID ); ?>">
								<span style="background-image:url(<?php echo $psrc[0]; ?>)"></span>
								<h4><?php echo get_the_title( $p->ID ); ?></h4>
							</a>
						</figure>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				 var js, fjs = d.getElementsByTagName(s)[0];
				 if (d.getElementById(id)) return;
				 js = d.createElement(s); js.id = id;
				 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=165519873484485&version=v2.0";
				 fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div id="single_comments" href="<?php the_permalink(); ?>" class="fb-comments" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
			</article>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
