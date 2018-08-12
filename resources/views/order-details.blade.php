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
							<div class="col-md-12">
								<h5 class="ml-16">ORDER ID: {{$registration->registration_code}}</h5>
								@if($registration->status === 1)
									<span class="col-md-5 label label-info ml-16">Waiting For Payment</span>
								@elseif($registration->status === 2)
									<span class="col-md-5 label label-danger ml-16">Rejected</span>
								@elseif($registration->status === 3)
									<span class="col-md-5 label label-warning ml-16">Waiting For Confirmation</span>
								@elseif($registration->status === 4)
									<span class="col-md-5 label label-success ml-16">Order Approved</span>
								@elseif($registration->status === 5)
									<span class="col-md-5 label label-success ml-16">Order Expired</span>
								@endif
								<br><br>
								
									<h2 class="col-md-12 text-left">Personal Information</h2>
									<h6 class="col-md-12 font-s text-left"></h6>
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
											<div style="display: block;">
												<h2 class="col-md-12 ta-l">Your Order</h2>
												<h6 class="col-md-12 font-s ta-l" style="margin-bottom: 40px;"></h6>
												
												@if(!is_null($registration->funRun))
													<!-- funrun ticket -->
													<div class="form-group col-md-12 col-xs-12">
														<span class="col-md-1">1</span>
														<span class="col-md-3">Fun Run Ticket</span>
														<span class="col-md-offset-5" id="price-fun-run" 
														fee="{{$registration->funRun->registration_fee}}" style="color: grey; padding-left: 24px; width: 100px;"></span>
														@if(!is_null($registration->funRun->run_number))
															<div id="tc" class="col-md-12 ta-c" style="padding: 16px; background-color: #f6f6f6; border-radius: 4px; color: grey;">
																Run Number (Nomor Lari) : <span class="strong">{{$registration->funRun->run_number}}</span>
															</div>
														@endif
													</div>
													<hr style="border: 0.5px solid lightgrey">
													<!-- /funrun ticket -->
												@endif
												@if(!is_null($registration->festival))
													<!-- festival ticket -->
													<div class="form-group col-md-12 col-xs-12">
														<span class="col-md-1">{{$registration->festival->quantity}}</span>	
														<span class="col-md-3">Festival Ticket</span>
														<span class="col-md-offset-5" id="price-festival" fee="{{$registration->festival->registration_fee}}" style="color: grey; padding-left: 24px; width: 100px;">
															@if($registration->festival->registration_fee === 0)
																FREE
															@endif
														</span>
													</div>
													<hr style="border: 0.5px solid lightgrey">
													<!-- /festival ticket -->
												@endif
												<div class="form-group col-md-12 col-xs-12">
													<span class="col-md-4">Unique Code</span>
													<span class="col-md-offset-5" style="color: grey; padding-left: 24px; width: 100px;">{{$registration->unique_fee}}</span>
												</div>
												<hr style="border: 1px solid black">
												<div class="form-group col-md-12 col-xs-12">
													<span class="col-md-4 strong">Total price</span>
													<span class="col-md-offset-5 strong" id="total" total="{{$total}}" style="color: grey; padding-left: 24px; width: 100px;"></span>
												</div>
												@if($registration->status <= 2)
													<form action="/user/payment/upload/{{$registration->registration_code}}" enctype="multipart/form-data" method="post" role="form" style="display: block;">
														@csrf
														<br><br><br><hr>
														<div>
															<h4 class="ta-c">Transfer to</span></h4>
															<img class="center" src="/ix/img/BNI.png" alt="BANK BNI" style="width: 15%; margin-bottom: 8px;">
															<h2 id="norek" class="text-center" style="margin-bottom: 8px;">0714205634<button class="btn btn-secondary" onclick="copy('0714205634')">SALIN</button></h2>
															<h5 class="text-center">a/n Nadya Islamiyati</span>
														</div><hr>
														<h6 class="col-md-12 font-s text-left">upload your payment proof here <strong>(max image size = 1Mb)</strong></h6>
														<div>
														<input class="form-control" type="file" name="file" id="pop" accept="image/*" required>
														<p class="upload-alert" style="color: red; display: none;"></p> 
															<img class="center" id="pop-thumbnail" style="width: 50%; margin-top: 16px; border-radius: 10px; max-width: 200px;" src=""><br>
														<button type="submit" class="form-control btn btn-signin" id="upload-submit">CONFIRM PAYMENT PROOF</button>
														</div>
													</form>
												@endif
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
			
			var priceFunRun = $("#price-fun-run").attr("fee");
			if(priceFunRun > 0) {
				$('#price-fun-run').text(OSREC.CurrencyFormatter.format(priceFunRun, { currency: 'IDR' }));
			}
			
			var priceFestival = $("#price-festival").attr("fee");
			if(priceFestival > 0) {
				$('#price-festival').text(OSREC.CurrencyFormatter.format(priceFestival, { currency: 'IDR' }));
			}
			
			var total = $("#total").attr("total");
			$("#total").text(OSREC.CurrencyFormatter.format(total, { currency: 'IDR' }));
			
			$('#pop').change(function(){
				$('#pop-thumbnail').attr('src', window.URL.createObjectURL($("#pop")[0].files[0]));
			});

			$('#pop').bind('change', function() {
				$size = this.files[0].size /1048576;
				if($size > 1) {
					$('.upload-alert').show();
					$('.upload-alert').text('file size should be less than 1Mb (' + ($size).toFixed(2) + 'Mb)')
					$('#upload-submit').prop('disabled', true);
				} else {
					$('.upload-alert').hide();
					$('#upload-submit').prop('disabled', false);
				}
			});
			
		});
		
		function copy(value){
		    var tempInput = document.createElement("input");
		    tempInput.style = "position: absolute; left: -10000px; top: -10000px";
		    tempInput.value = value;
		    document.body.appendChild(tempInput);
		    tempInput.select();
		    document.execCommand("copy");
		    document.body.removeChild(tempInput);
		    alert("Nomor rekening copied to clipboard");
		}
	</script>

</body>

</html>