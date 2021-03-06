<?php /* Template Name: Benefit */ get_header(); ?>

<?php
    if (isset($wp_query->query_vars['bid'])) {
    $bid = urldecode($wp_query->query_vars['bid']);
    }
?>
<script>
fbq('track', 'ViewContent');
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
        var couponGl;
        $( document ).ready(function() {
            var couponUrl = 'http://admin.coupit.co.il/coupons/'+ID+'';
            $.getJSON(couponUrl, function(data) {
                coupon = data.coupon;
                couponGl = coupon;
                $('title').text(coupon.couponName);
                if(coupon){
                    dateTo = new Date(coupon.dateTo);  
                    dateToFormatted = ('0' + dateTo.getDate()).slice(-2) + '.' + ('0' + (dateTo.getMonth()+1)).slice(-2) + '.' + dateTo.getFullYear()+ ' ' + formatAMPM(dateTo);  
                    coupon.dateTo = dateToFormatted;

                    //coupon.dateTo = moment(coupon.dateTo).format('DD.MM.YYYY h:mm a');

                    coupon.webUrl = location.href;
                    coupon.secondSingle = "http://" + location.hostname + "/shared/" + coupon._id;

                    templateScript = $('#benefitTemplate').html();  
                    template = Handlebars.compile(templateScript);  
                    $('.benefitItem').append(template(coupon));
                    
                    $('.whatsapp').attr("href", "whatsapp://send?text=הי! קבלו הטבה שווה שמצאתי - "+coupon.couponName+" יש פה קישור שלחיצה עליו מעבירה ישר להטבה. תהנו! "+coupon.webUrl+"");
                    $('.sms').attr("href", "sms:?body=הי! קבלו הטבה שווה שמצאתי - "+coupon.couponName+" יש פה קישור שלחיצה עליו מעבירה ישר להטבה. תהנו! "+coupon.webUrl+"");
                    
                    /* send email */
                    $('.wpcf7-form .text-769 input').val(coupon.couponName);
                    $('.wpcf7-form .textarea-904 textarea').val(coupon.couponDescription);
                    $('.wpcf7-form .url-99 input').val(coupon.secondSingle);
                    
                    $( ".popup-share-mail" ).click(function() {
                        $('.email-196 input').focus();
                    });

                ///****** модальное окно НАЧАЛО *****///
					$('.pop').magnificPopup({type:'inline'});
                    $('.popup-modal').magnificPopup({
                        type: 'inline',
                        preloader: false,
                        focus: '#username',
                        modal: true,
                        callbacks:{
                        	beforeOpen: function() {this.st.mainClass =  'flip-h-3d'},
                        	open: function() {
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
                        $(document).on('mailsent.wpcf7', function () {
						    setTimeout( function (){
							  $.magnificPopup.close();
							}, 1000 );
						});
                       $(document).on('click', '.popup-modal-dismiss', function (e) {
                            e.preventDefault();
                            $(".mfp-wrap").addClass('mfp-removing');
					    	setTimeout(function(){
					       $.magnificPopup.close();
					     }, 3000);
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



function mostrar(){
document.getElementById('pitolargo').click()

}
setTimeout(mostrar,4000);


 


</script>



<div class="benefit benefitItem clearfix" >
    <script id="benefitTemplate" type="text/x-handlebars-template">
		<div class="benefit-image" style="background-image:url({{couponImage}})">
			<img alt="{{couponName}}" src="{{couponImage}}">
			<div class="joystick">
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 197.4 197.4" xml:space="preserve"><polygon points="146.9 197.4 45.3 98.7 146.9 0 152.1 5.4 56.1 98.7 152.1 192 "/></svg>
				</a>
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 223.4 223.4" xml:space="preserve"><polygon points="57.2 223.4 51.2 217.3 159.9 111.7 51.2 6.1 57.2 0 172.2 111.7 "/></svg>
				</a>
			</div>
		</div>
		<div class="main">
			<div class="c h">
				<div class="bar c wow tada">
					<a id="pitolargo" href="#popupModal" class="popup-modal bar_green">
						<span data-t="give_it_to_me">תן לי את זה</span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 451.8 451.8" xml:space="preserve"><path d="M97.1 225.9c0-8.1 3.1-16.2 9.3-22.4L300.7 9.3c12.4-12.4 32.4-12.4 44.8 0 12.4 12.4 12.4 32.4 0 44.7L173.5 225.9l171.9 171.9c12.4 12.4 12.4 32.4 0 44.7 -12.4 12.4-32.4 12.4-44.7 0l-194.3-194.3C100.2 242.1 97.1 234 97.1 225.9z"/></svg>
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
								<a target="_blank" href="http://www.facebook.com/sharer.php?m2w&s=100&p[url]=<?php echo the_permalink(); ?>{{_id}}">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 96.1 96.1" xml:space="preserve"><path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z"/></svg>
								</a>
								<a class="benefit_share_sms" href="sms:?body=<?php echo the_permalink();?>{{_id}}">
									<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 510 510"><path d="M459 408L102 408 0 510 0 51C0 23 23 0 51 0L459 0C487.1 0 510 23 510 51L510 357C510 385.1 487.1 408 459 408ZM163.8 168C165 166.2 166.6 165.3 168.6 165.3 170.5 165.3 172.6 165.7 174.8 166.6L176.8 167.3C177.2 167.5 178 167.9 179 168.4 180.1 168.9 180.8 169.2 181.2 169.4 181.5 169.6 182.3 170 183.5 170.7 184.7 171.3 185.5 171.7 185.8 171.9L193.7 153C184.9 147.7 176.1 145.1 167.1 145.1 158.1 145.1 150.8 147.9 145.2 153.4 139.5 158.9 136.7 166.4 136.7 175.8 136.7 182.6 138.2 188.5 141.3 193.5 144.3 198.5 149.1 203.3 155.5 207.8 157.4 209.1 158.9 210.3 160.2 211.3 161.4 212.3 162.8 213.5 164.2 215.1 165.6 216.6 166.7 218.2 167.4 220 168.2 221.8 168.5 224 168.5 226.5 168.5 229 167.8 231.2 166.5 232.9 165.1 234.6 163.1 235.5 160.5 235.5 154.8 235.5 146.5 232 135.9 225L135.9 249.1C143.4 253.4 152.2 255.5 162.4 255.5 172.5 255.5 180.3 252.8 185.8 247.3 191.3 241.8 194 234 194 223.7 194 216.9 192.4 211 189.1 206.1 185.8 201.2 180.9 196.6 174.3 192.2 171 190 168.3 187.8 166 185.4 164.7 184 163.7 182.4 163.1 180.8 162.4 179.1 162.1 177 162.1 174.5 162.1 172 162.7 169.8 163.8 168ZM305 146.6L268.8 146.6C268.1 149.6 263 173.1 253.5 217L238.2 146.6 202.4 146.6 202.4 254.1 226.7 254.1 226.7 194.3 240.1 254.1 266.9 254.1 280.2 193.9 280.2 254.1 305 254.1 305 146.6ZM342.9 168C344.1 166.2 345.7 165.3 347.6 165.3 349.6 165.3 351.7 165.7 353.9 166.6L355.8 167.3C356.3 167.5 357 167.9 358.1 168.4 359.2 168.9 359.9 169.2 360.3 169.4 360.6 169.6 361.4 170 362.6 170.7 363.8 171.3 364.6 171.7 364.9 171.9L372.8 153C364 147.7 355.2 145.1 346.2 145.1 337.2 145.1 329.9 147.9 324.3 153.4 318.6 158.9 315.8 166.4 315.8 175.8 315.8 182.6 317.3 188.5 320.4 193.5 323.4 198.5 328.2 203.3 334.6 207.8 336.5 209.1 338 210.3 339.3 211.3 340.5 212.3 341.8 213.5 343.3 215.1 344.7 216.6 345.8 218.2 346.5 220 347.2 221.8 347.6 224 347.6 226.5 347.6 229 346.9 231.2 345.5 232.9 344.2 234.6 342.2 235.5 339.6 235.5 333.9 235.5 325.6 232 314.9 225L314.9 249.1C322.5 253.4 331.3 255.5 341.5 255.5 351.6 255.5 359.4 252.8 364.9 247.3 370.4 241.8 373.1 234 373.1 223.7 373.1 216.9 371.5 211 368.2 206.1 364.9 201.2 359.9 196.6 353.4 192.2 350.1 190 347.4 187.8 345.1 185.4 343.8 184 342.8 182.4 342.2 180.8 341.5 179.1 341.2 177 341.2 174.5 341.2 172 341.8 169.8 342.9 168Z"/></svg>
								</a>
								<a class="benefit_share_whatsapp"  href="whatsapp://send?text=?php echo the_permalink();?>{{_id}}" data-action="share/whatsapp/share">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 326.1 326.1" xml:space="preserve"><path d="M164.3 0C76.4 0 5 71.4 5 159.2c0 30 8.3 59 24.1 84.3L3.3 312.6c-1.4 3.7-0.5 7.8 2.3 10.6 1.9 1.9 4.5 2.9 7.1 2.9 1.2 0 2.4-0.2 3.5-0.6l71.4-26.7c23.4 12.9 49.9 19.7 76.8 19.7 87.8 0 159.2-71.4 159.2-159.2C323.5 71.4 252.1 0 164.3 0zM241 209.2c-4.4 15.8-21.1 27.3-39.5 27.3 -1.8 0-3.6-0.1-5.4-0.3 -22.4-3.2-48.7-18.6-70.3-41.2 -22.7-21.7-38.1-48-41.2-70.2 -3.1-22.5 7-39.3 27-44.9 1-0.3 2.1-0.4 3.2-0.4 11.7 0 25.6 16.5 30.5 28.4 3.2 7.7 2.9 13.7-0.7 17.2 -9 8.9-12.4 14.2-12 19.2 0.4 5.5 5.6 11.9 14.3 21.1 1.1 1.2 2.6 2.7 4.3 4.4 1.6 1.6 3.1 3 4.4 4.3 9.8 9.3 16.1 14.4 21.9 14.4 4.8 0 9.9-3.4 18.4-12 1.3-1.3 3.7-2.9 7.7-2.9 10.5 0 25.4 10.3 32.7 19.9C240.6 199.1 242.3 204.6 241 209.2z"/></svg>
								</a>
								<a target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php echo the_permalink(); ?>{{_id}}">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 511.6 511.6" xml:space="preserve"><path d="M49.1 178.7c6.5 4.6 26 18.1 58.5 40.7 32.5 22.6 57.5 39.9 74.8 52.1 1.9 1.3 5.9 4.2 12.1 8.7 6.2 4.5 11.3 8.1 15.4 10.9 4.1 2.8 9 5.9 14.8 9.3 5.8 3.4 11.3 6 16.4 7.7 5.1 1.7 9.9 2.6 14.3 2.6h0.3 0.3c4.4 0 9.1-0.9 14.3-2.6 5.1-1.7 10.6-4.3 16.4-7.7 5.8-3.4 10.8-6.5 14.8-9.3 4.1-2.8 9.2-6.4 15.4-10.9 6.2-4.5 10.2-7.4 12.1-8.7 17.5-12.2 62.1-43.1 133.6-92.8 13.9-9.7 25.5-21.4 34.8-35.1 9.3-13.7 14-28.1 14-43.1 0-12.6-4.5-23.3-13.6-32.3 -9-8.9-19.7-13.4-32.1-13.4H45.7c-14.7 0-25.9 4.9-33.8 14.8C3.9 79.6 0 91.9 0 106.8c0 12 5.2 25 15.7 39C26.2 159.7 37.3 170.7 49.1 178.7zM483.1 209.3c-62.4 42.3-109.8 75.1-142.2 98.5 -10.8 8-19.6 14.2-26.4 18.7 -6.8 4.5-15.7 9-27 13.7 -11.2 4.7-21.7 7-31.4 7h-0.3 -0.3c-9.7 0-20.2-2.3-31.4-7 -11.2-4.7-20.2-9.2-27-13.7 -6.8-4.5-15.6-10.7-26.4-18.7 -25.7-18.8-73-51.7-141.9-98.5C18 202 8.4 193.8 0 184.4v226.7c0 12.6 4.5 23.3 13.4 32.3 8.9 8.9 19.7 13.4 32.3 13.4h420.3c12.6 0 23.3-4.5 32.3-13.4 8.9-8.9 13.4-19.7 13.4-32.3V184.4C503.4 193.6 493.9 201.9 483.1 209.3z"/></svg>
								</a>
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
				<!--
				<div class="benefit_location c">
					<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 23 31"><path d="M11.5 0C5.1 0 0 5.2 0 11.6 0 14.6 1.1 17.3 2.9 19.4L11.5 31 20.1 19.4C21.9 17.3 23 14.6 23 11.6 23 5.2 17.8 0 11.5 0ZM11.5 15.5C9.4 15.5 7.7 13.8 7.7 11.6 7.7 9.5 9.4 7.8 11.5 7.8 13.6 7.8 15.3 9.5 15.3 11.6 15.3 13.8 13.6 15.5 11.5 15.5Z"/></svg>
					<span>{{couponOwner.street}}</span>
				</div>
				-->
				<div class="benefit_terms">
					<p>{{smallLetters}}</p>
				</div>
			</div>
		</div>
    </script>
</div>

	<!-- send via email popup-->
	<div id="popupModalMail" class="white-popup-block mfp-hide popupModal">
		<div class="popUpTitle">
      		<a class="popup-modal-dismiss popup-modal" href="#popupModal">
      			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 370.8 370.8" xml:space="preserve"><polygon points="292.9 24.8 268.8 0 77.9 185.4 268.8 370.8 292.9 346 127.6 185.4 "/></svg>
      		</a>
      		<h3>&nbsp</h3>
  		</div>
		<div class="sendEmailContainer c">
			<?php echo do_shortcode('[contact-form-7 id="286" title="Send Email"]');?>
			<a name="sendEmail"></a>

		</div>
        <div class="popUpLinks c">
			<b>זמין גם</b>
			<a href="<?php the_field('appstore','option');?>">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><path d="M395.7 272c-0.6-64.8 52.9-95.9 55.3-97.5 -30.1-44-76.9-50-93.6-50.7 -39.9-4-77.8 23.5-98 23.5 -20.2 0-51.4-22.9-84.5-22.3 -43.5 0.6-83.5 25.3-105.9 64.2 -45.2 78.4-11.6 194.4 32.4 258 21.5 31.1 47.1 66 80.8 64.8 32.4-1.3 44.7-21 83.9-21 39.2 0 50.2 21 84.5 20.3 34.9-0.6 57-31.7 78.3-62.9 24.7-36.1 34.9-71 35.5-72.8C463.7 375.3 396.4 349.5 395.7 272zM331.3 81.8C349.1 60.1 361.2 30 357.9 0c-25.7 1-56.9 17.1-75.4 38.8 -16.6 19.2-31.1 49.8-27.2 79.2C284.1 120.2 313.4 103.4 331.3 81.8z"/></svg>
				<span>אייפון</span>
			</a>
			<a href="<?php the_field('googleplay','option');?>">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 505.1 505.1" xml:space="preserve"><path d="M68.5 164.7h-1.3c-16.6 0-30.1 13.6-30.1 30.1v131.1c0 16.6 13.5 30.1 30.1 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C98.7 178.3 85.1 164.7 68.5 164.7zM113.1 376.5c0 15.2 12.4 27.6 27.7 27.6h29.6v70.8c0 16.6 13.6 30.2 30.1 30.2h1.3c16.6 0 30.2-13.5 30.2-30.2v-70.8h41.3v70.8c0 16.6 13.6 30.2 30.2 30.2h1.3c16.6 0 30.1-13.5 30.1-30.2v-70.8h29.6c15.2 0 27.7-12.4 27.7-27.6V169.5H113.1V376.5zM322 44l23.5-36.3c1.5-2.3 0.8-5.4-1.5-6.9 -2.3-1.5-5.4-0.9-6.9 1.5l-24.4 37.5c-18.3-7.5-38.7-11.7-60.2-11.7 -21.6 0-41.9 4.2-60.2 11.7l-24.3-37.5c-1.5-2.4-4.6-3-6.9-1.5 -2.3 1.5-3 4.6-1.5 6.9l23.5 36.3c-42.4 20.8-71 59.9-71 104.8 0 2.8 0.2 5.5 0.4 8.2h280.1c0.2-2.7 0.4-5.4 0.4-8.2C393 103.9 364.4 64.8 322 44zM187.7 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4S195.1 108.9 187.7 108.9zM317.5 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4C331 102.9 325 108.9 317.5 108.9zM437.9 164.7h-1.3c-16.6 0-30.2 13.6-30.2 30.1v131.1c0 16.6 13.6 30.1 30.2 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C468 178.3 454.5 164.7 437.9 164.7z"/></svg>
				<span>אנדרואיד</span>
			</a>
        </div>
	</div>


<div id="popupModalSMS" class="white-popup-block mfp-hide popupModal">
        <div class="popUpTitle">
            <a class="popup-modal-dismiss popup-modal" href="#popupModal">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 370.8 370.8" xml:space="preserve"><polygon points="292.9 24.8 268.8 0 77.9 185.4 268.8 370.8 292.9 346 127.6 185.4 "/></svg>
            </a>
            <h3>&nbsp</h3>
        </div>
        <div class="sendEmailContainer c">
             <?php echo do_shortcode('[contact-form-7 id="346" title="תן לי את זהSMS"]'); ?>



             

            <a name="sendEmail"></a>
        </div>
        <div class="popUpLinks c">
            <b>זמין גם</b>
            <a href="<?php the_field('appstore','option');?>">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><path d="M395.7 272c-0.6-64.8 52.9-95.9 55.3-97.5 -30.1-44-76.9-50-93.6-50.7 -39.9-4-77.8 23.5-98 23.5 -20.2 0-51.4-22.9-84.5-22.3 -43.5 0.6-83.5 25.3-105.9 64.2 -45.2 78.4-11.6 194.4 32.4 258 21.5 31.1 47.1 66 80.8 64.8 32.4-1.3 44.7-21 83.9-21 39.2 0 50.2 21 84.5 20.3 34.9-0.6 57-31.7 78.3-62.9 24.7-36.1 34.9-71 35.5-72.8C463.7 375.3 396.4 349.5 395.7 272zM331.3 81.8C349.1 60.1 361.2 30 357.9 0c-25.7 1-56.9 17.1-75.4 38.8 -16.6 19.2-31.1 49.8-27.2 79.2C284.1 120.2 313.4 103.4 331.3 81.8z"/></svg>
                <span>אייפון</span>
            </a>
            <a href="<?php the_field('googleplay','option');?>">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 505.1 505.1" xml:space="preserve"><path d="M68.5 164.7h-1.3c-16.6 0-30.1 13.6-30.1 30.1v131.1c0 16.6 13.5 30.1 30.1 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C98.7 178.3 85.1 164.7 68.5 164.7zM113.1 376.5c0 15.2 12.4 27.6 27.7 27.6h29.6v70.8c0 16.6 13.6 30.2 30.1 30.2h1.3c16.6 0 30.2-13.5 30.2-30.2v-70.8h41.3v70.8c0 16.6 13.6 30.2 30.2 30.2h1.3c16.6 0 30.1-13.5 30.1-30.2v-70.8h29.6c15.2 0 27.7-12.4 27.7-27.6V169.5H113.1V376.5zM322 44l23.5-36.3c1.5-2.3 0.8-5.4-1.5-6.9 -2.3-1.5-5.4-0.9-6.9 1.5l-24.4 37.5c-18.3-7.5-38.7-11.7-60.2-11.7 -21.6 0-41.9 4.2-60.2 11.7l-24.3-37.5c-1.5-2.4-4.6-3-6.9-1.5 -2.3 1.5-3 4.6-1.5 6.9l23.5 36.3c-42.4 20.8-71 59.9-71 104.8 0 2.8 0.2 5.5 0.4 8.2h280.1c0.2-2.7 0.4-5.4 0.4-8.2C393 103.9 364.4 64.8 322 44zM187.7 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4S195.1 108.9 187.7 108.9zM317.5 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4C331 102.9 325 108.9 317.5 108.9zM437.9 164.7h-1.3c-16.6 0-30.2 13.6-30.2 30.1v131.1c0 16.6 13.6 30.1 30.2 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C468 178.3 454.5 164.7 437.9 164.7z"/></svg>
                <span>אנדרואיד</span>
            </a>
        </div>
    </div>


    <div id="popupModal" class="white-popup-block mfp-hide popupModal">
            <div class="popUpTitle">
            	<h3>לאן לשלוח את ההטבה?</h3>
            </div>
	        <div class="sharebenefit c">
		    	<figure>
			    	<a class="popup-modal" href="#popupModalMail">
			    		<span>
			    			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 510 510" xml:space="preserve"><path d="M459 51H51C23 51 0 74 0 102v306c0 28.1 23 51 51 51h408c28.1 0 51-22.9 51-51V102C510 74 487.1 51 459 51zM459 153L255 280.5 51 153v-51l204 127.5L459 102V153z"/></svg>
			    			<b>בדוא''ל</b>
			    		</span>
			    	</a>
		    	</figure>
		    	<figure>
		    		<a class="popup-modal" href="#popupModalSMS">
			    		<span>
			    			<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 510 510"><path d="M459 408L102 408 0 510 0 51C0 23 23 0 51 0L459 0C487.1 0 510 23 510 51L510 357C510 385.1 487.1 408 459 408ZM163.8 168C165 166.2 166.6 165.3 168.6 165.3 170.5 165.3 172.6 165.7 174.8 166.6L176.8 167.3C177.2 167.5 178 167.9 179 168.4 180.1 168.9 180.8 169.2 181.2 169.4 181.5 169.6 182.3 170 183.5 170.7 184.7 171.3 185.5 171.7 185.8 171.9L193.7 153C184.9 147.7 176.1 145.1 167.1 145.1 158.1 145.1 150.8 147.9 145.2 153.4 139.5 158.9 136.7 166.4 136.7 175.8 136.7 182.6 138.2 188.5 141.3 193.5 144.3 198.5 149.1 203.3 155.5 207.8 157.4 209.1 158.9 210.3 160.2 211.3 161.4 212.3 162.8 213.5 164.2 215.1 165.6 216.6 166.7 218.2 167.4 220 168.2 221.8 168.5 224 168.5 226.5 168.5 229 167.8 231.2 166.5 232.9 165.1 234.6 163.1 235.5 160.5 235.5 154.8 235.5 146.5 232 135.9 225L135.9 249.1C143.4 253.4 152.2 255.5 162.4 255.5 172.5 255.5 180.3 252.8 185.8 247.3 191.3 241.8 194 234 194 223.7 194 216.9 192.4 211 189.1 206.1 185.8 201.2 180.9 196.6 174.3 192.2 171 190 168.3 187.8 166 185.4 164.7 184 163.7 182.4 163.1 180.8 162.4 179.1 162.1 177 162.1 174.5 162.1 172 162.7 169.8 163.8 168ZM305 146.6L268.8 146.6C268.1 149.6 263 173.1 253.5 217L238.2 146.6 202.4 146.6 202.4 254.1 226.7 254.1 226.7 194.3 240.1 254.1 266.9 254.1 280.2 193.9 280.2 254.1 305 254.1 305 146.6ZM342.9 168C344.1 166.2 345.7 165.3 347.6 165.3 349.6 165.3 351.7 165.7 353.9 166.6L355.8 167.3C356.3 167.5 357 167.9 358.1 168.4 359.2 168.9 359.9 169.2 360.3 169.4 360.6 169.6 361.4 170 362.6 170.7 363.8 171.3 364.6 171.7 364.9 171.9L372.8 153C364 147.7 355.2 145.1 346.2 145.1 337.2 145.1 329.9 147.9 324.3 153.4 318.6 158.9 315.8 166.4 315.8 175.8 315.8 182.6 317.3 188.5 320.4 193.5 323.4 198.5 328.2 203.3 334.6 207.8 336.5 209.1 338 210.3 339.3 211.3 340.5 212.3 341.8 213.5 343.3 215.1 344.7 216.6 345.8 218.2 346.5 220 347.2 221.8 347.6 224 347.6 226.5 347.6 229 346.9 231.2 345.5 232.9 344.2 234.6 342.2 235.5 339.6 235.5 333.9 235.5 325.6 232 314.9 225L314.9 249.1C322.5 253.4 331.3 255.5 341.5 255.5 351.6 255.5 359.4 252.8 364.9 247.3 370.4 241.8 373.1 234 373.1 223.7 373.1 216.9 371.5 211 368.2 206.1 364.9 201.2 359.9 196.6 353.4 192.2 350.1 190 347.4 187.8 345.1 185.4 343.8 184 342.8 182.4 342.2 180.8 341.5 179.1 341.2 177 341.2 174.5 341.2 172 341.8 169.8 342.9 168Z"/></svg>
				    		<b>ב-SMS</b>
			    		</span>
		    		</a>
		    	</figure>
		    	<!--
		    	<figure>
		    		<a href="" class="disabled">
		    			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 326.1 326.1" xml:space="preserve"><path d="M164.3 0C76.4 0 5 71.4 5 159.2c0 30 8.3 59 24.1 84.3L3.3 312.6c-1.4 3.7-0.5 7.8 2.3 10.6 1.9 1.9 4.5 2.9 7.1 2.9 1.2 0 2.4-0.2 3.5-0.6l71.4-26.7c23.4 12.9 49.9 19.7 76.8 19.7 87.8 0 159.2-71.4 159.2-159.2C323.5 71.4 252.1 0 164.3 0zM241 209.2c-4.4 15.8-21.1 27.3-39.5 27.3 -1.8 0-3.6-0.1-5.4-0.3 -22.4-3.2-48.7-18.6-70.3-41.2 -22.7-21.7-38.1-48-41.2-70.2 -3.1-22.5 7-39.3 27-44.9 1-0.3 2.1-0.4 3.2-0.4 11.7 0 25.6 16.5 30.5 28.4 3.2 7.7 2.9 13.7-0.7 17.2 -9 8.9-12.4 14.2-12 19.2 0.4 5.5 5.6 11.9 14.3 21.1 1.1 1.2 2.6 2.7 4.3 4.4 1.6 1.6 3.1 3 4.4 4.3 9.8 9.3 16.1 14.4 21.9 14.4 4.8 0 9.9-3.4 18.4-12 1.3-1.3 3.7-2.9 7.7-2.9 10.5 0 25.4 10.3 32.7 19.9C240.6 199.1 242.3 204.6 241 209.2z"/></svg>
		    		</a>
		    		<span>זמין בקרוב</span>
		    	</figure>
		    	-->
		    </div>
			<!--<div class="popUpLinks c">
				<b>זמין גם</b>
				<a href="<?php the_field('appstore','option');?>">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><path d="M395.7 272c-0.6-64.8 52.9-95.9 55.3-97.5 -30.1-44-76.9-50-93.6-50.7 -39.9-4-77.8 23.5-98 23.5 -20.2 0-51.4-22.9-84.5-22.3 -43.5 0.6-83.5 25.3-105.9 64.2 -45.2 78.4-11.6 194.4 32.4 258 21.5 31.1 47.1 66 80.8 64.8 32.4-1.3 44.7-21 83.9-21 39.2 0 50.2 21 84.5 20.3 34.9-0.6 57-31.7 78.3-62.9 24.7-36.1 34.9-71 35.5-72.8C463.7 375.3 396.4 349.5 395.7 272zM331.3 81.8C349.1 60.1 361.2 30 357.9 0c-25.7 1-56.9 17.1-75.4 38.8 -16.6 19.2-31.1 49.8-27.2 79.2C284.1 120.2 313.4 103.4 331.3 81.8z"/></svg>
				</a>
				<a href="<?php the_field('googleplay','option');?>">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 505.1 505.1" xml:space="preserve"><path d="M68.5 164.7h-1.3c-16.6 0-30.1 13.6-30.1 30.1v131.1c0 16.6 13.5 30.1 30.1 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C98.7 178.3 85.1 164.7 68.5 164.7zM113.1 376.5c0 15.2 12.4 27.6 27.7 27.6h29.6v70.8c0 16.6 13.6 30.2 30.1 30.2h1.3c16.6 0 30.2-13.5 30.2-30.2v-70.8h41.3v70.8c0 16.6 13.6 30.2 30.2 30.2h1.3c16.6 0 30.1-13.5 30.1-30.2v-70.8h29.6c15.2 0 27.7-12.4 27.7-27.6V169.5H113.1V376.5zM322 44l23.5-36.3c1.5-2.3 0.8-5.4-1.5-6.9 -2.3-1.5-5.4-0.9-6.9 1.5l-24.4 37.5c-18.3-7.5-38.7-11.7-60.2-11.7 -21.6 0-41.9 4.2-60.2 11.7l-24.3-37.5c-1.5-2.4-4.6-3-6.9-1.5 -2.3 1.5-3 4.6-1.5 6.9l23.5 36.3c-42.4 20.8-71 59.9-71 104.8 0 2.8 0.2 5.5 0.4 8.2h280.1c0.2-2.7 0.4-5.4 0.4-8.2C393 103.9 364.4 64.8 322 44zM187.7 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4S195.1 108.9 187.7 108.9zM317.5 108.9c-7.4 0-13.5-6-13.5-13.5 0-7.5 6-13.4 13.5-13.4 7.5 0 13.5 6 13.5 13.4C331 102.9 325 108.9 317.5 108.9zM437.9 164.7h-1.3c-16.6 0-30.2 13.6-30.2 30.1v131.1c0 16.6 13.6 30.1 30.2 30.1h1.3c16.6 0 30.1-13.6 30.1-30.1V194.8C468 178.3 454.5 164.7 437.9 164.7z"/></svg>
				</a>
			</div>-->
                    
            <div class="popUpLicence">
                <label>
                    <input id="popUpLicence" type="checkbox" name="check" value="check">
                    <span>
                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 79.5" xml:space="preserve"><path d="M39.8 0C17.8 0 0 17.8 0 39.8c0 22 17.8 39.8 39.8 39.8 22 0 39.8-17.8 39.8-39.8C79.5 17.8 61.7 0 39.8 0zM34.1 58.5L15.4 39.8l7.5-7.5 11.2 11.2 22.5-22.5 7.5 7.5L34.1 58.5z" fill="#010002"/></svg>
                    	אני מאשר את 
                    	<a href="#" class="popup-modal" target="_blank">תנאי השימוש</a>
                    </span>
                </label>
            </div>
            <!--
            <div class="c popup_buy">
                    <a>
                            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 475.1 475.1" xml:space="preserve"><path d="M365.4 402c0 10.1 3.6 18.7 10.7 25.8 7.1 7.1 15.7 10.7 25.8 10.7 10.1 0 18.7-3.6 25.8-10.7 7.1-7.1 10.7-15.7 10.7-25.8s-3.6-18.7-10.7-25.8c-7.1-7.1-15.7-10.7-25.8-10.7 -10.1 0-18.7 3.6-25.8 10.7C369 383.3 365.4 391.9 365.4 402zM469.7 78.5c-3.6-3.6-7.9-5.4-12.8-5.4H113.9c-0.2-1.3-0.6-3.8-1.3-7.3 -0.7-3.5-1.2-6.3-1.6-8.4 -0.4-2.1-1.1-4.6-2.1-7.6 -1-3-2.3-5.3-3.7-7 -1.4-1.7-3.3-3.2-5.7-4.4 -2.4-1.2-5.1-1.9-8.1-1.9H18.3c-5 0-9.2 1.8-12.8 5.4C1.8 45.6 0 49.9 0 54.8s1.8 9.2 5.4 12.8c3.6 3.6 7.9 5.4 12.9 5.4h58.2l50.5 235c-0.4 0.8-2.3 4.4-5.9 10.8 -3.5 6.5-6.3 12.1-8.4 17 -2.1 4.9-3.1 8.6-3.1 11.3 0 4.9 1.8 9.2 5.4 12.9 3.6 3.6 7.9 5.4 12.9 5.4h18.3 255.8 18.3c4.9 0 9.2-1.8 12.8-5.4 3.6-3.6 5.4-7.9 5.4-12.9 0-4.9-1.8-9.2-5.4-12.8 -3.6-3.6-7.9-5.4-12.8-5.4h-262.7c4.6-9.1 6.9-15.2 6.9-18.3 0-1.9-0.2-4-0.7-6.3s-1-4.8-1.7-7.6c-0.7-2.8-1.1-4.8-1.3-6.1l298.1-34.8c4.8-0.6 8.7-2.6 11.7-6.1 3-3.5 4.6-7.6 4.6-12.1V91.4C475.1 86.4 473.3 82.1 469.7 78.5zM109.6 402c0 10.1 3.6 18.7 10.7 25.8 7.1 7.1 15.8 10.7 25.8 10.7 10.1 0 18.7-3.6 25.8-10.7 7.1-7.1 10.7-15.7 10.7-25.8s-3.6-18.7-10.7-25.8c-7.1-7.1-15.7-10.7-25.8-10.7 -10.1 0-18.7 3.6-25.8 10.7C113.2 383.3 109.6 391.9 109.6 402z"/></svg></span>
                            <b>קנה את זה עכשיו</b>
                    </a>
                    <div class="popup_buy_window">
                            <span>זמין בקרוב</span>
                            <a><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 348.3 348.3" xml:space="preserve"><path d="M336.6 68.6L231 174.2l105.5 105.5c15.7 15.7 15.7 41.1 0 56.9 -7.8 7.8-18.1 11.8-28.4 11.8 -10.3 0-20.6-3.9-28.4-11.8L174.2 231 68.6 336.6c-7.8 7.8-18.1 11.8-28.4 11.8 -10.3 0-20.6-3.9-28.4-11.8 -15.7-15.7-15.7-41.1 0-56.8l105.5-105.5L11.8 68.6c-15.7-15.7-15.7-41.1 0-56.8 15.7-15.7 41.1-15.7 56.8 0l105.6 105.6L279.7 11.8c15.7-15.7 41.1-15.7 56.8 0C352.3 27.5 352.3 52.9 336.6 68.6z"/></svg></a>
                    </div>
            </div>
            -->
      		<a class="popup-modal-x popup-modal-dismiss" href="#">
      			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><polygon points="612 36 576.5 0.6 306 270.6 35.5 0.6 0 36 270.5 306 0 576 35.5 611.4 306 341.4 576.5 611.4 612 576 341.5 306 "/></svg>
      		</a>
        </div>
        

<?php get_footer(); ?>


