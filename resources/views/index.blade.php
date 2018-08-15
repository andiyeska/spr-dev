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
			  <script src="/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
					<a class="logo" href="">
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
					<li class="active"><a class="strong" href="/">Home</a></li>
					<li><a class="strong" href="/about-us">About Us</a></li>
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
								Sign in
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
		<div class="section-bg" style="background-image:url(ix/img/bg.jpg)" data-stellar-background-ratio="0.5"></div>
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
							<h1 id="countdown"></h1>
							<h4 class="lead-title">SPARE <span class="gradient" style="font-weight: lighter">XII NEO</span></h4>
							<h6 class="lead"><strong>Sport and Art Event </strong> that runs by <span style="color: #dd0a37;"><strong>Fakultas Kesehatan Masyarakat</strong></span>, University of Indonesia</h6>
							<h6 style="color: white; font-weight: 100">University of Indonesia, 15 July 2018. Register yourself before 30 June 2018
							</h6><br>
							<a href="
								@if(Auth::check())
									/about-us#the-events
								@else
									/signin
								@endif
								" class="main-btn">
							Register now</a>
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
					<h3 class="title"><span>About</span> <span class="gradient">SPARE</span></h3>
					<img style="width: 20%;" src="/img/logospare.png">
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about spare content -->
					<div class="about-content">
						<p>SPARE XII NEO stands for Sport and Arts Event. SPARE is one of the annual flagship program of Public Health Faculty Universitas Indonesia which aim to promote health in a way as attractive as possible by keeping up with the times.</p>
					</div>
					<!-- /about spare content -->
					<br>
					<div class="more-about-us">
						<a href="//about-us" class="main-btn">Know More</a>
					</div>
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->
	
	<!-- Video CTA -->
	<div id="video-cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(/ix/img/background02.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<h2>take a peek of the event</h2>
						<iframe width="100%" height="527" src="https://www.youtube.com/embed/4ecxqrHT1m0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Video CTA -->

		<!-- Event Schedule -->
	<div id="schedule" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Event</span> <span style="color: #dd0a37;">Schedule</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2">

					<div class="events-wrapper">
						<!-- event -->
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">17</span>
									<span class="year">August, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i>00 : 00</p>
								<h3 class="event-title">SPARE Registration is Open</h3>
								<p>This is the start date for you who want to buy Fun-Run and Festival Ticket</p>
							</div>
						</div>
						<!-- /event -->

						<!-- event -->
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">TBH</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> All day</p>
								<h3 class="event-title">Open Recruitment Band Audition</p>
							</div>
						</div>
						<!-- /event -->

						<!-- event -->
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">5-7</span>
									<span class="year">Oktober, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i>08 : 00 - 16 : 00</p>
								<h3 class="event-title">Racepack Collection</h3>
								<p>it is required for all participants to collect their race pack within the stated race pack collection period</p>
								<p>at <a href="#">Faculty of Public Health, University of Indonesia</a></p>
							</div>
						</div>
						<!-- /event -->

						<!-- event -->
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">21</span>
									<span class="year">November, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i>06 : 30 - 15 : 00</p>
								<h3 class="event-title">SPARE Day</h3>
							</div>
						</div>
						<!-- /event -->

						<!-- event -->
						<div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 06 : 30 AM - 15 : 00 AM</p>
								<h3 class="event-title">Fun Run</h3>
								<p>The FUN RUN will be held with a 5 km long track, provides
								refreshment at the start line and water station every 2.5 km distance.
								Along the running track, there’s information about health, especially
								heart health, which aims to educate the runners.</p>
								<p>At <a href="#">University of Indonesia</a></p>
							</div>
						</div>
						<!-- /event -->

						<!-- event -->
						<div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 09 : 00 AM - 15 : 00 AM</p>
								<h3 class="event-title">Festival</h3>
								<p>The FESTIVAL consists of open tenants, games, live mural from the
								mural community, open stage performances, band audition
								performances and guest star performances. Visitors can directly
								watch the mural-making with the heart issue theme.</p>
								<p>In <a href="#">Faculty of Public Health, University of Indonesia</a></p>
							</div>
						</div>
						<!-- /event -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Event Schedule -->
	<!-- Speakers -->
	<div id="speakers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Gueststar</span></h3>
				</div>
				<!-- section title -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#">
						<div class="speaker-img">
							<img src="/ix/img/speaker01-copy.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#">
						<div class="speaker-img">
							<img src="/ix/img/speaker02-copy.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#">
						<div class="speaker-img">
							<img src="/ix/img/speaker03-copy.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker modal -->
				<!-- 
				<div id="speaker-modal-1" class="speaker-modal modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="speaker-modal-img">
											<img src="/./ix/img/speaker-info.jpg" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="speaker-modal-content">
											<h2 class="speaker-name">John Doe</h2>
											<span class="speaker-job">- Manager, CEO</span>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

											<div class="speaker-website">
												<h4>Website</h4>
												<a href="/#">www.johndoe.com</a>
											</div>

											<div class="speaker-social">
												<h4>Social Profile</h4>
												<a href="/#"><i class="fa fa-facebook"></i></a>
												<a href="/#"><i class="fa fa-twitter"></i></a>
												<a href="/#"><i class="fa fa-instagram"></i></a>
												<a href="/#"><i class="fa fa fa-linkedin"></i></a>
											</div>

											<div class="speaker-events">
												<h4>Sessions</h4>
												<div class="speaker-event">
													<span><strong>Day 1 -</strong> February 20, 2018 8 : 00 AM - 11 : 00 AM</span>
													<p>His id altera fabellas facilisis. Has eros assueverit cu</p>
												</div>

												<div class="speaker-event">
													<span><strong>Day 2 -</strong> February 20, 2018 8 : 00 AM - 11 : 00 AM</span>
													<p>At mucius deserunt delicatissimi eam, labitur detraxit ut sit</p>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				 -->
				<!-- /speaker modal -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Speakers -->

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
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="/#" class="sponsor">
						<img src="/ix/img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Sponsors -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(ix/img/ticket.jpg)" data-stellar-background-ratio="0.5"></div>
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
						<a href="/#" class="main-btn">join us</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

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
	<script src="/ix/js/bootstrap.min.js"></script>
	<script src="/ix/js/jquery.waypoints.min.js"></script>
	<script src="/ix/js/owl.carousel.min.js"></script>
	<script src="/ix/js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="/ix/js/google-map.js"></script>
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>
	
	<script type="text/javascript">
					var eventDate = new Date("Sep 5, 2018 00:00:00").getTime();

					var x = setInterval(function() {
						var now = new Date().getTime();
						var distance = eventDate - now;

						var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						var seconds = Math.floor((distance % (1000 * 60)) / 1000);

						document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s " ;
						if(distance < 0){
							clearInterval(x);
							document.getElementById("countdown").innnerHTML = "WE'RE LIVE!"
						}
					})
	</script>

</body>

</html>