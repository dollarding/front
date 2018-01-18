$(document).ready(function(){
	$.slidebars();
	$('.accept input').after('<i/>');
	$('.popup-share-mail').click(function () {
		$('.sendEmailContainer').slideToggle('fast')
	});
    $('.ow-button-base a').magnificPopup();
    $('.x').click(function () {
		$.magnificPopup.close();
	});
	$('.pop').magnificPopup({type:'inline'});
    $('.pop-image').magnificPopup({type:'image'});
    $('.pop-video').magnificPopup({type:'iframe',mainClass: 'mfp-fade',removalDelay:1,preloader:false,fixedContentPos:false});
	$('.itemsfilter_button').click(function () {
		if ($(".itemsfilter_menu").is(":hidden")) {
			$(".itemsfilter_menu").slideDown("fast")
		}
		else {
			$(".itemsfilter_menu").slideUp("fast")
		}
	});
    $('.single_gallery_slider').owlCarousel({rtl:true,items:3});
    $('.itemsnav').on('refreshed.owl.carousel', function(event) {
	    recalcCarouselWidth($('.owl-carousel'));
	});
    $('.itemsnav').owlCarousel({lazyLoad:true,stagePadding:20,rtl:true,responsive:{0:{items:6},700:{items:8},1000:{items:12}}});
    function recalcCarouselWidth(carousel) {
    var stage = carousel.find('.owl-stage');
   		stage.width(Math.ceil(stage.width()) + 1);
	}
	$(window).on('resize', function(e){
	    recalcCarouselWidth($('.owl-carousel'));
	}).resize();
	$(".itemsnav").find("a[href='"+window.location.href+"']").each(function(){$(this).addClass("active")});
	$('.facecoup_post_body').matchHeight();
	$('.lp-popups figure').matchHeight();
	$(".text ol").each(function(){
	$(this).children('li').each(function(i){
	      $(this).find("span.num").remove().end()
	           .prepend("<span class='num'>" + (i + 1) + "</span>");
	      });
	 });
});
function equalHeight(group) { tallest = 0; group.each(function() { thisHeight = $(this).height(); if(thisHeight > tallest) { tallest = thisHeight; } }); group.height(tallest); }
$(document).ready(function() {
        $(window).load(function(){
                equalHeight($(".tests figure"));
        });
});
