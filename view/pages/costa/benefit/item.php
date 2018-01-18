	
	<figure class="mix {{categories}}">
		<div class="couponContainer">
			<a href="/benefit/{{_id}}" class="couponImage" style="background-image:url({{this.couponImageThumbnail}});"></a>
			<div class="owl-desc">
				<h3><a href="/benefit/{{_id}}">{{couponName}}</a></h3>
				<span>{{MarketingStatement}}</span>
			</div>
			<div class="owl-biz c">
				<img alt="{{businessName}}" src="{{logoThumbnail}}" class="titleCouponLogo">
				<span class="owl-biz-name">{{businessName}}</span>
			</div>
			<div class="owl-price c">
				<b>&#8362;{{cellPrice}}</b>
				<span>&#8362;{{tariff}}</span>
			</div>
			<p class="couponInArchive">
				<a href="#popupModal{{_id}}" class="popup-modal">תן לי את זה</a>
				
				<!-- send via email popup Items-->

				<div id="popupModalMail{{_id}}" class="white-popup-block mfp-hide popupModal">
					<div class="popUpTitle">
		          		<a class="popup-modal-dismiss popup-modal" href="#popupModal{{_id}}">
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


				<div id="popupModalSMS{{_id}}" class="white-popup-block mfp-hide popupModal">
					<div class="popUpTitle">
		          		<a class="popup-modal-dismiss popup-modal" href="#popupModal{{_id}}">
		          			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 370.8 370.8" xml:space="preserve"><polygon points="292.9 24.8 268.8 0 77.9 185.4 268.8 370.8 292.9 346 127.6 185.4 "/></svg>
		          		</a>
		          		<h3>&nbsp</h3>

	          		</div>
					<div class="sendEmailContainer c">
						<?php echo do_shortcode('[contact-form-7 id="346" title="תן לי את זהSMS"]');?>
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


				
			     <div id="popupModal{{_id}}" class="white-popup-block mfp-hide popupModal">
	                <div class="popUpTitle">
	                	<h3>לאן לשלוח את ההטבה?</h3>
	                </div>
	                <div class="sharebenefit c">
				    	<figure>
				    		<a class="popup-modal" href="#popupModalMail{{_id}}">
				    			<span>
					    			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 510 510" xml:space="preserve"><path d="M459 51H51C23 51 0 74 0 102v306c0 28.1 23 51 51 51h408c28.1 0 51-22.9 51-51V102C510 74 487.1 51 459 51zM459 153L255 280.5 51 153v-51l204 127.5L459 102V153z"/></svg>
					    			<b>בדוא''ל</b>
				    			</span>
				    		</a>
				    	</figure>
				    	<figure>
				    		<a class="popup-modal" href="#popupModalSMS{{_id}}">
				    			
				    				<span>
			    					<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 510 510"><path d="M459 408L102 408 0 510 0 51C0 23 23 0 51 0L459 0C487.1 0 510 23 510 51L510 357C510 385.1 487.1 408 459 408ZM163.8 168C165 166.2 166.6 165.3 168.6 165.3 170.5 165.3 172.6 165.7 174.8 166.6L176.8 167.3C177.2 167.5 178 167.9 179 168.4 180.1 168.9 180.8 169.2 181.2 169.4 181.5 169.6 182.3 170 183.5 170.7 184.7 171.3 185.5 171.7 185.8 171.9L193.7 153C184.9 147.7 176.1 145.1 167.1 145.1 158.1 145.1 150.8 147.9 145.2 153.4 139.5 158.9 136.7 166.4 136.7 175.8 136.7 182.6 138.2 188.5 141.3 193.5 144.3 198.5 149.1 203.3 155.5 207.8 157.4 209.1 158.9 210.3 160.2 211.3 161.4 212.3 162.8 213.5 164.2 215.1 165.6 216.6 166.7 218.2 167.4 220 168.2 221.8 168.5 224 168.5 226.5 168.5 229 167.8 231.2 166.5 232.9 165.1 234.6 163.1 235.5 160.5 235.5 154.8 235.5 146.5 232 135.9 225L135.9 249.1C143.4 253.4 152.2 255.5 162.4 255.5 172.5 255.5 180.3 252.8 185.8 247.3 191.3 241.8 194 234 194 223.7 194 216.9 192.4 211 189.1 206.1 185.8 201.2 180.9 196.6 174.3 192.2 171 190 168.3 187.8 166 185.4 164.7 184 163.7 182.4 163.1 180.8 162.4 179.1 162.1 177 162.1 174.5 162.1 172 162.7 169.8 163.8 168ZM305 146.6L268.8 146.6C268.1 149.6 263 173.1 253.5 217L238.2 146.6 202.4 146.6 202.4 254.1 226.7 254.1 226.7 194.3 240.1 254.1 266.9 254.1 280.2 193.9 280.2 254.1 305 254.1 305 146.6ZM342.9 168C344.1 166.2 345.7 165.3 347.6 165.3 349.6 165.3 351.7 165.7 353.9 166.6L355.8 167.3C356.3 167.5 357 167.9 358.1 168.4 359.2 168.9 359.9 169.2 360.3 169.4 360.6 169.6 361.4 170 362.6 170.7 363.8 171.3 364.6 171.7 364.9 171.9L372.8 153C364 147.7 355.2 145.1 346.2 145.1 337.2 145.1 329.9 147.9 324.3 153.4 318.6 158.9 315.8 166.4 315.8 175.8 315.8 182.6 317.3 188.5 320.4 193.5 323.4 198.5 328.2 203.3 334.6 207.8 336.5 209.1 338 210.3 339.3 211.3 340.5 212.3 341.8 213.5 343.3 215.1 344.7 216.6 345.8 218.2 346.5 220 347.2 221.8 347.6 224 347.6 226.5 347.6 229 346.9 231.2 345.5 232.9 344.2 234.6 342.2 235.5 339.6 235.5 333.9 235.5 325.6 232 314.9 225L314.9 249.1C322.5 253.4 331.3 255.5 341.5 255.5 351.6 255.5 359.4 252.8 364.9 247.3 370.4 241.8 373.1 234 373.1 223.7 373.1 216.9 371.5 211 368.2 206.1 364.9 201.2 359.9 196.6 353.4 192.2 350.1 190 347.4 187.8 345.1 185.4 343.8 184 342.8 182.4 342.2 180.8 341.5 179.1 341.2 177 341.2 174.5 341.2 172 341.8 169.8 342.9 168Z"/></svg>
			    					<b>ב-SMS</b>
		    					</span>
		    				</a>
							
				    	</figure>
				    </div>

	          		<a class="popup-modal-x popup-modal-dismiss" href="#">
	          			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 612 612" xml:space="preserve"><polygon points="612 36 576.5 0.6 306 270.6 35.5 0.6 0 36 270.5 306 0 576 35.5 611.4 306 341.4 576.5 611.4 612 576 341.5 306 "/></svg>
	          		</a>
	            </div>
			</p>
		</div>
	</figure>



