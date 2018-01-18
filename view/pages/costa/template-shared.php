<?php /* Template Name: Shared */ get_header(); ?>
<?php
    if (isset($wp_query->query_vars['bid'])) {
    $bid = urldecode($wp_query->query_vars['bid']);
    }
?>
<script>
function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'בערב' : 'יום';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
 }

 
  Handlebars.registerHelper('ifCond', function (v1, operator, v2, options) {
    switch (operator) {
        case '==':
            return (v1 == v2) ? options.fn(this) : options.inverse(this);
        case '===':
            return (v1 === v2) ? options.fn(this) : options.inverse(this);
        case '!==':
            return (v1 !== v2) ? options.fn(this) : options.inverse(this);
        case '<':
            return (v1 < v2) ? options.fn(this) : options.inverse(this);
        case '<=':
            return (v1 <= v2) ? options.fn(this) : options.inverse(this);
        case '>':
            return (v1 > v2) ? options.fn(this) : options.inverse(this);
        case '>=':
            return (v1 >= v2) ? options.fn(this) : options.inverse(this);
        case '&&':
            return (v1 && v2) ? options.fn(this) : options.inverse(this);
        case '||':
            return (v1 || v2) ? options.fn(this) : options.inverse(this);
        default:
            return options.inverse(this);
    }
});

        var ID='<?=$bid?>';
        $( document ).ready(function() {
                var couponUrl = 'http://admin.coupit.co.il/coupons/'+ID+'';
                $.getJSON(couponUrl, function(data) {
                        coupon = data.coupon;
                        $('title').text(coupon.couponName);
                        if(coupon){
                                /* redirect */
                                if(coupon.status != "onAir"){
                                   document.location.href = '/expired/'+ coupon.categories[0];
                                }
                                dateTo = new Date(coupon.dateTo);  
                                dateToFormatted = ('0' + dateTo.getDate()).slice(-2) + '.' + ('0' + (dateTo.getMonth()+1)).slice(-2) + '.' + dateTo.getFullYear()+ ' ' + formatAMPM(dateTo);  
                                coupon.dateTo = dateToFormatted;
                                //coupon.dateTo = moment(coupon.dateTo).format('DD.MM.YYYY h:mm a');
                                coupon.webUrl = location.href;
                                templateScript = $('#benefitTemplate').html();  
                                template = Handlebars.compile(templateScript);  
                                $('.benefitItem').append(template(coupon));

                    ///****** модальное окно НАЧАЛО *****///
								$('.pop').magnificPopup({type:'inline'});
                                $('.popup-modal').magnificPopup({
                                    type: 'inline',
                                    preloader: false,
                                    focus: '#username',
                                    modal: true,
                                    callbacks:{open: function() {
                                        $('#popUpLicence').change(function() {
                                            if($(this).is(":checked")) {
                                                $('.popup-share').addClass('enabled')
                                            }
                                            else(
                                                    $('.popup-share').removeClass('enabled')
                                            )
                                        }),
                                        $('.popup_buy a').click(function () {
                                                    $(this).next('.popup_buy_window').css('display','inline-block')
                                            }),
                                            $('.popup_buy_window a').click(function () {
                                                    $(this).parent().hide()
                                            });
                                    }}

                                });
			$(document).on('click', '.popup-modal-x', function (e) {
				e.preventDefault();
				$(".mfp-wrap").addClass('mfp-removing');
		    	setTimeout(function(){
		       $.magnificPopup.close();
		     }, 500);
			});
                                 $(document).ready(function(){
									$('.bar_green, .bar_grey').matchHeight();
								});

                ///***** КОНЕЦ ******///
                        }else{
                                document.location.href = 'http://coupit.i-costa.com/';
                        }
                }).error(function() { document.location.href = 'http://coupit.i-costa.com/'; });
        });
</script>

