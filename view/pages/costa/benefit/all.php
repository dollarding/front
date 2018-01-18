<div id="owl-coupons" class="items"></div>

<script id="homeCarouselBenefits" type="text/x-handlebars-template">
	{{#each this}}          
		<?php get_template_part('benefit/item'); ?>
	{{/each}}                   
  </script>
  
	<script>
		
		jQuery(document).ready(function() {
	
		$.getJSON('http://admin.coupit.co.il/coupons', function(data){
		console.trace(data);
		if(data.coupons){
			couponsArr = [];
			jQuery.each(data.coupons, function(i, obj) {
				
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
				closeBtnInside:true,
				preloader: false,
				focus: '#username',
				closeOnBgClick:true,
				callbacks:{
					beforeOpen: function() {this.st.mainClass =  'flip-h-3d'},
					open: function() {
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
					});
				}}
			});
			$()
            $( ".popup-share-mail" ).click(function() {
                $('.email-196 input').focus();
            });
          $(document).on('mailsent.wpcf7', function () {
			    setTimeout( function (){
				  $.magnificPopup.close();
				}, 1000 );
			});
			$(document).on('click', '.popup-modal-x', function (e) {
				e.preventDefault();
				$(".mfp-wrap").addClass('mfp-removing');
		    	setTimeout(function(){
		       $.magnificPopup.close();
		     }, 500);
			});
			$('.accept input').after('<i/>');
			$('.items').mixItUp();
			/*
			$('.popup-share-mail').click(function () {
				$('.sendEmailContainer').slideToggle('fast')
			});
			*/



		//}
	});

});
	</script>
