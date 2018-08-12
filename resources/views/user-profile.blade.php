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
					<li><a class="strong" href="/fun-run">Fun Run</a></li>
					<li><a class="strong" href="/festival">Festival</a></li>
					<li><a class="strong" href="/news">News</a></li>
					<li class="active"><a href="/user/profile" class="strong">Profile</a></li>
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
		<div class="section-bg" style="background-image:url(/ix/img/ticket.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
			<div class="col-md-6">
				<div class="panel panel-signin">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="signin-form" action="/user/profile/update" method="post" role="form" style="display: block;">
									@csrf
									<h2 class="col-md-12 ta-l">Personal Information</h2>
									<h6 class="col-md-12 font-s ta-l">we will keep your data, <strong>only for this event</strong></h6>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 ml-16">
											<div class="form-group">
												<label for="fname">First name</label>
												<input type="text" id="fname" tabindex="1" class="form-control personal" 
												value="{{$user->details->first_name}}" 
												name="firstName" 
												disabled>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 ml-16">
											<div class="form-group">
												<label for="lname">Last name</label>
												<input type="text" id="lname" tabindex="1" class="form-control" 
												value="{{$user->details->last_name}}" 
												name="lastName" 
												disabled>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 ml-16">
											<div class="form-group">
												<label for="pnumber">Phone number</label>
												<input type="text" id="pnumber" tabindex="1" class="form-control" 
												value="{{$user->details->phone_number}}" 
												name="phoneNumber" 
												disabled>
											</div>
										</div>
									</div>
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a onclick="editdata()" tabindex="5" id="edit-data" style="text-decoration: none; cursor: pointer">data not valid?</a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="hidden" th:field="*{userId">
												<button type="submit" id="confirm-data-change" class="form-control btn btn-warning" style="visibility: hidden">CONFIRM CHANGE</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-signin">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<h2 class="col-md-12 ta-l">Order Information</h2>
								<h6 class="col-md-12 font-s ta-l">below are information related to your order given this year</h6>
								
								@foreach($registrations as $registration)
									<a href="/user/order/{{$registration->registration_code}}">
										<div class="col-md-12 card transaction-card">
											<h2 class="col-md-12 col-sm-12 col-xs-12 card-number strong">{{$loop->iteration}}</h2>
											<span class="col-md-6 col-sm-12 col-xs-12">ORDER ID:
												<span class="strong">{{$registration->registration_code}}</span>
											</span>
											@if($registration->status === 1)
												<span class="col-md-6 col-sm-12 col-xs-12 label label-info">Waiting For Payment</span>
											@elseif($registration->status === 2)
												<span class="col-md-6 col-sm-12 col-xs-12 label label-danger">Rejected</span>
											@elseif($registration->status === 3)
												<span class="col-md-6 col-sm-12 col-xs-12 label label-warning">Waiting For Confirmation</span>
											@elseif($registration->status === 4)
												<span class="col-md-6 col-sm-12 col-xs-12 label label-success">Order Approved</span>
											@else
												<span th:case="5" class="col-md-6 col-sm-12 col-xs-12 label label-success">Order Expired</span>
											@endif
										</div>
									</a>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-offset-4 col-md-4">
				<div class="panel panel-signin">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<a href="/signout" id="signout" class="form-control btn btn-signin">SIGN OUT</a>
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
		function editdata(){
			document.getElementById('fname').removeAttribute("disabled");
			document.getElementById('lname').removeAttribute("disabled");
			document.getElementById('pnumber').removeAttribute("disabled");
			document.getElementById('edit-data').style.visibility = "hidden";
			document.getElementById('confirm-data-change').style.visibility = "visible";
		}
	</script>
	
	<script src="/ix/js/bootstrap.min.js"></script>
	<script src="/ix/js/jquery.waypoints.min.js"></script>
	<script src="/ix/js/owl.carousel.min.js"></script>
	<script src="/ix/js/jquery.stellar.min.js"></script>
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>

</body>

</html>