<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tablea</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('css/css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/css/magnific-popup.css')}}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{asset('css/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('css/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('js/js/respond.min.js')}}"></script>
	<![endif]-->
        @yield('style')    


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="/tablea/tablea/public/">طبلية <em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="/tablea/tablea/public/qutes/">الباقات</a></li>
						<li class="has-dropdown">
							<a href="services.html">الوجبات</a>
							<ul class="dropdown text-center">
								<li class="text-center"><a href="mealsvall/1">الفطار</a></li>
								<li class="text-center"><a href="mealsvall/2">الغداء</a></li>
								<li class="text-center"><a href="mealsvall/3">العشاء</a></li>
							</ul>
						</li>
						<!--<li><a href="contact.html">تواصل معنا</a></li>-->
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
@yield('content')
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>تواصل</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>جدنا على</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2019 Tablea All Rights Reserved.</small> 
						<small class="block">Designed by 18</small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('js/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('js/js/jquery.countTo.js')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('js/js/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('js/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/js/magnific-popup-options.js')}}"></script>
	
	<script src="{{asset('js/js/moment.min.js')}}"></script>
	<script src="{{asset('js/js/bootstrap-datetimepicker.min.js')}}"></script>


	<!-- Main -->
	<script src="{{asset('js/js/main.js')}}"></script>

	</body>
</html>

