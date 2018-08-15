<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>SPARE | Fun Run & Festival by FKM UI</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="/ix/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="/ix/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="/ix/css/owl.theme.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
	
	<!-- favicon  -->
	<link rel="icon" href="/ix/img/logospare.png">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="/ix/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="header">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="/">
						<img class="logo-img" src="/ix/img/spare-xii-neo-bromello-white.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a class="strong" href="/">Home</a></li>
					<li class="active"><a class="strong" href="/about-us">About Us</a></li>
					<li><a class="strong" href="/fun-run">Fun Run</a></li>
					<li><a class="strong" href="/festival">Festival</a></li>
					<li><a class="strong" href="/news">News</a></li>
					<li><a class="strong" href="
						@if(Auth::check())
							/user/profile
						@else
							/signin
						@endif
						">
							@if(Auth::check())
								Profile
							@else
								Signin
							@endif
						</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Home -->
	<div id="home">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/bg2.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
							<img src="img/logospare.png" style="width: 40%; margin-bottom: 16px">
							<h4 class="lead-title">SPARE <span class="gradient" style="font-weight: lighter">XII NEO</span></h4>
							<h6 class="lead">Sport and Art Event that runs by Fakultas Kesehatan Masyarakat, University of Indonesia</h6>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>What's</span> <span class="gradient">New?</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about spare content -->
					<div class="about-content">
						<p>As you know, in 2018 SPARE is already entering the 12th volume! The name “NEO” added alongside SPARE XII because it has some differences from the preceding years.</p>

						<p>SPARE in previous years consists various series of competitions which are includes basketball, futsal, band, modern dance and photography competition. Today, SPARE will be used as a means of health promotion consisting of just 2 main events including Fun Run and Art Festival.
						</p>
					</div>
					<!-- /about spare content -->

					<!-- Numbers -->
					<div id="numbers">
						<!-- row -->
						<div class="row">
							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter gradient" data-from="0" data-to="1" data-speed="1000">1</span></h3>
									<p>Venue</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter gradient" data-from="0" data-to="2" data-speed="1000">1</span></h3>
									<p>Events</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter gradient" data-from="0" data-to="10" data-speed="1000">0</span>+</h3>
									<p>Performances</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter gradient" data-from="0" data-to="20" data-speed="1000">0</span>+</h3>
									<p>Benefits</p>
								</div>
							</div>
							<!-- /number -->
						</div>
						<!-- /row -->
					</div><br><br>
					<!-- /Numbers -->
					<div id="the-events">
						<div class="section-title">
							<h3 class="title"><span>The</span> <span class="gradient">Events</span></h3>
						</div>
						<a href="/fun-run" class="img-btn"><img id="funrun-thumb" src="ix/img/fun run 3.png" style="width: 20%"></a>
						<a href="/festival" class="img-btn"><img id="festival-thumb" src="ix/img/festival 3.png" style="width: 20%"></a>
					</div>
				</div>
				<script>
					
				</script>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/theme.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<h2>Our <span style="color: #dd0a37;">Theme</span></h2>
						<div class="about-content">
							<p>HEALTHY HEART FOR A BETTER FUTURE is our theme for SPARE this year.</p><hr><p> Why do we chose that theme? Heart health does worth your attention no matter what your age because heart disease is nothing to ignore and it can strike both the old and young. One effort that can be made to minimize the prevalence of heart disease is through prevention that aims to raise public awareness about heart disease and healthy life style. Furthermore, we hope by holding an event with healthy heart issue, SPARE XII NEO can be impactful and beneficial for society in improving knowledge and positive attitude toward heart disease.</p>
						</div>
						<a href="#" class="main-btn">join us</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

	<!-- Sponsors -->
	<div id="sponsors" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Sponsors</span></h3>
				</div>
				<!-- /section title -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Sponsors -->

	<!-- Contact -->
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contact</span> <span style="color: #dd0a37;">Info</span></h3>
				</div>
				<!-- /section title -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Address</h3>
						<p>Jalan Prof. Dr. Sujudi, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424, Indonesia</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Official Line</h3>
						<p>@bby2266y</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="#">cs@spare.com</a>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<!-- Map -->
		<div id="map"></div>
		<!-- /Map -->
	</div>
	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.html">
						</a>
					</div>
				</div>
				<!-- /footer logo -->

				<!-- contact social -->
				<div class="col-md-4 col-md-push-4">
					<div class="contact-social">
						<a href="https://www.youtube.com/channel/UC1k7q2pWaFum0Mvt3DNGdvw"><i class="fa fa-youtube-play"></i></a>
						<a href="https://twitter.com/sparefkmui"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/sparefkmui/"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<!-- /contact social -->

				<!-- copyright -->
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<!-- /copyright -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="/ix/js/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$('#funrun-thumb').mouseover(
			   	function(){				
			   	   	$('#funrun-thumb').width('22%');
			});
			$('#funrun-thumb').mouseout(
			   	function(){				
			   	   	$('#funrun-thumb').width('20%');
			});
			$('#festival-thumb').mouseover(
			   	function(){				
			   	   	$('#festival-thumb').width('22%');
			});
			$('#festival-thumb').mouseout(
			   	function(){				
			   	   	$('#festival-thumb').width('20%');
			});

		});
	</script>
	
	<script src="/ix/js/bootstrap.min.js"></script>
	<script src="/ix/js/jquery.waypoints.min.js"></script>
	<script src="/ix/js/owl.carousel.min.js"></script>
	<script src="/ix/js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="/ix/js/google-map.js"></script>
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>

</body>

</html>