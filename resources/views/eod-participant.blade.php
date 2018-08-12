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

          <li class="menu-category" th:text="${role"></li>
          
          <li class="menu-item">
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
          
          <li class="menu-item active">
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
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar"src=/img/avatar.png alt="..."></span>
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
				<strong>Event</strong> Participant
			</h4>

			<div class="card-body">
				<div class="row">
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered participants"
							cellspacing="0">
							<thead>
								<tr>
									<th>Registration Code</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Gender</th>
									<th>
                    @if($isFunRun)
                      BIB
                    @else
                      Quantity
                    @endif
                  </th>
                  @if($isFunRun)
                    <th>Shirt Size</th>
                    <th>Medical Record</th>
                  @endif
									<th>Attendance</th>
								</tr>
							</thead>
							<tbody>
                @foreach($registrations as $registration)
  								<tr>
  									<td>{{$registration->registration_code}}</td>
  									<td>{{$registration->user->details->first_name}}</td>
  									<td>{{$registration->user->details->last_name}}</td>
  									<td>
                      @if($registration->user->details->gender)
                        Perempuan
                      @else
                        Laki-laki
                      @endif
                    </td>
  									<td>
                      @if($isFunRun)
                        {{$registration->funRun->run_number}}
                      @else
                        {{$registration->festival->quantity}}
                      @endif
                    </td>
                    @if($isFunRun)
                      <td>{{$registration->funRun->shirt_size}}</td>
                      <td>{{$registration->funRun->medical_record}}</td>
                      @if($registration->funRun->attend)
                        <td class="text-primary">Attend</td>
                      @else
                        <td class="text-danger">Not Attend</td>
                      @endif
                    @else
                      @if($registration->festival->attend)
                        <td class="text-primary">Attend</td>
                      @else
                        <td class="text-danger">Not Attend</td>
                      @endif
                    @endif                    
  								</tr>
                @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
      </div><!--/.main-content -->

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
  <link rel="stylesheet" href="/spc/jquery.dataTables.min.css">
  <script src="/spc/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="/spc/buttons.dataTables.min.css">
  <script type="text/javascript" language="javascript" src="/spc/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript" src="/spc/jszip.min.js"></script>
  <script type="text/javascript" language="javascript" src="/spc/pdfmake.min.js"></script>
  <script type="text/javascript" language="javascript" src="/spc/vfs_fonts.js"></script>
  <script type="text/javascript" language="javascript" src="/spc/buttons.html5.min.js"></script>
	<script>
		app.ready(function() {
			$('.media-info-toggle').on('click', function() {
				mediaInfo();
			});
			
			function mediaInfo(){
				$('#media-info').modal('toggle');
			}
			
			$('.participants').DataTable({
				dom: 'Bfrtip',
		        buttons: [
		            'copyHtml5',
		            'excelHtml5',
		        ]
			});
			
			$('table').on('click', '.medias', function () {
				$('.medias').text($(this).attr("media"));
                
                $('.mid').val($(this).attr("mid"));
            });
		});
	</script>

  </body>
</html>