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
					<li class="strong"><a class="strong" href="/user/profile">Profile</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-signin" style="padding: 40px;">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="signin-form" action="/user/register/event" method="post" role="form" style="display: block;">
									@csrf
									<h2 class="col-md-12 ta-l">Personal Information</h2>
									<h6 class="col-md-12 font-s ta-l">we will keep your data, <strong>only for this event</strong></h6>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 ml-16">
											<div class="form-group">
												<label for="fname">First name</label>
												<input type="text" id="fname" name="firstName" class="form-control personal" placeholder="Your first name"  
												value="{{$user->first_name}}" 
												required disabled>
											</div>
										</div>
										<input type="hidden" name="isFunRun" value="false" required>
										<input type="hidden" name="uniqueFee" value="{{$uniqueFee}}" required>
										<div class="col-lg-5 col-md-5 col-sm-5 ml-16">
											<div class="form-group">
												<label for="lname">Last name</label>
												<input type="text" id="lname" name="lastName" class="form-control" placeholder="Your last name" 
												value="{{$user->last_name}}" 
												required disabled>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 ml-16">
											<div class="form-group">
												<label for="pnumber">Phone number</label>
												<input type="text" id="pnumber" name="phoneNumber" tabindex="1" class="form-control" placeholder="Your phone number" 
												value="{{$user->phone_number}}" 
												required disabled>
											</div>
										</div>
									</div>
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a onclick="editdata()" data-toggle="tooltip" data-placement="left" title="Click To Edit Data" id="edit-data" tabindex="5" style="text-decoration: none; cursor: pointer">data not valid?</a>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group signin-input">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<a href="#summaryinfo" class="form-control btn btn-signin">NEXT</a>
											</div>
										</div>
									</div>
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

	<!-- CTA -->
	<div class="section" style="margin-top: 0px" id="summaryinfo">
		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-signin" style="padding: 40px;">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
									<h2 class="col-md-12 ta-l">Your order</h2>
									<h6 class="col-md-12 font-s ta-l" style="margin-bottom: 40px;">below are summary of your order. <strong>please read it carefully</strong>.</h6>
									<!-- funrun ticket -->
									<div class="form-group col-md-12 col-xs-12">
										<input class="col-md-2" style="width: 64px;" type="number" min="1" max="3" name="quantity" tabindex="1" value="1">
										<span class="col-md-3">Festival Ticket</span>
										<span class="col-md-offset-5" id="sum-price" price="{{$event->price}}" style="color: grey; padding-left: 10px; width: 100px;">Free</span>
									</div>
									<!-- /funrun ticket -->
									<hr style="border: 1px solid black">
									<div class="form-group signin-input">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" class="form-control btn btn-signin">CONFIRM ORDER</button>
											</div>
										</div>
									</div>
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
	</form>
	<!-- /CTA -->

	<!-- jQuery Plugins -->
	<script src="/ix/js/jquery.min.js"></script>
	<script src="/ix/js/currencyFormatter.js"></script>
	<script src="/ix/js/bootstrap.min.js"></script>
	<script src="/ix/js/jquery.waypoints.min.js"></script>
	<script src="/ix/js/owl.carousel.min.js"></script>
	<script src="/ix/js/jquery.stellar.min.js"></script>
	<script src="/ix/js/jquery.countTo.js"></script>
	<script src="/ix/js/main.js"></script>
	<script>
		$(document).ready(function(){
			
			$('[data-toggle="tooltip"]').tooltip(); 
			
			var price = $("#sum-price").attr('price');
			var tot_price = 0;
			
			tot_price = price * $('input[name=quantity]').val(); 
			
			$('#sum-price').text(OSREC.CurrencyFormatter.format(tot_price, { currency: 'IDR' }));
			
			$('input[name=quantity]').change(
			   	function(){				
			   	   tot_price = price * $('input[name=quantity]').val(); 
			   	   $('#sum-price').text(OSREC.CurrencyFormatter.format(tot_price, { currency: 'IDR' }));
			});
			
			$('#toggle-button-tc').click(
			   	function(){				
			   	   	$('#tc').toggle(100);
			});

		});

		function editdata(){
			
			document.getElementById('fname').removeAttribute("disabled");
			document.getElementById('lname').removeAttribute("disabled");
			document.getElementById('pnumber').removeAttribute("disabled");
			document.getElementById('edit-data').style.visibility = "hidden";
			
		};
	</script>

</body>

</html>