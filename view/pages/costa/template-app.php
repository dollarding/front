<?php /* Template Name: Application */ get_header(); ?>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );?>
	<div class="appTop" style="background-image:url(<?php echo $src[0]; ?>)">
		<div class="c h">
			<div class="c appSlider">
				<figure>
					<div class="appScreen">
						<?php if(get_field('benefits')):$delay = .5;?>
						<div class="appScreenBenefits">
							<?php while(the_repeater_field('benefits')):?>
							<span class="wow bounceInUp" data-wow-delay="<?php echo $delay ; ?>s"><?php the_sub_field('benefit');?></span>
							<?php $delay=$delay+.3; endwhile; ?>
						</div>
						<?php endif; ?>
						<img alt="<?php echo get_post_meta( $post->ID , '_yoast_wpseo_title' , true) ;  ?>" src="<?php the_field('screen');?>">
					</div>
					<div class="appContent">
						<h1><?php echo get_post_meta( $post->ID , '_yoast_wpseo_title' , true) ;  ?></h1>
						<p><?php the_field('text');?></p>
						<img src="<?php the_field('free');?>" class="free-circle wow tada" />
						<div class="hello-links c">
							<div class="app_icons c">
								<a href="<?php the_field('appstore','option');?>" class="app_icon_appstore">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><path d="M395.7 272c-0.6-64.8 52.9-95.9 55.3-97.5 -30.1-44-76.9-50-93.6-50.7 -39.9-4-77.8 23.5-98 23.5 -20.2 0-51.4-22.9-84.5-22.3 -43.5 0.6-83.5 25.3-105.9 64.2 -45.2 78.4-11.6 194.4 32.4 258 21.5 31.1 47.1 66 80.8 64.8 32.4-1.3 44.7-21 83.9-21 39.2 0 50.2 21 84.5 20.3 34.9-0.6 57-31.7 78.3-62.9 24.7-36.1 34.9-71 35.5-72.8C463.7 375.3 396.4 349.5 395.7 272zM331.3 81.8C349.1 60.1 361.2 30 357.9 0c-25.7 1-56.9 17.1-75.4 38.8 -16.6 19.2-31.1 49.8-27.2 79.2C284.1 120.2 313.4 103.4 331.3 81.8z"/></svg>
									<span>אייפון</span>
								</a>
								<a href="<?php the_field('googleplay','option');?>" class="app_icon_android">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 505.1 505.1" xml:space="preserve"><path d="M68.5 164.7h-1.3c-16.6 0-30.1 13.6-30.1 30.1v131.1c0 16.6 13.5 30.1 30.1 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C98.7 178.3 85.1 164.7 68.5 164.7zM113.1 376.5c0 15.2 12.4 27.6 27.7 27.6h29.6v70.8c0 16.6 13.6 30.2 30.1 30.2h1.3c16.6 0 30.2-13.5 30.2-30.2v-70.8h41.3v70.8c0 16.6 13.6 30.2 30.2 30.2h1.3c16.6 0 30.1-13.5 30.1-30.2v-70.8h29.6c15.2 0 27.7-12.4 27.7-27.6V169.5H113.1V376.5zM322 44l23.5-36.3c1.5-2.3 0.8-5.4-1.5-6.9 -2.3-1.5-5.4-0.9-6.9 1.5l-24.4 37.5c-18.3-7.5-38.7-11.7-60.2-11.7 -21.6 0-41.9 4.2-60.2 11.7l-24.3-37.5c-1.5-2.4-4.6-3-6.9-1.5 -2.3 1.5-3 4.6-1.5 6.9l23.5 36.3c-42.4 20.8-71 59.9-71 104.8 0 2.8 0.2 5.5 0.4 8.2h280.1c0.2-2.7 0.4-5.4 0.4-8.2C393 103.9 364.4 64.8 322 44zM187.7 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4S195.1 108.9 187.7 108.9zM317.5 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4C331 102.9 325 108.9 317.5 108.9zM437.9 164.7h-1.3c-16.6 0-30.2 13.6-30.2 30.1v131.1c0 16.6 13.6 30.1 30.2 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C468 178.3 454.5 164.7 437.9 164.7z"/></svg>
									<span>אנדרואיד</span>
								</a>
							</div>
							<div class="app_biz">
								<a href="<?php echo get_permalink('16'); ?>">בעל עסק?</a>
							</div>
							<div class="app_video">
								<a href="<?php the_field('video','option');?>">
									<svg xml:space="preserve" viewBox="0 0 87.9 87.9" y="0" x="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
										<path d="M43.9 0C19.7 0 0 19.7 0 43.9c0 24.2 19.7 43.9 43.9 43.9 24.2 0 43.9-19.7 43.9-43.9C87.9 19.7 68.2 0 43.9 0zM43.9 79.9c-19.8 0-35.9-16.1-35.9-35.9 0-19.8 16.1-35.9 35.9-35.9 19.8 0 35.9 16.1 35.9 35.9C79.9 63.8 63.7 79.9 43.9 79.9zM37.9 55.9L55.9 43.9 37.9 31.9V55.9z">
									</svg>
									<b>הסרטון של קופיט</b>
								</a>
							</div>
						</div>
					</div>
				</figure>
				<figure>
					<div class="appScreen">
						<div class="appScreenBenefits">
							<span>הכל בכף ידכם!</span>
							<span>ללא כרטיס אשראי!</span>
							<span>ללא התחייבות!</span>
							<span>אוטומטי לחלוטין!</span>
						</div>
						<img alt="" src="img/appScreen2.png">
					</div>
					<div class="appContent">
						<h2>כשאתם מורידים את האפליקציה, מהצד השני הרבה בעלי עסקים מכינים לכם הטבות טובות במיוחד!</h2>
						<div class="hello-links">
							<div class="hello-apps">
								<a href="#" class="wow rubberBand" data-wow-delay="0.5s">
									<span class="a"><i class="a">b</i></span>
									<b>אייפון</b>
								</a>
								<a href="#" class="wow rubberBand" data-wow-delay="0.9s">
									<span class="a"><i class="a">c</i></span>
									<b>אנדרואיד</b>
								</a>
							</div>
							<a class="hello-biz" href="#">בעל עסק?<i>d</i></a>
						</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
<?php get_footer(); ?>