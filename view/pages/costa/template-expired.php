<?php /* Template Name: Expired */ get_header(); ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );?>
<?php 
    if (isset($wp_query->query_vars['cid'])) {
    $cid = urldecode($wp_query->query_vars['cid']);
    }
?>

<div class="expired-top" style="background-image:url('<?php echo $src[0];?>')">
	<div class="c h">
		<?php the_content(); ?>
	</div>
</div>
<div class="main">
	<div class="c h text aligncenter">
		<h2>הטבות אחרות שבוודאי תאהבו</h2>
	</div>
  
    <div class="c h">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('benefit/items'); ?>
            <?php get_template_part('benefit/nav'); ?>
        </div>
	</div>
</div>	

<script>
        jQuery(document).ready(function() {
                var CID='<?=$cid?>';
                var listCouponUrl = 'http://admin.coupit.co.il/coupons?category='+CID+'&per_page=12';
	$.getJSON(listCouponUrl, function(data) {
            var coupons = data.coupons.coupons;
		if(coupons){
			couponsArr = [];
			jQuery.each(coupons, function(i, obj) {
				this.dateToFormatted = moment(this.dateTo).format('DD/MM/YYYY');
				today = new Date();
				today = moment(today).format();
				dateTo = moment(this.dateTo).format();
				this.webUrl = "http://"+location.hostname + "/benefit/" + this._id;
				if((moment(today).isBefore(dateTo) || moment(today).isSame(dateTo)) && this.status == 'onAir' && this.generalBonus === true){
				   couponsArr.push(this);
				}
			});
			templateScript = $('#homeCarouselBenefits').html();
			template = Handlebars.compile(templateScript);
			$('#owl-coupons').append(template(couponsArr));
			var owl = $(".owl-carousel");
			owl.owlCarousel({
				stagePadding:40,
				ltr:true,
				responsive: true,
				responsive:{0:{items:1},360:{items:1},600:{items:3},800:{items:4}},
				items : 4
			});
			$(".nextSl").click(function(){
				owl.trigger('next.owl');
			});
			$(".prevSl").click(function(){
				owl.trigger('prev.owl');
			});
			
			$('.popup-modal').magnificPopup({
				type: 'inline',
				preloader: false,
				focus: '#username',
				closeOnBgClick:true,/*,
				modal: true*/
				callbacks:{open: function() {
					$('.popup-share figure').each(function(){
						$(this).find('b').click(function () {
							$(this).parent('figure').toggleClass("open")
						});
					});
					$('.popup-share input').change(function () {
				        if($(this).is(":checked")) {
				            $(this).parent().addClass("active")
				        }
				        else{
				            $(this).parent().removeClass("active")
				        }
					});		
				    $('.popup_buy a').click(function () {
						$(this).next('.popup_buy_window').css('display','inline-block')
					}),
					$('.popup_buy_window a').click(function () {
						$(this).parent().hide()
					})
					;
				}}
			});
			$()
			$(document).on('click', '.popup-modal-dismiss', function (e) {
				e.preventDefault();
				$.magnificPopup.close();
			});
			$('.items').mixItUp();
		}
	});

});
	</script>
<?php get_footer(); ?>