<?php
	$taxonomy = 'benefitype';
	$term_args=array(
		'hide_empty' => false,
		'orderby' => 'name',
		'order' => 'ASC'
	);
	$tax_terms = get_terms($taxonomy,$term_args);
?>
<script>
	$(document).ready(function(){
		$(".items-nav").find("a[href='"+window.location.href+"']").each(function(){$(this).parent().addClass("active")});
	});
</script>
<div class="items-nav">
	<figure <?php if(is_front_page()):?>class="active"<?php endif; ?>>
		<a href="<?php echo home_url(); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><path d="M306 87.7c-120.4 0-218.3 97.9-218.3 218.3S185.6 524.3 306 524.3s218.3-97.9 218.3-218.3S426.4 87.7 306 87.7zM420.8 328.7H306c-12.5 0-22.7-10.1-22.7-22.7V166.3c0-12.5 10.1-22.7 22.7-22.7 12.5 0 22.7 10.1 22.7 22.7v117h92.1c12.5 0 22.7 10.1 22.7 22.7C443.5 318.5 433.3 328.7 420.8 328.7zM306 0C137.3 0 0 137.3 0 306 0 474.7 137.3 612 306 612s306-137.3 306-306C612 137.3 474.7 0 306 0zM306 564.9C163.2 564.9 47.1 448.8 47.1 306 47.1 163.2 163.2 47.1 306 47.1c142.8 0 258.9 116.2 258.9 258.9C564.9 448.8 448.8 564.9 306 564.9z"/></svg>
			<span>הטבות אחרונות</span>
		</a>
	</figure>
	<figure>
		<a href="<?php echo home_url(); ?>/benefits/">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 50 50" xml:space="preserve"><path d="M48.5 27.6L26.7 2c-2.2-2.6-5.9-2.7-8.2-0.3L1.7 18.5c-2.4 2.4-2.2 6.1 0.3 8.2l25.6 21.8c2.6 2.2 6.6 2 8.9-0.4l11.6-11.6C50.5 34.2 50.7 30.2 48.5 27.6zM34.7 39.2c-2.5 0-4.6-2-4.6-4.6 0-2.5 2-4.6 4.6-4.6 2.5 0 4.6 2 4.6 4.6C39.2 37.2 37.2 39.2 34.7 39.2z"/></svg>
			<span>כל ההטבות</span>
		</a>
	</figure>
	<?php foreach ($tax_terms as $tax_term) {
		echo '<figure><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '">' . file_get_contents(get_field('icon',$tax_term)) . '<span>' . $tax_term->name.'</span></a></figure>';
	}?>
</div>