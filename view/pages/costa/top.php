	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.4&appId=253103141458673";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<?php $queried_object = get_queried_object();$taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id;?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );?>
<div class="top" style="background-image:url(<?php if(get_field('background', $taxonomy . '_' . $term_id)):?><?php the_field('background', $taxonomy . '_' . $term_id);?><?php elseif ( has_post_thumbnail()):?><?php echo $src[0]; ?><?php else:?><?php the_field('defaultbg','option');?><?php endif; ?>)">
	<div class="c h">
		<?php if(is_archive()):?>
		<?php if(is_category()) :?>	
			<h1><?php single_cat_title(); ?></h1>
		<?php elseif(is_tag()) :?>	
			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
		<?php elseif(is_tax()) :?>	
			<h1><?php echo single_tag_title('', false); ?><?php if ( $paged >= 2 || $page >= 2 ) echo ' | עמוד ' . sprintf( __( '%s'), max( $paged, $page ) ); ?></h1>
		<?php else:?>
			<h1><?php post_type_archive_title(); ?></h1>
		<?php endif; ?>
		<?php elseif(is_home() && get_option('page_for_posts') ) :?>
			 <?php $blog_page_id = get_option('page_for_posts'); echo '<h1>'.get_page($blog_page_id)->post_title.'</h1>';?>
		<?php elseif(is_404()) :?>
			<h1><?php _e( 'העמוד לא נמצא', 'html5blank' ); ?></h1>
		<?php elseif(is_search()) :?>
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		<?php else:?>
			<h1><?php the_title(); ?></h1>
		<?php endif; ?>
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
	</div>
</div>
