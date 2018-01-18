<?php get_header(); ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(281), full );?>
<?php 
    if (isset($wp_query->query_vars['cid'])) {
    $cid = urldecode($wp_query->query_vars['cid']);
    }
?>

<div class="expired-top" style="background-image:url('<?php echo $src[0];?>')">
	<div class="c h">
		<h1>מצטערים</h1>
		<h2>העמוד כבר לא איתנו</h2>
	</div>
</div>

<div class="main">
	<div class="c h text aligncenter">
		<h2>הטבות אחרות שבוודאי תאהבו</h2>
	</div>
    <div class="c h">
        <div id="post-<?php the_ID(); ?>" <?php post_class('c'); ?>>
			<?php get_template_part('benefit/nav'); ?>
			<?php get_template_part('benefit/items'); ?>
        </div>
     </div>
</div>
<?php get_footer(); ?>