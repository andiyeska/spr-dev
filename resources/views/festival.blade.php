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
	<link type="text/css" rel="stylesheet" href="/ix/css/owl.theme.default.css" />

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
					<li><a class="strong" href="/about-us">About Us</a></li>
					<li><a class="strong" href="/fun-run">Fun Run</a></li>
					<li class="active"><a class="strong" href="/festival">Festival</a></li>
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

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/crowd.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="home-content">
						<img class="center" src="/ix/img/festival 3.png" style="width: 50%; margin-bottom: 16px">
						<h6 class="lead text-center">with a healthy heart, <strong>the beat goes on</strong></h6>
						<div class="row">
							<a href="/user/register/event?event=festival" class="main-btn ta-c col-md-5">buy ticket</a>
							<a href="#" class="main-btn col-md-6 col-md-offset-1">download guideline</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>About</span> <span style="color: #dd0a37;">Festival</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about spare content -->
					<div class="about-content">
						<p>The FESTIVAL presents art performances that is package the heart health issue
						in the attractive form that aims to facilitate the public in understanding a heart
						health issue.</p><br>
						<p>SPARE XII NEO theme is revealed in a subtheme “WITH A HEALTHY HEART,
						THE BEAT GOES ON” which means that with a good heart condition, the
						heartbeat will continue to beat like a vengeful music. This subtheme will be the
						overall theme of the FESTIVAL, covering the art and decoration of the
						FESTIVAL.</p><br>
						<span>the FESTIVAL will be held at:</span>
						<div class="row">
							<div class="center col-md-12" style="padding: 24px;margin-top: 8px;background-color: lightgrey; border-radius: 100px; width: 100%">
								<div class="col-md-5"><i class="fa fa-calendar" style="font-size: 36px;"></i><br>Sunday, 21st of October 2018</div>
								<div class="col-md-2"><i class="fa fa-clock-o" style="font-size: 36px;"></i><br>09.00-15.00</div>
								<div class="col-md-5"><i class="fa fa-map" style="font-size: 36px;"></i><br>Universitas Indonesia<br> (at the FUN RUN finish line)</div>
							</div>
						</div>
					</div>
					<!-- /about spare content -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /About -->

	<!-- Galery -->
	<div id="galery">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- galery owl -->
				<div id="galery-owl" class="owl-carousel owl-theme">
					<!-- galery item -->
					<div class="galery-item">
						<img src="/ix/img/gueststar.jpg" alt="">
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<div class="galery-item">
						<img src="/ix/img/mural.jpg" alt="">
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<div class="galery-item">
						<img src="/ix/img/band.jpg" alt="">
					</div>
					<!-- /galery item -->
					
					<!-- galery item -->
					<div class="galery-item">
						<img src="/ix/img/tenants.jpg" alt="">
					</div>
					<!-- /galery item -->

				</div>
				<!-- /galery owl -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Galery -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>The</span> <span style="color: #dd0a37;">Gueststar</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about spare content -->
					<div class="about-content">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<a id="gueststar1" class="sponsor">
							<img src="ix/img/com.jpg" alt="">
							<button id="player-gs1" class="text-front-centered main-btn" disabled>Listen</button>
						</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<a id="gueststar2" class="sponsor">
							<img src="ix/img/ing.jpg" alt="">
							<button id="player-gs2" class="text-front-centered main-btn" disabled>Listen</button>
						</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<a id="gueststar3" class="sponsor">
							<img src="ix/img/soon.jpg" alt="">
							<button id="player-gs3"class="text-front-centered main-btn" disabled>Listen</button>
						</a>
					</div>
					<!-- /about spare content -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /About -->

	<!-- About -->
	<div id="about" class="section" style="padding-top: 0px">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>The</span> <span style="color: #dd0a37;">Map</span></h3>
				</div>
				<!-- /section title -->

				<img style="width: 100%" src="ix/img/rute.png">
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /About -->


	<!-- About -->
	<div id="about" class="section" style="padding-top: 90px; background-color: #111; color: white;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title col-md-12 col-sm-12" style=" text-align: left">
					<img src="/ix/img/dont.png" style="width: 56px"><br><br>
					<h3 class="title" style="color: white;">Don't</h3>
					<a href="https://drive.google.com/file/d/1SFBcwVCAsONtLnqGQall2378Edw45J-N/view?usp=sharing" style="color: #dd0a37">Click this to see things you can't do in here</a>
				</div>
				<!-- /section title -->
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /About -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/ticket.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<h2>Get Ticket Now!</h2>
						<a href="/user/register/event?event=festival" class="main-btn">buy ticket</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>

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
		var song1 = document.getElementById("myAudio1");
		var song2 = document.getElementById("myAudio2");
		var song3 = document.getElementById("myAudio3");
		var played1 = 0;
		var played2 = 0; 
		var played3 = 0;  

		$(document).ready(function(){
			$('#gueststar1').click(

			   	function(){	
			   		if(played1 == 0){
			   			song1.play();
			   			
			   			if(played2 == 1){
			   				song2.pause();
			   				$('#player-gs2').text('resume');
			   				played2 = 0;
			   			}
			   			if(played3 == 1){
			   				song3.pause();
			   				$('#player-gs3').text('resume');
			   				played3 = 0;
			   			}
			   			played1 = 1;
			   			$('#player-gs1').text('pause');
			   		}		
			   		else if(played1 == 1){
			   			song1.pause();
			   			played1 = 0;
			   			$('#player-gs1').text('resume');
			   		}
			});
			$('#gueststar2').click(

			   	function(){	
			   		if(played2 == 0){
			   			song2.play();
			   			if(played1 == 1){
			   				song1.pause();
			   				$('#player-gs1').text('resume');
			   				played1 = 0;

			   			}
			   			if(played3 == 1){
			   				song3.pause();
			   				$('#player-gs3').text('resume');
			   				played3 = 0;
			   			}
			   			played2 = 1;
			   			$('#player-gs2').text('pause');
			   		}		
			   		else if(played2 == 1){
			   			song2.pause();
			   			played2 = 0;
			   			$('#player-gs2').text('resume');
			   		}
			});
			$('#gueststar3').click(

			   	function(){	
			   		if(played3 == 0){
			   			song3.play();
			   			if(played2 == 1){
			   				song2.pause();
			   				$('#player-gs2').text('resume');
			   				played2 = 0;
			   			}
			   			if(played1 == 1){
			   				song1.pause();
			   				$('#player-gs1').text('resume');
			   				played1 = 0;
			   			}
			   			played3 = 1;
			   			$('#player-gs3').text('pause');
			   		}		
			   		else if(played3 == 1){
			   			song3.pause();
			   			played3 = 0;
			   			$('#player-gs3').text('resume');
			   		}
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