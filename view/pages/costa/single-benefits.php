<?php get_header(); ?>
<?php get_template_part('top') ?>
	<div class="main">
		<div class="c h">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<?php the_content(); // Dynamic Content ?>
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
				<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				 var js, fjs = d.getElementsByTagName(s)[0];
				 if (d.getElementById(id)) return;
				 js = d.createElement(s); js.id = id;
				 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=165519873484485&version=v2.0";
				 fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div href="<?php the_permalink(); ?>" class="fb-comments" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

				<?php comments_template(); ?>
			</article>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
