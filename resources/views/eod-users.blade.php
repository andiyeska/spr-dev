<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description"
	content="Event Official Dashboard SPARE XII NEO">
<meta name="keywords" content="blank, starter">

<title>SPARE - Event Official Dashboard</title>

<!-- Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i"
	rel="stylesheet">

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
			<span class="dot1"></span> <span class="dot2"></span> <span
				class="dot3"></span>
		</div>
	</div>


	<!-- Sidebar -->
	<aside class="sidebar sidebar-expand-lg sidebar-icons-boxed">
		<header class="sidebar-header">
			<a class="logo-icon" href="/eod"><img src="/ix/img/spare-xii-neo-bromello-white.png" alt="logo icon"></a>
		</header>

		<nav class="sidebar-navigation">
			<ul class="menu">

				<li class="menu-category">Super Admin</li>

				<li class="menu-item"><a class="menu-link" href="/eod">
						<span class="icon fa fa-home"></span> <span class="title">Dashboard</span>
				</a></li>

				<li class="menu-item active"><a class="menu-link" href="#">
						<span class="icon fa fa-users"></span> <span class="title">User
							Management</span>
				</a></li>

				<li class="menu-item"><a class="menu-link"
					href="/eod/events"> <span class="icon fa fa-calendar"></span>
						<span class="title">Event Management</span>
				</a></li>
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
				<li class="dropdown"><span class="topbar-btn"
					data-toggle="dropdown"><img class="avatar"
						src="/img/avatar.png" alt="..."></span>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="/eod/signout" class="dropdown-item"><i class="ti-power-off"></i> Logout</a>
					</div></li>
			</ul>

		</div>
	</header>
	<!-- END Topbar -->


	<!-- Main container -->
	<main>
	<div class="main-content">
		<div class="card">
			<h4 class="card-title">
				<strong>Active</strong> Users
			</h4>

			<div class="card-body">
				<div class="row">
					@if($alert === 'addSuccess')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Admin added!</strong><br>You have been added admin account.<br>
						</div>
					@elseif($alert === 'addFail')
						<div class="alert alert-danger signin-input col-12 offset-8 pb-20">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Try again</strong><br>Username already exist<br>
						</div>
					@elseif($alert === 'passwordReseted')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Password reseted!</strong><br>Password has been reseted to the default.<br>
						</div>
					@elseif($alert === 'adminDeleted')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Admin deleted!</strong><br>You have been deleted admin account.<br>
						</div>
					@endif
					<div class="col-4 offset-8 pb-20">
						<button class="btn btn-label btn-primary" data-toggle="modal"
										data-target="#add-user">
							<label><i class="ti-plus"></i></label> Add User
						</button>
					</div>
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered"
							cellspacing="0" data-provide="datatables">
							<thead>
								<tr>
									<th style="width: 30%;">Username</th>
									<th style="width: 20%">Role</th>
									<th style="width: 25%">Created</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td>
											<a href="#" data-toggle="modal" class="users"
											data-target="#user-info" id="{{$user->id}}" username="{{$user->username}}" >{{$user->username}}</a>
										</td>
										@if($user->role === 'AFR')
											<td>Admin Fun Run</td>
										@elseif($user->role === 'AF')
											<td>Admin Festival</td>
										@elseif($user->role === 'WR')
											<td>Writer</td>
										@endif
										<td>{{$user->created_date->format('d F Y')}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.main-content --> 
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="user-info" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="username"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<div class="row">
						<div class="col-md-6 offet-4 pb-15">
							<button class="btn btn-label btn-warning user-info-toggle" data-toggle="modal"
								data-target="#reset-confirmation">
								<label><i class="ti-lock"></i></label> Reset Password
							</button>
						</div>
						<div class="col-md-6 offet-4">
							<button class="btn btn-label btn-danger user-info-toggle" data-toggle="modal"
								data-target="#delete-confirmation">
								<label><i class="ti-trash"></i></label> Delete Account
							</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary"
						data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-center fade" id="delete-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="username"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-danger">Are you sure you want to delete this
						account?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary user-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/admin/delete" method="post">
						@csrf
						<input type="hidden" class="id" name="uid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-danger"
							>Delete</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-center fade" id="reset-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="username"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-warning">Are you sure you want to reset password
						this account?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary user-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/admin/reset" method="post">
						@csrf
						<input type="hidden" class="id" name="uid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-warning"
						>Reset</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="add-user" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/eod/admin/add" method="post">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title">
							<strong>Add New User</strong>
						</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
									<div class="form-group">
										<label>Username</label><input class="form-control" type="text" 
										name="username" required>
									</div>
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" data-provide="selectpicker" title="Select Role" 
										name="role" required>
											<option value="AFR">Admin Fun Run</option>
											<option value="AF">Admin Festival</option>
											<option value="WR">Writer</option>
										</select>
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

	<!-- Footer --> <footer class="site-footer">
		<div class="row">
			<div class="col-12">
				<p class="text-center text-md-left">Copyright © 2018 SPARE. All
					rights reserved.</p>
			</div>
		</div>
	</footer> <!-- END Footer --> </main>
	<!-- END Main container -->



	<!-- Global quickview -->
	<div id="qv-global" class="quickview"
		data-url="assets/data/quickview-global.html">
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
			$('.user-info-toggle').on('click', function() {
				userInfo();
			});
			
			function userInfo(){
				$('#user-info').modal('toggle');
			};
			
			$('table').on('click', '.users', function () {
                $('.id').val($(this).attr("id"));
                $('strong.username').text($(this).attr("username"));
            });
			
		});
	</script>
</body>
</html>
