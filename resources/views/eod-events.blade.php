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
        <a class="logo-icon" href="../index.html"><img src="/img/logo-icon-light.png" alt="logo icon"></a>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">Super Admin</li>

          <li class="menu-item">
            <a class="menu-link" href="/eod">
              <span class="icon fa fa-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/eod/users">
              <span class="icon fa fa-users"></span>
              <span class="title">User Management</span>
            </a>
          </li>
          
          <li class="menu-item active">
            <a class="menu-link" href="/eod/events">
              <span class="icon fa fa-calendar"></span>
              <span class="title">Event Management</span>
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
				<strong>Created</strong> Events
			</h4>

			<div class="card-body">
				<div class="row">
					@if($alert === 'addSuccess')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Event added!</strong><br>You have been added new event.<br>
						</div>
					@elseif($alert === 'addFail')
						<div class="alert alert-danger signin-input col-12 offset-8 pb-20">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Try again</strong><br>There is another event with the same name. Maybe you just want to update it?<br>
						</div>
					@elseif($alert === 'eventUpdated')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Event updated!</strong><br>You have been updated an event.<br>
						</div>
					@endif
					<div class="col-4 offset-8 pb-20">
						<button class="btn btn-label btn-primary" data-toggle="modal"
										data-target="#add-event">
							<label><i class="ti-plus"></i></label> Add Event
						</button>
					</div>
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered"
							cellspacing="0" data-provide="datatables">
							<thead>
								<tr>
									<th style="width: 35%;">Name</th>
									<th style="width: 20%">Start Date</th>
									<th style="width: 20%">Attendance Date</th>
									<th style="width: 15%">Price</th>
									<th style="width: 10%">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($events as $event)
									<tr>
										<td>
											<a href="#" data-toggle="modal"
											class=" events" 
											data-target="#event-info" th:text="${event.name" 
											event-id="{{$event->id}}" event-name="{{$event->name}}" 
											start-date="{{$event->start_date->format('d/m/Y')}}" 
											attendance-date="{{$event->attendance_date->format('d/m/Y')}}" 
											price-e="{{$event->price}}">
											{{$event->name}}
											</a>
										</td>
										<td>{{$event->start_date->format('d F Y')}}</td>
										<td>{{$event->attendance_date->format('d F Y')}}</td>
										<td>Rp{{number_format($event->price, '0', ',', '.')}}</td>
										@if($today > $event->attendance_date)
											<td class="text-danger">Expired</td>
										@else
											<td class="text-success">Active</td>
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

	<!-- Modal -->
	<div class="modal modal-center fade" id="event-info" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="event-name"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<button class="btn btn-label btn-warning event-info-toggle"
						data-toggle="modal" data-target="#update-event">
						<label><i class="ti-lock"></i></label> Update Event
					</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary"
						data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-center fade" id="update-event"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/eod/event/update" method="post">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title">
							<strong class="event-name"></strong>
						</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control event-name" type="text" name="name" disabled required>
								</div>
								<div class="form-group">
									<label>Start Date</label>
									<div class="input-group">
										<span class="input-group-addon"> <i
											class="fa fa-calendar"></i>
										</span> 
										<input type="text" 
											class="form-control start-date"
											data-provide="datepicker" data-date-format="dd/mm/yyyy"
											placeholder="DD/MM/YYYY" name="startDate" required>
									</div>
								</div>
								<div class="form-group">
									<label>Attendance Date</label>
									<div class="input-group">
										<span class="input-group-addon"> <i
											class="fa fa-calendar"></i>
										</span> 
										<input type="text" 
											class="form-control attendance-date"
											data-provide="datepicker" data-date-format="dd/mm/yyyy"
											placeholder="DD/MM/YYYY" name="attendanceDate" required>
									</div>
								</div>
								<div class="form-group">
									<label>Price</label>
									<input class="form-control price-e" type="number" min="0"
										name="price" required>
								</div>
								<div class="form-group">
									<input class="form-control event-id" type="hidden"
										name="eid" required>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-bold btn-pure btn-secondary event-info-toggle"
							data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-bold btn-pure btn-primary"
							>Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="add-event" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/eod/event/add" method="post">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title">
							<strong>Add New Event</strong>
						</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Name</label><input class="form-control" type="text" 
									name="name" required>
								</div>
								<div class="form-group">
									<label>Start Date</label>
									<div class="input-group">
										<span
											class="input-group-addon"> <i class="fa fa-calendar"></i>
										</span>
										<input type="text" class="form-control"
											data-provide="datepicker" 
											data-date-format="dd/mm/yyyy" placeholder="DD/MM/YYYY"
											name="startDate" required>
									</div>
								</div>
								<div class="form-group">
									<label>Attendance Date</label>
									<div class="input-group">
										<span
											class="input-group-addon"> <i class="fa fa-calendar"></i>
										</span>
										<input type="text" class="form-control"
											data-provide="datepicker" 
											data-date-format="dd/mm/yyyy" placeholder="DD/MM/YYYY" 
											name="attendanceDate" required>
									</div>
								</div>
								<div class="form-group">
									<label>Price</label><input class="form-control" 
									type="number" min="0" 
									name="price" required>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-bold btn-pure btn-secondary"
							data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-bold btn-pure btn-primary"
							>Submit</button>
					</div>
				</form>
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
			$('.event-info-toggle').on('click', function() {
				userInfo();
			});
			
			function userInfo(){
				$('#event-info').modal('toggle');
			}
			
			$('table').on('click', '.events', function () {
                $('strong.event-name').text($(this).attr("event-name"));
                $('.event-name').val($(this).attr("event-name"));
                $('.start-date').datepicker("update", $(this).attr("start-date"));
                $('.attendance-date').datepicker("update", $(this).attr("attendance-date"));
                $('.event-id').val($(this).attr("event-id"));
                $('.price-e').val($(this).attr("price-e"));
            });
		});
	</script>

  </body>
</html>
