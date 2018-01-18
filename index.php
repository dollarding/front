<!doctype html>
<html lang="he" ng-app="Coupit">
	<head>
		<meta charset="utf-8">
		<base href="/">
		<title>Newdeals</title>
		<meta id="id" property="fb:app_id" content="190322544333196"/>
		<meta id="article" property="og:type" content="article" />
		<meta id="title" property="og:title" content="NewDeals" />
		<meta id="url" property="og:url" content="/">
		<meta id="description" property="og:description" content="רק הטבות טובות" />
		<meta id="image" property="og:image" content="/img/logo.png"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=5.0">
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,700&amp;subset=hebrew" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
		<link rel="manifest" href="/img/favicons/manifest.json">
		<link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#fc0733">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
		<link href="assets/global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
		<link href="assets/global/plugins/bower_components/jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css" rel="stylesheet">
		<link href="assets/global/plugins/bower_components/chosen_v1.2.0/chosen.min.css" rel="stylesheet">
		<link href="assets/admin/css/reset.css" rel="stylesheet">
		<link href="assets/admin/css/layout.css" rel="stylesheet">
		<link href="assets/admin/css/plugins.css" rel="stylesheet">
		<link href="assets/admin/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="css/animate.css" >
		<link rel="stylesheet" type="text/css" href="css/popup.css">
		<script src="assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/global/plugins/bower_components/typehead.js/dist/handlebars.js"></script>
		<script src="assets/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js"></script>
		<script src="assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js"></script>
		<script src="assets/global/plugins/bower_components/jquery.sparkline.min/index.js"></script>
		<script src="assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
		<script src="assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
		<script src="assets/global/plugins/bower_components/bootbox/bootbox.js"></script>
		<script src="js/sticky-kit.min.js"></script>
		<script src="js/script.js"></script>

		<!--/ END CORE PLUGINS -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-66387150-1', 'auto');
			ga('send', 'pageview');
		</script>

		<!-- Facebook Pixel Code -->
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq)
					return;
				n = f.fbq = function() {
					n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq)
					f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '668600609956234');
			fbq('track', "PageView");
		</script>

		<script type='text/javascript' src="/languages/he.js" ></script>
		<script  type='text/javascript' src="/languages/en.js"></script>
		<script type="text/javascript"  src="/js/languageScript.js"></script>
	</head>
	<body >
		<div canvas="container">
			<script>
				pepe = function() {
					$(".collapse").collapse('hide');
				}
			</script>
			<nav>

				<div class="navbar navbar-inverse navbar-fixed-top" >
					<div class="container ">
						<div class="hd">
							<a class="openMenu js-toggle-main-menu">
								<svg viewBox="0 0 250.6 250.6"><path d="M22.4 76.1h205.8c12.4 0 22.4-10 22.4-22.4 0-12.4-10-22.4-22.4-22.4H22.4C10 31.3 0 41.3 0 53.7 0 66.1 10 76.1 22.4 76.1zM228.2 102.9H22.4C10 102.9 0 112.9 0 125.3c0 12.4 10 22.4 22.4 22.4h205.8c12.4 0 22.4-10 22.4-22.4C250.6 112.9 240.6 102.9 228.2 102.9zM228.2 174.5H22.4C10 174.5 0 184.5 0 196.9c0 12.4 10 22.4 22.4 22.4h205.8c12.4 0 22.4-10 22.4-22.4C250.6 184.5 240.6 174.5 228.2 174.5z"/></svg>
							</a>
							<a class="logo" href="/">
								<img src="img/logo.png" alt="NewDeals">
							</a>
						</div>
					</div>
				</div>
			</nav>

			<div id="fb-root"></div>
			<script>
				( function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id))
							return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.6&appId=190322544333196";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
			</script>

			<div ng-view>

			</div>
			</div>

			<!-- START @PAGE LEVEL PLUGINS -->
			<script src="assets/global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
			<script src="assets/global/plugins/bower_components/jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js"></script>
			<script src="assets/global/plugins/bower_components/holderjs/holder.js"></script>
			<script src="assets/global/plugins/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
			<script src="assets/global/plugins/bower_components/jquery-autosize/jquery.autosize.min.js"></script>
			<script src="assets/global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js"></script>
			<!--/ END PAGE LEVEL PLUGINS -->

			<!-- START @PAGE LEVEL SCRIPTS -->
			<script src="assets/admin/js/apps.js"></script>
			<script src="assets/admin/js/pages/blankon.form.element.js"></script>
			<script src="assets/admin/js/demo.js"></script>
			<!--/ END PAGE LEVEL SCRIPTS -->

			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.js"></script>
			<!--    <script src="https://code.angularjs.org/1.5.3/angular-route.min.js"></script>-->
			<script src="js/angular-route.js"></script>
			<script src="js/controller.js"></script>
			<script src="js/adnetwork.js"></script>
			<script src="js/angulike.js"></script>
			<script src="js/ng-map.min.js"></script>
			<script src="js/slidebars.min.js"></script>

			<!--   <script src="js/languageScript.js"></script>
			--><script src="js/ui-bootstrap-tpls-1.3.2.js"></script>

			<div class="basement">
				<section>
					<div class="basement-social">
						<a href="" target="_blank">
						<svg x="0" y="0" viewBox="0 0 96.1 96.1" xml:space="preserve">
							<path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z"/>
						</svg></a>
						<a href="" target="_blank">
						<svg x="0" y="0" viewBox="0 0 97.4 97.4" xml:space="preserve">
							<path d="M12.5 0h72.4c6.9 0 12.5 5.1 12.5 12.5v72.4c0 7.4-5.6 12.5-12.5 12.5H12.5C5.6 97.4 0 92.3 0 84.9V12.5C0 5.1 5.6 0 12.5 0L12.5 0zM70.9 10.8c-2.4 0-4.4 2-4.4 4.4v10.5c0 2.4 2 4.4 4.4 4.4h11c2.4 0 4.4-2 4.4-4.4V15.2c0-2.4-2-4.4-4.4-4.4H70.9L70.9 10.8zM86.4 41.2h-8.6c0.8 2.6 1.3 5.5 1.3 8.4 0 16.2-13.6 29.3-30.3 29.3 -16.7 0-30.3-13.1-30.3-29.3 0-2.9 0.4-5.7 1.3-8.4h-8.9v41.1c0 2.1 1.7 3.9 3.9 3.9h67.8c2.1 0 3.9-1.7 3.9-3.9V41.2H86.4zM48.8 29.5c-10.8 0-19.6 8.5-19.6 19 0 10.5 8.8 19 19.6 19 10.8 0 19.6-8.5 19.6-19C68.4 38 59.6 29.5 48.8 29.5z"/>
						</svg></a>
						<a href="" target="_blank">
						<svg x="0" y="0" viewBox="0 0 96.8 96.8" xml:space="preserve">
							<path d="M62.6 0H39.5c-10.3 0-17.4 2.3-23.8 7.6 -5 4.4-8.1 10.7-8.1 16.9 0 9.6 7.3 19.8 20.9 19.8 1.3 0 2.8-0.1 4-0.3l-0.2 0.5c-0.5 1.3-1.1 2.5-1.1 4.5 0 3.8 1.8 6.1 3.6 8.3l0.2 0.3 -0.4 0c-5.6 0.4-16 1.1-23.7 5.8 -9 5.4-9.7 13.1-9.7 15.4 0 9 8.4 18.1 27.1 18.1 21.8 0 33.1-12 33.1-23.9 0-8.8-5.1-13.1-10.6-17.7l-4.6-3.6c-1.4-1.2-3.2-2.6-3.2-5.4 0-2.7 1.8-4.4 3.3-6l0.2-0.2c5-3.9 10.6-8.4 10.6-18 0-9.7-6-14.6-8.9-17h7.7c0.1 0 0.2 0 0.3-0.1l6.6-4.1c0.2-0.1 0.3-0.3 0.2-0.6C63 0.1 62.8 0 62.6 0zM34.6 91.5c-13.3 0-22.2-6.2-22.2-15.4 0-6 3.6-10.4 10.8-13 5.7-1.9 13.2-2 13.2-2 1.3 0 1.9 0 2.9 0.1 9.3 6.6 13.7 10.1 13.7 16.7C53.1 86.3 46 91.5 34.6 91.5zM34.5 40.8c-11.1 0-15.8-14.6-15.8-22.5 0-4 0.9-7 2.8-9.4 2-2.5 5.5-4.2 8.8-4.2 10.2 0 15.9 13.7 15.9 23.2 0 1.5 0 6.1-3.1 9.2C40.9 39.3 37.5 40.8 34.5 40.8zM95 45.2H82.8V33.1c0-0.3-0.2-0.5-0.5-0.5H77.1c-0.3 0-0.5 0.2-0.5 0.5v12.1H64.5c-0.3 0-0.5 0.2-0.5 0.5v5.3c0 0.3 0.2 0.5 0.5 0.5H76.6V63.7c0 0.3 0.2 0.5 0.5 0.5h5.2c0.3 0 0.5-0.2 0.5-0.5V51.5h12.2c0.3 0 0.5-0.2 0.5-0.5v-5.3C95.5 45.4 95.3 45.2 95 45.2z"/>
						</svg></a>
					</div>
					<div class="copyright">
						<p>© 2018 Newdeals.co.il | Phone: 054-2376699 | Email: <a href="mailto:info@newdeals.co.il">info@newdeals.co.il</a></p>
					</div>
					<div class="basement-actions">
						<div class="newsletter">
							<form name="form.userForm" ng-submit="sendNewslater(emails)">
								<input required="" type="email" name="email" ng-model="emails" placeholder="מייל לקבלת הטבות">
								<button type="submit" ng-disabled="form.userForm.email.$invalid && !form.userForm.email.$pristine">הרשמה</button>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div off-canvas="sitemenu right overlay">
			<a class="js-close-main-menu">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 348.3 348.3"><path d="M336.6 68.6L231 174.2l105.5 105.5c15.7 15.7 15.7 41.1 0 56.9 -7.8 7.8-18.1 11.8-28.4 11.8 -10.3 0-20.6-3.9-28.4-11.8L174.2 231 68.6 336.6c-7.8 7.8-18.1 11.8-28.4 11.8 -10.3 0-20.6-3.9-28.4-11.8 -15.7-15.7-15.7-41.1 0-56.8l105.5-105.5L11.8 68.6c-15.7-15.7-15.7-41.1 0-56.8 15.7-15.7 41.1-15.7 56.8 0l105.6 105.6L279.7 11.8c15.7-15.7 41.1-15.7 56.8 0C352.3 27.5 352.3 52.9 336.6 68.6z"/></svg>
			</a>
			<ul class="site-menu">
				<li><a href="/#/">דף הבית</a></li>
				<li><a href="/#/terms/">תקנון  </a></li>
				<!--<li><a href="/#/newproduct/">נסו עכשיו בחינם!</a></li>
				<li><a href="/#/contact/">צור קשר</a></li>-->
			</ul>
		</div>
	</body>
</html>