<div class="benefit benefitItem clearfix">
    <script id="benefitTemplate" type="text/x-handlebars-template">
		<div class="benefit-image" style="background-image:url({{couponImage}})">
			<img alt="{{couponName}}" src="{{couponImage}}">
		</div>
		<div class="main">
			<div class="c h">
				<div class="bar c">
					<a href="#popupModal" class="popup-modal bar_green">
						<span data-t="give_it_to_me">לחצו למימוש</span>
					</a>
					<div class="bar_grey">
						<div class="prices">
		                    <b class="wow tada">{{cellPrice}}<span>₪</span></b>
		                    <strong>{{tariff}}₪</strong>
	                    </div>
					</div>
				</div>
				<div class="single_info c">
					<div class="single_title">
						<h1>{{couponName}}</h1>
						<b>{{couponDescription}}</b>
						<span>הטבה מספר {{couponNumber}} | בתוקף עד {{dateTo}}</span>
					</div>
					<div class="single_company">
						<img alt="{{businessName}}" src="{{logo}}">
						<h2>{{businessName}}</h2>
					</div>
				</div>
				<div class="benefit_icons c">
					<figure class="wow bounceIn benefit_icon_call" data-wow-delay="0.5s">
						<a href="tel:{{contactPhone}}">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 61 61"><path d="M55.1 55.8L51.1 59.8C50.3 60.5 48.2 61 48.2 61 35.4 61.1 23 56.1 14 47 4.9 37.9-0.1 25.6 0 12.7 0 12.7 0.5 10.7 1.2 10L5.2 5.9C6.7 4.4 9.6 3.8 11.5 4.4L12.4 4.7C14.4 5.4 16.5 7.6 17 9.6L19.1 17.1C19.6 19.1 18.9 22 17.4 23.4L14.7 26.2C17.3 36 25 43.7 34.9 46.3L37.6 43.6C39 42.1 41.9 41.4 44 42L51.4 44C53.4 44.5 55.6 46.6 56.3 48.6L56.6 49.5C57.3 51.5 56.6 54.3 55.1 55.8ZM34.3 30.5L38.1 30.5C38.1 26.3 34.7 22.9 30.5 22.9L30.5 26.7C32.6 26.7 34.3 28.4 34.3 30.5ZM49.6 30.5C49.6 20 41 11.4 30.5 11.4L30.5 15.3C38.9 15.3 45.8 22.1 45.8 30.5L49.6 30.5ZM30.5 0L30.5 3.8C45.2 3.8 57.2 15.8 57.2 30.5L61 30.5C61 13.7 47.3 0 30.5 0Z"/></svg>
								<h3 data-t="call">{{contactPhone}}</h3>
							</div>
						</a>
					</figure>
					{{#ifCond loc.[0] "&&" loc.[1]}}
					<figure class="wow bounceIn" data-wow-delay="0.7s">
						<a class="pop" href="#map">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 66 60"><path d="M49.3 48C49.1 48.2 48.8 48.3 48.6 48.3 48.3 48.3 48 48.2 47.8 48 46.2 46.3 43.1 42.8 39.9 38.4 35.9 32.8 31.1 24.6 31.1 17.3 31.1 7.8 38.9 0 48.6 0 58.2 0 66 7.8 66 17.3 66 24.6 61.3 32.8 57.2 38.4 54.1 42.8 50.9 46.3 49.3 48ZM48.6 6.5C42.7 6.5 37.9 11.2 37.9 17.1 37.9 22.9 42.7 27.6 48.6 27.6 54.4 27.6 59.2 22.9 59.2 17.1 59.2 11.2 54.4 6.5 48.6 6.5ZM31.5 43.3L5.2 40.4 8.9 27.5C9.1 26.8 9.8 26.3 10.6 26.3L30.2 26.3C31.1 28.8 32.3 31.2 33.6 33.5L31.5 43.3ZM28 60L1.8 60C1.2 60 0.7 59.7 0.4 59.3 0.1 58.9-0.1 58.3 0.1 57.8L3.7 45.5 30.4 48.4 28 60ZM37.7 39.9C38.9 41.5 40 43 41.1 44.3L36.8 43.8 37.6 39.8C37.7 39.8 37.7 39.9 37.7 39.9ZM60.3 38.5L62.7 46.6 54.8 45.8C56.2 44.1 57.8 42.1 59.4 39.9 59.7 39.5 60 39 60.3 38.5ZM64.3 52.1L65.9 57.7C66 57.8 66 58 66 58.3 66 59.2 65.2 60 64.3 60 64.3 60 64.3 60 64.3 60L33.4 60 35.7 49 64.3 52.1Z"/></svg>
								<h3 data-t="location_map">מפת הגעה</h3>
							</div>
						</a>
						<div id="map" class="white-popup mfp-hide c">
							<a class="waze_button" href="waze://?ll={{loc.[1]}},{{loc.[0]}}&navigate=yes">
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 169.6 153"><path d="M166.1 89.6C163 99 157.2 108 149.2 115.6 143.5 121.1 137 125.7 130.1 129 130.9 131 131.3 133.1 131.3 135.3 131.3 145.1 123.4 153 113.7 153 104.2 153 96.6 145.6 96.1 136.3 93.9 136.3 74.2 136.3 70.1 136 69.7 145.5 62 153 52.5 153 42.7 153 34.8 145.1 34.8 135.3 34.8 133.4 35.2 131.5 35.8 129.8 23.1 125.3 11 117.9 1.8 105.6 -0.2 102.9-0.6 99.3 0.9 96.3 2.4 93.2 5.5 91.3 8.9 91.3 15 91.3 17.3 89.2 18.8 85.9 21 81.2 21.6 74 22.1 67 22.4 62.5 22.8 57.9 23.6 53.7 26.3 39.6 34.4 27 46.8 17.1 57.8 8.4 71.6 2.6 85.6 0.7 88.9 0.2 92.3 0 95.7 0 107.7 0 119.8 2.9 130.6 8.3 141.3 13.7 150.5 21.5 157.2 30.9 163.2 39.1 167 48.2 168.7 57.9 170.4 68.3 169.6 79 166.1 89.6ZM113.7 141.2C116.9 141.2 119.5 138.6 119.5 135.3 119.5 132.1 116.9 129.5 113.7 129.5 110.4 129.5 107.8 132.1 107.8 135.3 107.8 138.6 110.4 141.2 113.7 141.2ZM52.5 141.2C55.7 141.2 58.3 138.6 58.3 135.3 58.3 132.1 55.7 129.5 52.5 129.5 49.3 129.5 46.7 132.1 46.7 135.3 46.7 138.6 49.3 141.2 52.5 141.2ZM95.7 8.9C92.8 8.9 89.8 9.1 86.8 9.5 62.4 12.8 37.3 29.9 32.3 55.4 29.1 72.1 34 100.2 8.9 100.2 17.4 111.5 28.8 118.2 40.8 122.1 43.9 119.3 48 117.7 52.5 117.7 59.2 117.7 65 121.4 68 127 72.9 127.3 95 127.4 98 127.3 100.9 121.6 106.8 117.7 113.7 117.7 117.9 117.7 121.8 119.2 124.8 121.7 139.1 115.1 152.6 102.3 157.6 86.8 171.4 44.8 135.8 8.9 95.7 8.9ZM116.1 92.6C110.6 96.7 103.7 99 96.3 99.2 96 99.2 95.7 99.2 95.4 99.2 80.9 99.2 67.9 89.7 65.5 77.2 65 74.8 66.6 72.5 69 72 71.4 71.5 73.8 73.1 74.2 75.5 75.6 82.9 84.4 90.6 96 90.3 108.2 89.9 116.2 82.7 117.8 75.7 118.4 73.3 120.8 71.8 123.2 72.3 125.6 72.9 127 75.3 126.5 77.7 125.1 83.4 121.5 88.7 116.1 92.6ZM115.6 61.9C110.9 61.9 107.1 58 107.1 53.3 107.1 48.6 110.9 44.7 115.6 44.7 120.4 44.7 124.2 48.6 124.2 53.3 124.2 58 120.4 61.9 115.6 61.9ZM75.8 61.9C71 61.9 67.2 58 67.2 53.3 67.2 48.6 71 44.7 75.8 44.7 80.5 44.7 84.3 48.6 84.3 53.3 84.3 58 80.5 61.9 75.8 61.9Z"/></svg>
								<span>נווט עם וויז</span>
							</a>
							<div class="benefit_map">
								<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.il/maps?q={{loc.[1]}},{{loc.[0]}}&hl=he;z=14&amp;output=embed"></iframe>
							</div>
						</div>
					</figure>
					{{/ifCond}}
					<figure class="wow bounceIn" data-wow-delay="0.9s">
						<a href="#share" class="pop">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 62 62"><path d="M50.6 39.4C47 39.4 43.8 41.1 41.7 43.7L22.3 33.9C22.6 33 22.8 32 22.8 31 22.8 29.9 22.6 28.8 22.3 27.8L41.5 18.1C43.6 20.8 46.9 22.6 50.6 22.6 56.9 22.6 62 17.5 62 11.3 62 5.1 56.9 0 50.6 0 44.3 0 39.2 5.1 39.2 11.3 39.2 12.3 39.4 13.3 39.6 14.2L20.3 24C18.2 21.4 15 19.7 11.4 19.7 5.1 19.7 0 24.8 0 31 0 37.2 5.1 42.3 11.4 42.3 15.1 42.3 18.4 40.5 20.5 37.8L39.7 47.5C39.4 48.5 39.2 49.6 39.2 50.7 39.2 56.9 44.3 62 50.6 62 56.9 62 62 56.9 62 50.7 62 44.5 56.9 39.4 50.6 39.4Z"/></svg>
								<h3>שתף</h3>
							</div>
						</a>
						<div id="share" class="white-popup mfp-hide">
							<div class="benefit_share c">
								<a target="_blank" href="http://www.facebook.com/sharer.php?m2w&s=100&p[url]=<?php echo the_permalink(); ?>{{_id}}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 96.1 96.1" xml:space="preserve"><path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z"/></svg></a>
								<a target="_blank" href="http://twitter.com/home?status=Blog+Slideshow+Post%20<?php echo the_permalink(); ?>{{_id}}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><path d="M612 116.3c-22.5 10-46.7 16.8-72.1 19.8 25.9-15.5 45.8-40.2 55.2-69.4 -24.3 14.4-51.2 24.8-79.8 30.5 -22.9-24.4-55.5-39.7-91.6-39.7 -69.3 0-125.6 56.2-125.6 125.5 0 9.8 1.1 19.4 3.3 28.6C197.1 206.3 104.6 156.3 42.6 80.4c-10.8 18.5-17 40.1-17 63.1 0 43.6 22.2 82 55.8 104.5 -20.6-0.7-39.9-6.3-56.9-15.8v1.6c0 60.8 43.3 111.6 100.7 123.1 -10.5 2.8-21.6 4.4-33.1 4.4 -8.1 0-15.9-0.8-23.6-2.3 16 49.9 62.3 86.2 117.3 87.2 -42.9 33.7-97.1 53.7-155.9 53.7 -10.1 0-20.1-0.6-29.9-1.7 55.6 35.7 121.5 56.5 192.4 56.5 230.9 0 357.2-191.3 357.2-357.2l-0.4-16.3C573.9 163.5 595.2 141.4 612 116.3z"/></svg></a>
								<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>{{_id}}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 96.8 96.8" xml:space="preserve"><path d="M62.6 0H39.5c-10.3 0-17.4 2.3-23.8 7.6 -5 4.4-8.1 10.7-8.1 16.9 0 9.6 7.3 19.8 20.9 19.8 1.3 0 2.8-0.1 4-0.3l-0.2 0.5c-0.5 1.3-1.1 2.5-1.1 4.5 0 3.8 1.8 6.1 3.6 8.3l0.2 0.3 -0.4 0c-5.6 0.4-16 1.1-23.7 5.8 -9 5.4-9.7 13.1-9.7 15.4 0 9 8.4 18.1 27.1 18.1 21.8 0 33.1-12 33.1-23.9 0-8.8-5.1-13.1-10.6-17.7l-4.6-3.6c-1.4-1.2-3.2-2.6-3.2-5.4 0-2.7 1.8-4.4 3.3-6l0.2-0.2c5-3.9 10.6-8.4 10.6-18 0-9.7-6-14.6-8.9-17h7.7c0.1 0 0.2 0 0.3-0.1l6.6-4.1c0.2-0.1 0.3-0.3 0.2-0.6C63 0.1 62.8 0 62.6 0zM34.6 91.5c-13.3 0-22.2-6.2-22.2-15.4 0-6 3.6-10.4 10.8-13 5.7-1.9 13.2-2 13.2-2 1.3 0 1.9 0 2.9 0.1 9.3 6.6 13.7 10.1 13.7 16.7C53.1 86.3 46 91.5 34.6 91.5zM34.5 40.8c-11.1 0-15.8-14.6-15.8-22.5 0-4 0.9-7 2.8-9.4 2-2.5 5.5-4.2 8.8-4.2 10.2 0 15.9 13.7 15.9 23.2 0 1.5 0 6.1-3.1 9.2C40.9 39.3 37.5 40.8 34.5 40.8zM95 45.2H82.8V33.1c0-0.3-0.2-0.5-0.5-0.5H77.1c-0.3 0-0.5 0.2-0.5 0.5v12.1H64.5c-0.3 0-0.5 0.2-0.5 0.5v5.3c0 0.3 0.2 0.5 0.5 0.5H76.6V63.7c0 0.3 0.2 0.5 0.5 0.5h5.2c0.3 0 0.5-0.2 0.5-0.5V51.5h12.2c0.3 0 0.5-0.2 0.5-0.5v-5.3C95.5 45.4 95.3 45.2 95 45.2z"/></svg></a>
								<a target="_blank" href="http://linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>{{_id}}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 430.1 430.1" xml:space="preserve"><path d="M430.1 261.5V420.6h-92.2V272.2c0-37.3-13.3-62.7-46.7-62.7 -25.5 0-40.6 17.1-47.3 33.7 -2.4 5.9-3.1 14.2-3.1 22.5V420.6h-92.2c0 0 1.2-251.3 0-277.3h92.2v39.3c-0.2 0.3-0.4 0.6-0.6 0.9h0.6v-0.9c12.3-18.9 34.1-45.8 83.1-45.8C384.6 136.7 430.1 176.4 430.1 261.5zM52.2 9.6C20.6 9.6 0 30.3 0 57.5c0 26.6 20 47.9 51 47.9h0.6c32.2 0 52.2-21.3 52.2-47.9C103.1 30.3 83.7 9.6 52.2 9.6zM5.5 420.6h92.2v-277.3H5.5V420.6z"/></svg></a>
								<a target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php echo the_permalink(); ?>{{_id}}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 511.6 511.6" xml:space="preserve"><path d="M49.1 178.7c6.5 4.6 26 18.1 58.5 40.7 32.5 22.6 57.5 39.9 74.8 52.1 1.9 1.3 5.9 4.2 12.1 8.7 6.2 4.5 11.3 8.1 15.4 10.9 4.1 2.8 9 5.9 14.8 9.3 5.8 3.4 11.3 6 16.4 7.7 5.1 1.7 9.9 2.6 14.3 2.6h0.3 0.3c4.4 0 9.1-0.9 14.3-2.6 5.1-1.7 10.6-4.3 16.4-7.7 5.8-3.4 10.8-6.5 14.8-9.3 4.1-2.8 9.2-6.4 15.4-10.9 6.2-4.5 10.2-7.4 12.1-8.7 17.5-12.2 62.1-43.1 133.6-92.8 13.9-9.7 25.5-21.4 34.8-35.1 9.3-13.7 14-28.1 14-43.1 0-12.6-4.5-23.3-13.6-32.3 -9-8.9-19.7-13.4-32.1-13.4H45.7c-14.7 0-25.9 4.9-33.8 14.8C3.9 79.6 0 91.9 0 106.8c0 12 5.2 25 15.7 39C26.2 159.7 37.3 170.7 49.1 178.7zM483.1 209.3c-62.4 42.3-109.8 75.1-142.2 98.5 -10.8 8-19.6 14.2-26.4 18.7 -6.8 4.5-15.7 9-27 13.7 -11.2 4.7-21.7 7-31.4 7h-0.3 -0.3c-9.7 0-20.2-2.3-31.4-7 -11.2-4.7-20.2-9.2-27-13.7 -6.8-4.5-15.6-10.7-26.4-18.7 -25.7-18.8-73-51.7-141.9-98.5C18 202 8.4 193.8 0 184.4v226.7c0 12.6 4.5 23.3 13.4 32.3 8.9 8.9 19.7 13.4 32.3 13.4h420.3c12.6 0 23.3-4.5 32.3-13.4 8.9-8.9 13.4-19.7 13.4-32.3V184.4C503.4 193.6 493.9 201.9 483.1 209.3z"/></svg></a>
							</div>
						</div>
					</figure>
					<figure class="wow bounceIn" data-wow-delay="1.1s">
						<a href="#hours" class="pop">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 61 61"><path d="M59.7 26.7L54.2 27.2C53.6 27.2 53.1 26.8 53 26.2 52.6 24.3 52 22.5 51.3 20.8 51 20.3 51.2 19.8 51.6 19.4L56 15.9C56.3 15.7 56.7 15.6 57 15.7 57.3 15.7 57.6 16 57.8 16.3 59.2 19.1 60.3 22.1 60.8 25.3 60.8 25.6 60.8 25.9 60.6 26.2 60.4 26.5 60.1 26.6 59.7 26.7ZM48.3 14.4C47.9 14.8 47.2 14.8 46.8 14.4 45.9 13.5 44.9 12.6 43.9 11.9 43.5 11.6 43.3 11 43.5 10.5L45.8 5.3C45.9 5 46.2 4.8 46.5 4.7 46.9 4.6 47.2 4.6 47.5 4.8 49.5 6.1 51.2 7.6 52.8 9.2 53 9.5 53.1 9.8 53.1 10.1 53.1 10.5 52.9 10.8 52.7 11L48.3 14.4ZM40 33.2L33.6 33.2C32.8 34.1 31.7 34.6 30.4 34.6 28 34.6 26.1 32.7 26.1 30.3 26.1 30 26.1 29.7 26.2 29.4L20.5 21.4C19.6 20.1 19.9 18.2 21.2 17.3 22.6 16.3 24.4 16.7 25.3 18L31 25.9C32 26.1 33 26.6 33.6 27.3L40 27.3C41.6 27.3 42.9 28.6 42.9 30.3 42.9 31.9 41.6 33.2 40 33.2ZM38.2 7.8C38 8.3 37.4 8.6 36.8 8.5 36.1 8.3 35.3 8.1 34.6 7.9 34 7.8 33.6 7.4 33.6 6.8L33.6 1.2C33.6 0.8 33.7 0.5 34 0.3 34.2 0.1 34.6 0 34.9 0 36.6 0.2 38.2 0.6 39.8 1.1 40.1 1.2 40.3 1.5 40.5 1.8 40.6 2.1 40.6 2.4 40.5 2.7L38.2 7.8ZM26.7 7.9C16.7 9.7 8.9 18.1 8 28.4L10.6 28.4C11.7 28.4 12.6 29.3 12.6 30.3 12.6 31.4 11.7 32.3 10.6 32.3L8 32.3C8.9 43.3 17.7 52.1 28.6 53L28.6 50.4C28.6 49.3 29.5 48.4 30.6 48.4 31.7 48.4 32.6 49.3 32.6 50.4L32.6 53C37.6 52.6 42.1 50.5 45.7 47.4 46.1 47 46.7 47 47.1 47.3L51.8 50.5C52.1 50.7 52.3 51 52.3 51.3 52.3 51.7 52.2 52 52 52.3 46.4 57.7 38.9 61 30.6 61 13.7 61 0 47.3 0 30.3 0 14.9 11.4 2.1 26.3 0 26.7 0 27 0.1 27.3 0.3 27.5 0.5 27.7 0.8 27.7 1.2L27.7 6.8C27.7 7.4 27.2 7.8 26.7 7.9ZM50.6 41.2C51.8 39 52.6 36.6 53 34.1 53.1 33.6 53.5 33.2 54.1 33.1L59.7 32.6C60.1 32.6 60.4 32.7 60.7 33 60.9 33.2 61 33.6 61 33.9 60.5 38.1 59.2 42 57.2 45.5 57.1 45.7 56.8 45.9 56.5 46 56.1 46.1 55.8 46 55.5 45.8L51 42.7C50.5 42.4 50.3 41.7 50.6 41.2Z"/></svg>
								<h3>שעות פעילות</h3>
							</div>
						</a>
						<div id="hours" class="white-popup mfp-hide">
		                    <div class="benefit_hours">
		                        <h3 data-t="working_hours">שעות פעילות</h3>
		                        <p>{{workTime.workdays}}
		                            {{#if workTime.workdaysHoursFrom}}
		                                מ {{workTime.workdaysHoursFrom}}
		                            {{/if}}
		                            {{#if workTime.workdaysHoursTo}}
		                                עד {{workTime.workdaysHoursTo}}
		                            {{/if}}
		                        </p>
		                
		                        {{#if workTime.saturday}}
		                            <p>יום שבת
		                                {{#if workTime.saturdayHoursFrom}}
		                                    מ {{workTime.saturdayHoursFrom}}
		                                {{/if}}
		                                {{#if workTime.saturdayHoursTo}}
		                                    עד {{workTime.saturdayHoursTo}}
		                                {{/if}}
		                            </p> 
		                        {{/if}}
		
		                        {{#if workTime.sunday}}
		                            <p>יום ראשון
		                                {{#if workTime.sundayHoursFrom}}
		                                    מ {{workTime.sundayHoursFrom}}
		                                {{/if}}
		
		                                {{#if workTime.sundayHoursTo}}
		                                   עד {{workTime.sundayHoursTo}}
		                                {{/if}}
		                            </p>
		                        {{/if}}
		                    </div>
						</div>
					</figure>
					{{#if linkToProduct}}
					<figure class="wow bounceIn" data-wow-delay="1.3s">
						<a target="_blank" href="{{linkToProduct}}">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 69 61"><path d="M64 38.3L60.1 38.3 57.5 28.1 54.9 38.3 50.9 38.3 46.1 22.4 50 22.4 52.9 32.8 55.5 22.4 59.5 22.4 62 32.8 65 22.4 69 22.4 64 38.3ZM34.5 0C46.4 0 56.6 7.2 61.3 17.7L7.7 17.7C12.4 7.2 22.6 0 34.5 0ZM13.4 22.4L16 32.8 18.9 22.4 22.9 22.4 18 38.3 14.1 38.3 11.4 28.1 8.8 38.3 4.9 38.3 0 22.4 4 22.4 6.8 32.8 9.5 22.4 13.4 22.4ZM34.5 28.1L31.9 38.3 27.9 38.3 23 22.4 27 22.4 29.9 32.8 32.5 22.4 36.4 22.4 39 32.8 41.9 22.4 46 22.4 41 38.3 37.1 38.3 34.5 28.1ZM34.5 61C22.6 61 12.4 53.8 7.7 43.3L61.3 43.3C56.6 53.8 46.4 61 34.5 61Z"/></svg>
								<h3 data-t="homepage">דף הבית</h3>
							</div>
						</a>
					</figure>
					{{/if}}
					{{#if linkToFacebook}}
					<figure class="wow bounceIn" data-wow-delay="1.5s">
						{{#ifCond linkToFacebook "!==" "http://www.facebook.com/" }}
						<a target="_blank" class="benefit-business-icons-facebook" href="{{linkToFacebook}}">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 60 60"><path d="M60 30.2C60 44.6 50 56.6 36.7 59.6L36.7 34.5 43.9 34.5 43.9 26.2 36.6 26.2 36.6 24.3C36.6 20.7 38.2 17.8 41.9 17.8 43.4 17.8 44.6 18 45.5 18.3L46 9.6C44.4 9.1 42.5 8.8 40 8.8 36.7 8.8 32.7 9.8 29.9 12.5 26.7 15.5 25.3 20.3 25.3 24.7L25.3 26.2 20.6 26.2 20.6 34.5 25.3 34.5 25.3 60C11 57.7 0 45.3 0 30.2 0 13.5 13.4 0 30 0 46.6 0 60 13.5 60 30.2Z"/></svg>
								<h3 data-t="facebook_page">עמוד פייסבוק</h3>
							</div>
						</a>
						{{/ifCond}}
					</figure>
					{{/if}}
				</div>
				<div class="benefit_terms">
					<p>{{smallLetters}}</p>
				</div>
			</div>
		</div>
    
     <div id="popupModal" class="white-popup-block mfp-hide popupModal">
        <div class="popUpTitle">
      		<a class="popup-modal-dismiss popup-modal-x" href="#">
      			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><polygon points="612 36 576.5 0.6 306 270.6 35.5 0.6 0 36 270.5 306 0 576 35.5 611.4 306 341.4 576.5 611.4 612 576 341.5 306 "/></svg>
      		</a>
        	<h3>תודה שהשתמשתם</h3>
        </div>
     	<div class="c popUpLinks">
    		<a href="http://coupit.co.il">המשך</a>
    	</div>
    </div>

    </script>
</div>

<?php get_footer(); ?>