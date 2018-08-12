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
          
          <li class="menu-item">
            <a class="menu-link" href="/eod/payments">
              <span class="icon fa fa-credit-card"></span>
              <span class="title">Payment</span>
            </a>
          </li>
          
          <li class="menu-item open active">
            <a class="menu-link" href="#">
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
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src=/img/avatar.png alt="..."></span>
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
				<strong>Confirm</strong> Attendance
			</h4>

			<div class="card-body">
				<div class="row">
					@if($alert === 'attend')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Attendance confirmed!</strong><br>You have been confirmed an attendance.<br>
						</div>
					@endif
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered"
							cellspacing="0" data-provide="datatables">
							<thead>
								<tr>
									<th style="width: 40%;">Registration Code</th>
									<th style="width: 40%">Name</th>
									<th style="width: 20%">
										@if($isFunRun)
											BIB
										@else
											Quantity
										@endif
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($registrations as $registration)
									<tr>
										<td>
											<a class="attendance" href="#" data-toggle="modal"
											data-target="#attendance-info" 
											registration-code="{{$registration->registration_code}}" 
											first-name="{{$registration->user->details->first_name}}" 
											last-name="{{$registration->user->details->last_name}}" 
											rid="{{$registration->id}}" 
											quantity="
												@if($isFunRun)
													{{$registration->funRun->run_number}}
												@else
													{{$registration->festival->quantity}}
												@endif

											">
												{{$registration->registration_code}}
											</a>
										</td>
										<td>
											{{$registration->user->details->first_name}} {{$registration->user->details->last_name}}
										</td>
										<td>
											@if($isFunRun)
												{{$registration->funRun->run_number}}
											@else
												{{$registration->festival->quantity}}
											@endif
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
	<div class="modal modal-center fade" id="attendance-info" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="registration-code"></strong>
					</h5>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<table>
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
									<strong>
										@if($isFunRun)
											BIB
										@else
											Quantity
										@endif
									</strong>
								</td>
								<td>:</td>
								<td class="quantity"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-secondary btn-pure"
						data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-bold btn-primary btn-pure attendance-info-toggle"
						data-toggle="modal" data-target="#attendance-confirmation">Attend</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="attendance-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="registration-code"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-primary">Are you sure you want to confirm this
						attendance?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary attendance-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/attendance/attend" method="post">
						@csrf
						<input class="rid" type="hidden" name="rid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-primary"
							>Yes</button>
					</form>
				</div>
			</div>
		</div>
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
	<script>
		app.ready(function() {
			$('.attendance-info-toggle').on('click', function() {
				attendanceInfo();
			});

			function attendanceInfo() {
				$('#attendance-info').modal('toggle');
			}
			
			$('table').on('click', '.attendance', function () {
                var rc = $(this).attr("registration-code");
				$('.registration-code').text(rc);
				
				var fn = $(this).attr("first-name");
				var ln = $(this).attr("last-name");
                $('.name').text(fn + " " + ln);
                
                var qty = $(this).attr("quantity");
                $('.quantity').text(qty);
                
                $('.rid').val($(this).attr("rid"));
            });
		});
	</script>

</body>
</html>
