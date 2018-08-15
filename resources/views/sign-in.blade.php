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
	<link type="text/css" rel="stylesheet" href="/ix/css/bootstrap-datepicker.min.css" />

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
					<li><a class="strong" href="/fun-run">Fun Run</a></li>
					<li><a class="strong" href="/festival">Festival</a></li>
					<li><a class="strong" href="/news">News</a></li>
					<li class="active"><a class="strong" href="/signin">Sign in</a></li>
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
		<div class="section-bg" style="background-image:url(/img/background03.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-signin">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="signin-form-link">Sign In</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="signin-form" action="/signin/submit" method="POST" style="display: block;">
									@csrf
									<h4 class="signin-title">Sign in to <span class="gradient">SPARE</span></h4>
									<h6 style="font-weight: 100; text-align: center;">sign in to your profile and see <strong>SPARE XII NEO</strong>'s latest news</h6>
									
									@if($alert == 'signInFail')
										<div class="alert alert-danger signin-input" style="height: 80	px; padding: 16px; margin-bottom: 16px; ">
										  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 	<span style="cursor: pointer;" aria-hidden="true">&times;</span>
											 </button>
										  	<strong>Try again</strong><br>Email or password doesn't match<br>
										</div> 
									@endif

									@if($alert == 'signedUp')
										<div class="alert alert-success signin-input" style="height: 80	px; padding: 16px; margin-bottom: 16px; ">
										  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 	<span style="cursor: pointer;" aria-hidden="true">&times;</span>
											 </button>
										  	<strong>Sign up success!</strong><br>Check your email registered for confirmation.<br>
										</div>
									@endif

									@if($alert == 'usernameExist')
										<div class="alert alert-danger signin-input" style="height: 80	px; padding: 16px; margin-bottom: 16px; ">
										  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 	<span style="cursor: pointer;" aria-hidden="true">&times;</span>
											 </button>
										  	<strong>Sorry</strong><br>Email already exist. Check your email for confirmation or try to signin.<br>
										</div>  
									@endif
									
									@if($alert == 'activated')
										<div class="alert alert-success signin-input" style="height: 80	px; padding: 16px; margin-bottom: 16px; ">
										  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 	<span style="cursor: pointer;" aria-hidden="true">&times;</span>
											 </button>
										  	<strong>Email Confirmed!</strong><br>Now you can sign in to start register on our events!<br>
										</div>
									@endif

									<div class="form-group signin-input">
										<input type="text" name="username" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group signin-input">
										<input type="password" name="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group signin-input text-center" style="padding-top: 20px; padding-bottom:16px;">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember" style="font-weight: lighter"> Remember Me</label>
									</div>
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="signin-submit" id="signin-submit" tabindex="4" class="form-control btn btn-signin" value="Sign In">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" 
								action="/signup/submit" method="post" role="form" style="display: none;">
									@csrf
									<h4 class="signin-title">Register to <span class="gradient">SPARE</span></h4>
									<h6 style="font-weight: 100; text-align: center;">become part of <strong>SPARE XII NEO</strong> and see the greatness of it</h6>
									<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group">
												<label for="firstName">First name</label>
												<input type="text" tabindex="1" 
												class="form-control" 
												placeholder="Your first name" 
												name="firstName" required>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5">
											<div class="form-group">
												<label for="lastName">Last name</label>
												<input type="text" tabindex="1" 
												class="form-control" 
												placeholder="Your last name" 
												name="lastName" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group">
												<label for="username">Email</label>
												<input type="email" tabindex="1" 
												class="form-control" 
												placeholder="Your email address" 
												name="username" required> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group pw">
												<label for="password">Password</label>
												<input type="password" tabindex="2" 
												class="form-control" 
												placeholder="Your password" 
												name="password" id="pw1" min="8" required>
												<p class="pw-length-alert" style="color: red; display: none;">password must be minimum of 8 characters length</p>
												<p class="pw-alert" style="color: red; display: none;">password not match</p>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5">
											<div class="form-group pw">
												<label for="confirm-password">Confirm Password</label>
												<input type="password" name="confirm-password" tabindex="2" class="form-control" placeholder="Repeat your password" id="pw2" required>
												<p class="pw-alert" style="color: red; display: none;">password not match</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group">
												<label for="address">Address</label>
												<textarea tabindex="3"
												class="form-control" 
												placeholder="Your address" 
												style="resize: vertical;"
												name="address" required></textarea> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group">
												<label for="gender">Gender</label>
												<select class="form-control" tabindex="4" 
												name="gender" required>
												    <option value="" disabled selected style="display: none;">Your gender</option>
												    <option value="1">Laki-laki</option>
												    <option value="2">Perempuan</option>
												 </select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-4">
											<div class="form-group">
												<label for="birthDate">Birthdate</label>
												<input type="text" 
												data-provide="datepicker" 
												data-date-format="dd/mm/yyyy" tabindex="5" 
												data-date-end-date="0d" 
												class="form-control" placeholder="DD/MM/YYYY" 
												name="birthDate" id="birthDate" required> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group phone">
												<label for="phoneNumber">Phone Number</label>
												<div class="input-group">
											    	<div class="input-group-addon">
											      	+62
											    	</div>
											    	<input type="text" tabindex="6" 
													class="form-control" id="phone" placeholder="Your phone" 
													name="phoneNumber" required>
											 	</div>
											 	<p class="phone-alert" style="color: red; display: none;">please input valid phone number</p> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
											<div class="form-group">
												<label for="knowMediaId">From where you know us</label>
												<select class="form-control" 
												tabindex="7" name="mediaId" required>
												    <option value="" disabled selected style="display: none;">I know SPARE from...</option>
												    @foreach($medias as $media)

												    	<option value="{{ $media->id }}">{{ $media->media }}</option>

												    @endforeach
												 </select>
											</div><br>
										</div>
									</div>
									
									
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="register-submit" id="register-submit" tabindex="8" class="form-control btn btn-register">Finish my register</button>
											</div>
										</div>
									</div><br>	
								</form>
							</div>
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
	<script src="/ix/js/bootstrap-datepicker.min.js"></script>
	<script src="/ix/js/jquery.waypoints.min.js"></script>
	<script src="/ix/js/owl.carousel.min.js"></script>
	<script src="/ix/js/jquery.stellar.min.js"></script>
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>
	<script src="/ix/js/signin.js"></script>

</body>

</html>