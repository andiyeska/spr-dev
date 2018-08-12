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

          <li class="menu-category">Admin</li>
          
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
          
          <li class="menu-item">
            <a class="menu-link" href="/eod/participant">
              <span class="icon fa fa-paper-plane"></span>
              <span class="title">Participant</span>
            </a>
          </li>
          
          <li class="menu-item active">
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
				<strong>Publication</strong> Media
			</h4>

			<div class="card-body">
				<div class="row">
					@if($alert === 'addSuccess')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Media added!</strong><br>You have been added a new media.<br>
						</div>
					@elseif($alert === 'updateSuccess')
						<div class="alert alert-success signin-input col-12 offset-8 pb-20">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="cursor: pointer;" aria-hidden="true">&times;</span>
							</button>
						  	<strong>Media updateed!</strong><br>You have been updateed a media status.<br>
						</div>
					@endif
					<div class="col-4 offset-8 pb-20">
						<button class="btn btn-label btn-primary" data-toggle="modal"
										data-target="#add-media">
							<label><i class="ti-plus"></i></label> Add Media
						</button>
					</div>
					<div class="col-12 table-responsive">
						<table class="table table-striped table-bordered"
							cellspacing="0" data-provide="datatables">
							<thead>
								<tr>
									<th style="width: 50%;">Name</th>
									<th style="width: 25%;">Effectivity</th>
									<th style="width: 25%;">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($medias as $media)
									<tr>
										<td>
											<a class="medias" href="#" data-toggle="modal"
											data-target="#media-info"
											media="{{$media->media}}" 
											mid="{{$media->id}}"
											status="{{$media->status}}">
												{{$media->media}}
											</a>
										</td>
										<td>{{$media->effectivity()}}</td>
										@if($media->status)
											<td class="text-primary">Active</td>
										@else
											<td class="text-danger">Inactive</td>
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
	<div class="modal modal-center fade" id="media-info" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="media-name"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<button class="btn btn-label btn-primary media-info-toggle"
						data-toggle="modal" data-target="#reactivate" id="btn-reactivate">
						<label><i class="fa fa-check"></i></label> Reactivate
					</button>
					<button class="btn btn-label btn-danger media-info-toggle"
						data-toggle="modal" data-target="#deactivate" id="btn-deactivate">
						<label><i class="fa fa-ban"></i></label> Deactivate
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
	<div class="modal modal-center fade" id="reactivate"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="media-name"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-primary">Are you sure you want to reactivate this
						media?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary media-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/publication/update" method="post">
						@csrf
						<input type="hidden" name="status" value="2" required>
						<input type="hidden" name="mid" class="mid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-primary"
							>Yes</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-center fade" id="deactivate"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="media-name"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-danger">Are you sure you want to deactivate this
						media?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary media-info-toggle"
						data-dismiss="modal">No</button>
					<form action="/eod/publication/update" method="post">
						@csrf
						<input type="hidden" name="status" value="1" required>
						<input type="hidden" name="mid" class="mid" required>
						<button type="submit" class="btn btn-bold btn-pure btn-danger"
							>Yes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal modal-center fade" id="add-media" tabindex="-1"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/eod/publication/add" method="post">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title">
							<strong>Add New Media</strong>
						</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Name</label>
									<input name="media" class="form-control" type="text">
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
			$('.media-info-toggle').on('click', function() {
				mediaInfo();
			});
			
			function mediaInfo(){
				$('#media-info').modal('toggle');
			}
			
			$('table').on('click', '.medias', function () {
				$status = $(this).attr("status");
				if ($status) {
					$('#btn-reactivate').hide();
					$('#btn-deactivate').show();
				} else {
					$('#btn-deactivate').hide();
					$('#btn-reactivate').show();
				}

				$('.media-name').text($(this).attr("media"));
                $('.mid').val($(this).attr("mid"));
            });
		});
	</script>

  </body>
</html>
