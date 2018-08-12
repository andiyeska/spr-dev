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
					<li><a class="strong" href="/about-us">About Us</a></li>
					<li class="active"><a class="strong" href="/fun-run">Fun Run</a></li>
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

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/run.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="home-content">
							<img class="center" src="/ix/img/fun run 3.png" style="width: 50%; margin-bottom: 16px">
							<h6 class="lead" style="text-align: center">A <strong>run </strong>full of <strong>joy</strong></h6>
							<a href="#" class="main-btn center ta-c" style="width: 280px;">download guideline</a>
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
					<h3 class="title"><span>About</span> <span style="color: #dd0a37;">Fun Run</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about spare content -->
					<div class="about-content">
						<p>FUN RUN is one of the events in SPARE XII NEO that is done to maintain heart
						health by improving the quality of healthy life. According to research, running
						about 30 miles per week can reduce the risk of death due to cardiovascular
						disease. The more you move, your heart will adapt more quickly and not easy to
						feel tired. Running also can help us find creative ideas and make us happier than
						before.</p><br>

						<span>the Fun Run will be held at:</span>
						<div class="row">
							<div class="center col-md-12" style="padding: 24px;margin-top: 8px;background-color: lightgrey; border-radius: 100px; width: 100%">
								<div class="col-md-5"><i class="fa fa-calendar" style="font-size: 36px;"></i><br>Sunday, 21st of October 2018</div>
								<div class="col-md-2"><i class="fa fa-clock-o" style="font-size: 36px;"></i><br>06.30-15.00</div>
								<div class="col-md-5"><i class="fa fa-map" style="font-size: 36px;"></i><br>Universitas Indonesia<br></div>
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

	<!-- Racepack -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/racepack.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<!-- section title -->
						<div class="section-title">
							<h3 class="title" style="color: #ffffff;"><span>the</span> <span style="color: #dd0a37;">race pack</span></h3>
						</div>
						<!-- /section title -->

						<!-- sponsor -->
						<div class="col-md-4 col-sm-4 col-xs-6">
							<a href="#" class="sponsor">
								<img src="ix/img/racepack 1.png" alt="">
								<span class="whitefont">Lorem</span>
							</a>
						</div>
						<!-- /sponsor -->

						<!-- sponsor -->
						<div class="col-md-4 col-sm-4 col-xs-6">
							<a href="#" class="sponsor">
								<img src="ix/img/racepack 1.png" alt="">
								<span class="whitefont">Lorem</span>
							</a>
						</div>
						<!-- /sponsor -->

						<!-- sponsor -->
						<div class="col-md-4 col-sm-4 col-xs-6">
							<a href="#" class="sponsor">
								<img src="ix/img/racepack 1.png" alt="">
								<span class="whitefont">Lorem</span>
							</a>
						</div>
						<!-- /sponsor -->
						<span class="whitefont font-s">the racepack will be given at:</span>
						<div class="row">
							<div class="center whitefont font-s col-md-12" style="padding: 24px; margin-top: 8px; background-color: #dd0a37; border-radius: 100px; width: 100%">
								<div class="col-md-5"><i class="fa fa-calendar" style="font-size: 36px;"></i><br>5-7th October 2018</div>
								<div class="col-md-2"><i class="fa fa-clock-o" style="font-size: 36px;"></i><br>08.00-16.00</div>
								<div class="col-md-5"><i class="fa fa-map" style="font-size: 36px;"></i><br>Universitas Indonesia<br></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Racepack -->

	<!-- Prize -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>The</span> <span style="color: #dd0a37;">Prize</span></h3>
				</div>
				<!-- /section title -->
				<!-- sponsor -->
				<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3">
					<div class="card">
						<img src="/ix/img/gold-medal.png" style="width: 80px; height: 80px; position: absolute;">
					  	<div class="card-container" >
					   		<h2 class="text-center"><b>1st<span class="font-s">place</span></b></h2>
					   		<h1 class="text-center gradient"><span class="font-s" style="font-size: 16px;">worth </span>Rp3.000.000</h1>  
					  	</div>
					</div>
				</div>
				<!-- /sponsor -->
				

			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /Prize -->

	<!-- Route -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>The</span> <span style="color: #dd0a37;">Route</span></h3>
				</div>
				<!-- /section title -->
				<img src="ix/img/rute.png" style="width: 100%">

			</div>
			<!-- row -->
		</div>
	</div>
	<!-- /Route -->

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
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="/user/register/event?event=fun-run" class="main-btn">join us</a>
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
						<p>2635 Simons Hollow Road, NEW YORK</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Phone</h3>
						<p>570-751-2415</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="#">event@support.com</a>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				

				<!-- contact social -->
				<div class="col-md-4 col-md-push-8">
					<div class="contact-social">
						<a href="#"><i class="fa fa-youtube-play"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<!-- /contact social -->

				<!-- copyright -->
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</span>
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
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>

</body>

</html>