<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Event Official Dashboard SPARE XII NEO">
    <meta name="keywords" content="blank, starter">

    <title>SPARE - Event Official Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/core.min.css" rel="stylesheet">
    <link href="/css/app.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/lightbox.min.css" rel="stylesheet">

    <!-- favicon  -->
	<link rel="icon" href="/ix/img/logospare.png">
  </head>

  <body>

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="sidebar sidebar-expand-lg sidebar-icons-boxed">
      <header class="sidebar-header">
        <a class="logo-icon" href="/eod"><img src="/ix/img/spare-xii-neo-bromello-white.png" alt="logo icon"></a>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">
          	@if($isFunRun)
          		Admin Fun Run
          	@else
          		Admin Festival
          	@endif
          </li>
          
          <li class="menu-item open active">
            <a class="menu-link" href="/eod/payments">
              <span class="icon fa fa-credit-card"></span>
              <span class="title">Payment</span>
            </a>
          </li>
          
          <li class="menu-item">
            <a class="menu-link" href="/eod/attendance">
              <span class="icon fa fa-child"></span>
              <span class="title">Attendance</span>
            </a>
          </li>
          
          <li class="menu-item">
            <a class="menu-link" href="/eod/participant">
              <span class="icon fa fa-paper-plane"></span>
              <span class="title">Participant</span>
            </a>
          </li>
          
          <li class="menu-item">
            <a class="menu-link" href="/eod/publication">
              <span class="icon fa fa-bullhorn"></span>
              <span class="title">Publication Media</span>
            </a>
          </li>
          
        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
      </div>

      <div class="topbar-right">
        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="/img/avatar.png" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/eod/signout" class="dropdown-item"><i class="ti-power-off"></i> Logout</a>
            </div>
          </li>
        </ul>

      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main>
      <div class="main-content">
        <div class="card">
			<h4 class="card-title">
				<strong>Submitted</strong> Payments
			</h4>

			<div class="card-body">
				<div class="row">
					@if($alert === 'approve')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Payment approved!</strong><br>You have been approved a payment.<br>
						</div>
					@elseif($alert === 'reject')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Payment rejected!</strong><br>You have been rejected a payment.<br>
						</div>
					@endif
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered"
							cellspacing="0" data-provide="datatables">
							<thead>
								<tr>
									<th style="width: 50%;">Registration Code</th>
									<th style="width: 50%">Date Registered</th>
								</tr>
							</thead>
							<tbody>
								@foreach($registrations as $registration)
									<tr>
										<td>
											<a href="#" class="payments" data-toggle="modal"
											data-target="#payment-info" 
											registration-code="{{$registration->registration_code}}" 
											registration-fee="
											@if($isFunRun)
												{{$registration->funRun->registration_fee}}
											@else
												{{$registration->festival->registration_fee}}
											@endif" 
											unique-fee="{{$registration->unique_fee}}" 
											first-name="{{$registration->user->details->first_name}}" 
											last-name="{{$registration->user->details->last_name}}" 
											rid="{{$registration->id}}" 
											payment-proof="{{$registration->payment_proof}}">
												{{$registration->registration_code}}
											</a>
										</td>
										<td>
											{{$registration->registration_date->format('d F Y')}}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
      </div><!--/.main-content --> 
      
      <!-- Modal -->
	<div class="modal modal-center fade" id="payment-info" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="registration-code"></strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true"><a href="#">×</a></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<table>
							<tr>
								<td class="proof">
								<a class="img-href" data-lightbox="image-1">
									<img class="cursor-pointer img-thumbnail img-payment" 
									alt="...">
								</a></td>
							</tr>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td>
									<strong>Registration Code</strong>
								</td>
								<td>:</td>
								<td class="registration-code"></td>
							</tr>

							<tr>
								<td>
									<strong>Name</strong>
								</td>
								<td>:</td>
								<td class="name"></td>
							</tr>

							<tr>
								<td>
									<strong>Registration Fee</strong>
								</td>
								<td>:</td>
								<td class="registration-fee"></td>
							</tr>
							<tr>
								<td>
									<strong>Unique Fee</strong>
								</td>
								<td>:</td>
								<td class="unique-fee"></td>
							</tr>
							<tr>
								<td>
									<strong>Total</strong>
								</td>
								<td>:</td>
								<td class="total"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-danger payment-info-toggle"
						data-toggle="modal" data-target="#reject-confirmation">Reject</button>
					<button type="button" class="btn btn-bold btn-primary payment-info-toggle"
						data-toggle="modal" data-target="#approve-confirmation">Approve</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="reject-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="registration-code"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-danger">Are you sure you want to reject this
						payment?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary payment-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/payments/approval" method="post">
						@csrf
						<input type="hidden" name="status" value="2" required>
						<input class="rid" type="hidden" name="rid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-danger"
						>Yes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="approve-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="registration-code"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-primary">Are you sure you want to approve this
						payment?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary payment-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/payments/approval" method="post">
						@csrf
						<input type="hidden" name="status" value="4" required>
						<input class="rid" type="hidden" name="rid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-primary"
						>Yes</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- The Modal -->
	<div id="myModal" class="modal">
	
	  <!-- The Close Button -->
	  <span class="close">&times;</span>
	
	  <!-- Modal Content (The Image) -->
	  <img class="modal-content" id="img01">
	
	  <!-- Modal Caption (Image Text) -->
	  <div id="caption"></div>
	</div>

	<!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-12">
            <p class="text-center text-md-left">Copyright © 2018 SPARE. All rights reserved.</p>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="/js/core.min.js"></script>
    <script src="/js/app.min.js"></script>
    <script src="/js/script.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script>
		app.ready(function() {
			$('.payment-info-toggle').on('click', function() {
				paymentInfo();
			});

			function paymentInfo() {
				$('#payment-info').modal('toggle');
			}
			
			$('table').on('click', '.payments', function () {
                var template = "/upload/";
                var rc = $(this).attr("registration-code");
                var pp = $(this).attr("payment-proof");
                $('.img-payment').attr("src", template + rc + "/" + pp);
                $('.img-href').attr("href", template + rc + "/" + pp);
                
				$('.registration-code').text(rc);
				var fn = $(this).attr("first-name");
				var ln = $(this).attr("last-name");
                $('.name').text(fn + " " + ln);
                
                var rf = $(this).attr("registration-fee");
                var uf = $(this).attr("unique-fee");
                var total = Number(rf) + Number(uf);
                $('.registration-fee').text("Rp" + thousands(rf));
                $('.unique-fee').text(uf);
                $('.total').text("Rp" + thousands(total));
                
                $('.img-href').attr("data-title", fn + " " + ln + "- Rp" + thousands(total));
                
                $('.rid').val($(this).attr("rid"));
                $('.rc').val(rc);
            });
			
			function thousands(x) {
				return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
			}
		});
	</script>

</body>
</html>
