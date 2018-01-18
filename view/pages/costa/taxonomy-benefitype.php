<?php get_header(); ?>
<?php $queried_object = get_queried_object();$taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id;?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );?>
<div class="tax_top" style="background-image:url(<?php if(get_field('background', $taxonomy . '_' . $term_id)):?><?php the_field('background', $taxonomy . '_' . $term_id);?><?php elseif ( has_post_thumbnail()):?><?php echo $src[0]; ?><?php else:?><?php the_field('defaultbg','option');?><?php endif; ?>)">
	<h1><?php echo single_tag_title('', false); ?><?php if ( $paged >= 2 || $page >= 2 ) echo ' | עמוד ' . sprintf( __( '%s'), max( $paged, $page ) ); ?></h1>
</div>
<div class="navbar">
	<a class="sb-toggle-left">
		<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 54 45"><path d="M49.2 0L38 0C35.4 0 31.7 1.5 29.8 3.4L11 22.5C9.1 24.4 9.1 27.5 11 29.4L25 43.6C26.9 45.4 29.9 45.4 31.8 43.6L50.6 24.5C52.5 22.6 54 18.9 54 16.2L54 4.9C54 2.2 51.8 0 49.2 0ZM42.8 16.2C40.2 16.2 38 14 38 11.3 38 8.7 40.2 6.5 42.8 6.5 45.5 6.5 47.6 8.7 47.6 11.3 47.6 14 45.5 16.2 42.8 16.2ZM3.9 27.1L21.1 44.4C19.2 45.4 16.9 45.1 15.4 43.6L1.4 29.4C-0.5 27.5-0.5 24.4 1.4 22.5L20.2 3.4C22.1 1.5 25.8 0 28.4 0L3.9 24.8C3.3 25.4 3.3 26.4 3.9 27.1Z"/></svg>
	</a>
	<h1><?php echo single_tag_title('', false); ?><?php if ( $paged >= 2 || $page >= 2 ) echo ' | עמוד ' . sprintf( __( '%s'), max( $paged, $page ) ); ?></h1>
	<a class="navbar_location">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 97.7 97.7" xml:space="preserve"><path d="M48.9 0C29 0 12.9 16.1 12.9 36c0 5.2 1.1 10.1 3.1 14.7 9 19.7 26.2 40.5 31.3 46.4 0.4 0.4 0.9 0.7 1.5 0.7s1.1-0.3 1.5-0.7c5.1-5.9 22.3-26.7 31.3-46.4 2.1-4.6 3.1-9.5 3.1-14.7C84.8 16.1 68.7 0 48.9 0zM48.9 54.7c-10.3 0-18.7-8.4-18.7-18.7 0-10.3 8.4-18.7 18.7-18.7s18.7 8.4 18.7 18.7C67.5 46.3 59.2 54.7 48.9 54.7z"/></svg>
	</a>
</div>

	<div class="main">
		<div class="c h">
			<?php $queried_object = get_queried_object();
                $taxonomy = $queried_object->taxonomy;
                $term_id = $queried_object->term_id;
		    if (isset($wp_query->query_vars['bid'])) {
		    $bid = urldecode($wp_query->query_vars['bid']);
		    }
  			 ?>
			<!--<div class="category_intro c">
				<div class="category_icon">
					<?php echo file_get_contents(get_field('icon', $taxonomy . '_' . $term_id));?>
				</div>
				<div class="category_text">
					<?php the_field('desc', $taxonomy . '_' . $term_id);?>
				</div>
			</div>-->
			<script type="text/javascript">
				//<![CDATA[
					$('#owl-coupons').load(function() { // makes sure the whole site is loaded
						$('#status').fadeOut(); // will first fade out the loading animation
						$('#preloader').delay(1).fadeOut('slow'); // will fade out the white DIV that covers the website.
						$('body').delay(1).css({'overflow':'visible'});
					})
				//]]>
			</script>
			<?php get_template_part('benefit/nav'); ?>

			<div id="owl-coupons" class="items">
			</div>
			<script id="homeCarouselBenefits" type="text/x-handlebars-template">
			{{#each this}}
				<?php get_template_part('benefit/item'); ?>
			{{/each}}
        </script>
		</div>
	</div>
<!-- НАЧАЛО -->


<?php
$term = get_term( $term_id, $taxonomy );
$cid = get_field('id', $term);
?>

<script>

   jQuery(document).ready(function() {
        /* get current category */
        var CID='<?=$cid?>';
        var listCouponUrl = 'http://admin.coupit.co.il/coupons/categories/'+CID+'';
        console.log(listCouponUrl);
        var jsonListBenefits;
        jQuery.ajax({
            url: listCouponUrl,
            dataType: 'json',
            async: false,
            success: function(data) {
                jsonListBenefits = data;
            }
        });

        var couponsArr=[];

        /* create an array of benefits */
        jQuery.each(jsonListBenefits.category.coupons, function( key, val ) {
            couponUrl = 'http://admin.coupit.co.il/coupons/'+val+'';
            jQuery.ajax({
                url: couponUrl,
                dataType: 'json',
                async: false,
                success: function(couponData) {
                    if(couponData.coupon){
                        coupon = couponData.coupon;
                        coupon.dateToFormatted = moment(coupon.dateTo).format('DD/MM/YYYY');
                        today = new Date();
                        today = moment(today).format();
                        dateTo = moment(coupon.dateTo).format();
                        coupon.webUrl = "http://"+location.hostname + "/benefit/" + coupon._id;
                        if((moment(today).isBefore(dateTo) || moment(today).isSame(dateTo)) && coupon.status == 'onAir' && coupon.generalBonus === true){
                            couponsArr.push(coupon);
                        }
                   }
                }
            });

        });

   		 console.log('llego aqui >>',couponsArr.lenght);

        /* display benefits in the page via handlebars js */
        templateScript = jQuery('#homeCarouselBenefits').html();
        template = Handlebars.compile(templateScript);
        jQuery('#owl-coupons').append(template(couponsArr));

        var owl = jQuery(".owl-carousel");
        owl.owlCarousel({
                stagePadding:40,
                ltr:true,
                responsive: true,
                responsive:{0:{items:1},360:{items:1},600:{items:3},800:{items:4}},
                items : 4
        });
        jQuery(".nextSl").click(function(){
                owl.trigger('next.owl');
        });
        jQuery(".prevSl").click(function(){
                owl.trigger('prev.owl');
        });

        jQuery('.popup-modal').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#username',
                closeOnBgClick:true,
                callbacks:{open: function() {
                    jQuery('#popUpLicence').change(function() {
                        if(jQuery(this).is(":checked")) {
                            jQuery('.popup-share').addClass('enabled')
                        }
                        else(
                            jQuery('.popup-share').removeClass('enabled')
                        )
                    }),
                    jQuery('.popup_buy a').click(function () {
                            jQuery(this).next('.popup_buy_window').css('display','inline-block')
                        }),
                        jQuery('.popup_buy_window a').click(function () {
                                jQuery(this).parent().hide()
                        })
                        ;
                }}
        });
			$(document).on('click', '.popup-modal-x', function (e) {
				e.preventDefault();
				$(".mfp-wrap").addClass('mfp-removing');
		    	setTimeout(function(){
		       $.magnificPopup.close();
		     }, 500);
			});

       jQuery('.items').mixItUp();

});

</script>

<!-- конец -->

<?php get_footer(); ?>
