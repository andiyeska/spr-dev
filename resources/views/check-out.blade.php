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
								<form action="/user/register/event/submit" method="post" role="form" style="display: block;">
									@csrf
									<h2 class="col-md-12 ta-l">Personal Information</h2>
									<h6 class="col-md-12 font-s ta-l"></h6>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 ml-16">
											<div class="form-group">
												<label for="fname">Name</label>
												<p>{{$user->details->first_name}} {{$user->details->last_name}}</p>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 ml-16">
											<div class="form-group">
												<label for="fname">Phone number</label>
												<p>{{$user->details->phone_number}}</p>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 ml-16">
											<div class="form-group">
												<label for="lname">Email address</label>
												<p>{{$user->username}}</p>
											</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-lg-12">
												<h2 class="col-md-12 ta-l">Your Order</h2>
												<h6 class="col-md-12 font-s ta-l" style="margin-bottom: 40px;"></h6>
												@if($isFunRun)
													<div class="form-group col-md-12 col-xs-12">
														<input class="col-md-2 text-right" style="width: 64px;" type="number" value="1" disabled>
														<span class="col-md-3">Fun Run Ticket</span>
														<span class="col-md-offset-5 sum-price" id="price-fun-run" price="{{$event->price}}" style="color: grey; padding-left: 10px; width: 100px;"></span>
													</div>
													<hr style="border: 0.5px solid lightgrey">
													<!-- /funrun ticket -->
													<input type="hidden" name="medicalRecord" value="{{$medicalRecord}}">
													<input type="hidden" name="shirtSize" value="{{$shirtSize}}" required>
													<!-- festival ticket -->
													<div class="form-group col-md-12 col-xs-12">
														<input class="col-md-2 text-right" style="width: 64px;" type="number" min="1" max="3" tabindex="1" value="1" disabled>
														<span class="col-md-3">Festival Ticket</span>
														<span class="col-md-offset-5" style="color: grey; padding-left: 10px; width: 100px;">Free</span>
													</div>
													<!-- /festival ticket -->					
												@else
													<!-- festival ticket -->
													<div class="form-group col-md-12 col-xs-12">
														<input class="col-md-2 text-right" style="width: 64px;" type="number" min="1" max="3" tabindex="1" value="{{$quantity}}" disabled>
														<span class="col-md-3">Festival Ticket</span>
														<span class="col-md-offset-5" id="price-festival" price="{{$event->price}}" quantity="{{$quantity}}" style="color: grey; padding-left: 10px; width: 100px;"></span>
													</div>
													<!-- /festival ticket -->
													<input type="hidden" name="quantity" value="{{$quantity}}" required>
												@endif
												
												<hr style="border: 0.5px solid lightgrey">
												<div class="form-group col-md-12 col-xs-12">
													<span class="col-md-4">Unique Code</span>
													<span class="col-md-offset-5 sum-price" id="unique-code" style="color: grey; padding-left: 24px; width: 100px;">{{$uniqueFee}}</span>
													<input type="hidden" name="uniqueFee" value="{{$uniqueFee}}">
												</div>
												<hr style="border: 1px solid black">
												<div class="form-group col-md-12 col-xs-12">
													<span class="col-md-4">Total price</span>
													<span class="col-md-offset-5 sum-price" id="total" total="{{$total}}" style="color: grey; padding-left: 24px; width: 100px;">
												</div>
												<input type="hidden" name="isFunRun" 
												value="{{$isFunRun}}" 
												required>
												<div class="form-group signin-input mt-16">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<h6 class="col-md-12 font-s ta-c"><strong>pay your order</strong> to finish your order</h6>
															<button type="submit" class="form-control btn btn-signin">PROCEED TO PAY</button>
														</div>
													</div>
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
			
			var priceFunRun = $("#price-fun-run").attr("price");
			$('#price-fun-run').text(OSREC.CurrencyFormatter.format(priceFunRun, { currency: 'IDR' }));
			
			var priceFestival = $("#price-festival").attr("price");
			var quantity = $("#price-festival").attr("quantity");
			$("#price-festival").text(OSREC.CurrencyFormatter.format(priceFestival * quantity, { currency: 'IDR' }));
			
			var total = $("#total").attr("total");
			$("#total").text(OSREC.CurrencyFormatter.format(total, { currency: 'IDR' }));
			
		});
	</script>

</body>

</html>