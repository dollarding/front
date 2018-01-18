<?php /* Template Name: About */ get_header(); ?>
	<div class="aboutTop">
		<div class="c h">
			<div class="aboutVideo">
				<a href="<?php the_field('video','option');?>" >
					<span class="a">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 163.9 163.9" xml:space="preserve"><path d="M34.9 3.6C20.1-4.9 8.1 2.1 8.1 19.1v125.6c0 17 12 24 26.8 15.5L144.7 97.3c14.8-8.5 14.8-22.2 0-30.7L34.9 3.6z"/></svg>
					</span>
					<img alt="וידאו <?php the_title(); ?>" src="<?php the_field('poster'); ?>">
				</a>
			</div>
			<div class="aboutIntro">
				<h1><?php echo get_post_meta( $post->ID , '_yoast_wpseo_title' , true) ;  ?></h1>
				<p><?php the_field('intro')?></p>
				<div class="hello-apps black app_icons">
					<a href="<?php the_field('appstore','option');?>" class="app_icon_appstore">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><path d="M395.7 272c-0.6-64.8 52.9-95.9 55.3-97.5 -30.1-44-76.9-50-93.6-50.7 -39.9-4-77.8 23.5-98 23.5 -20.2 0-51.4-22.9-84.5-22.3 -43.5 0.6-83.5 25.3-105.9 64.2 -45.2 78.4-11.6 194.4 32.4 258 21.5 31.1 47.1 66 80.8 64.8 32.4-1.3 44.7-21 83.9-21 39.2 0 50.2 21 84.5 20.3 34.9-0.6 57-31.7 78.3-62.9 24.7-36.1 34.9-71 35.5-72.8C463.7 375.3 396.4 349.5 395.7 272zM331.3 81.8C349.1 60.1 361.2 30 357.9 0c-25.7 1-56.9 17.1-75.4 38.8 -16.6 19.2-31.1 49.8-27.2 79.2C284.1 120.2 313.4 103.4 331.3 81.8z"/></svg>
						<span>אייפון</span>
					</a>
					<a href="<?php the_field('googleplay','option');?>" class="app_icon_android">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 505.1 505.1" xml:space="preserve"><path d="M68.5 164.7h-1.3c-16.6 0-30.1 13.6-30.1 30.1v131.1c0 16.6 13.5 30.1 30.1 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C98.7 178.3 85.1 164.7 68.5 164.7zM113.1 376.5c0 15.2 12.4 27.6 27.7 27.6h29.6v70.8c0 16.6 13.6 30.2 30.1 30.2h1.3c16.6 0 30.2-13.5 30.2-30.2v-70.8h41.3v70.8c0 16.6 13.6 30.2 30.2 30.2h1.3c16.6 0 30.1-13.5 30.1-30.2v-70.8h29.6c15.2 0 27.7-12.4 27.7-27.6V169.5H113.1V376.5zM322 44l23.5-36.3c1.5-2.3 0.8-5.4-1.5-6.9 -2.3-1.5-5.4-0.9-6.9 1.5l-24.4 37.5c-18.3-7.5-38.7-11.7-60.2-11.7 -21.6 0-41.9 4.2-60.2 11.7l-24.3-37.5c-1.5-2.4-4.6-3-6.9-1.5 -2.3 1.5-3 4.6-1.5 6.9l23.5 36.3c-42.4 20.8-71 59.9-71 104.8 0 2.8 0.2 5.5 0.4 8.2h280.1c0.2-2.7 0.4-5.4 0.4-8.2C393 103.9 364.4 64.8 322 44zM187.7 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4S195.1 108.9 187.7 108.9zM317.5 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4C331 102.9 325 108.9 317.5 108.9zM437.9 164.7h-1.3c-16.6 0-30.2 13.6-30.2 30.1v131.1c0 16.6 13.6 30.1 30.2 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C468 178.3 454.5 164.7 437.9 164.7z"/></svg>
						<span>אנדרואיד</span>
					</a>
				</div>
				<img alt="חודש חינם" src="<?php the_field('free',16);?>" class="freemonth" />
			</div>
		</div>
	</div>

	<div class="main">
		<div class="c h">
			<?php if(get_field('stuff')):$delay = .5;?>
			<?php while(the_repeater_field('stuff')):?>
			<h2><?php the_sub_field('title');?></h2>
			<div class="about_people c">
				<?php while(the_repeater_field('people')):?>
				<figure class="wow flipInX" data-wow-delay="<?php echo $delay ; ?>s">
					<div>
						<div class="about_people_title c">
							<div class="about_people_title_photo">
								<img alt="<?php the_sub_field('name');?>" src="<?php the_sub_field('pic');?>">
							</div>
							<div class="about_people_title_text">
								<h3><?php the_sub_field('name');?></h3>
								<span><?php the_sub_field('job');?></span>
							</div>
						</div>
						<?php if(get_sub_field('desc')):?><p><?php the_sub_field('desc');?></p><?php endif; ?>
					</div>
				</figure>
				<?php $delay=$delay+.2; ?>
				<?php endwhile; ?>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
