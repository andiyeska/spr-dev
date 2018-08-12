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

          <li class="menu-category">Writer</li>
          
          <li class="menu-item active">
            <a class="menu-link" href="/eod/articles">
              <span class="icon fa fa-file-text-o"></span>
              <span class="title">Articles</span>
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
            <strong>Articles</strong> Published
          </h4>

          <div class="card-body">
            <div class="row">             
              <div class="col-4 offset-8 pb-20">
                <a class="btn btn-label btn-primary" href="/eod/articles/new">
                  <label><i class="ti-plus"></i></label> Add Article
                </a>
              </div>
              <div class="col-12 table-responsive">
                <table class="table table-striped table-bordered"
                  cellspacing="0" data-provide="datatables">
                  <thead>
                    <tr>
                      <th>Articles</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($articles as $article)
                      <tr>
                        <td>
                          <div class="media-list-body bg-white b-1">
                            <div class="media align-items-center" data-id="1">
                              <a class="media-body text-truncate pl-12" href="#">
                                <h5 class="fs-15 pt-10">{{$article->title}}</h5>
                                <small class="opacity-75 fw-300">
                                  Date Posted
                                  <span class="divider-dash"></span>
                                  <span>{{$article->post_date->format('d F Y')}}</span>
                                </small>
                              </a>
          
                              <a class="media-action hover-primary" href="/eod/articles/edit/{{$article->id}}" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                              <a class="media-action hover-danger btn-pure articles" 
                              title-article="{{$article->title}}" 
                              id="{{$article->id}}" href="#" data-provide="tooltip" title="Delete" data-toggle="modal" data-target="#delete-confirmation"><i class="ti-trash"></i></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

	<!-- Modal -->
	<div class="modal modal-center fade" id="delete-confirmation"
		tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<strong class="title"></strong>
					</h5>
				</div>
				<div class="modal-body text-center">
					<p class="text-danger">Are you sure you want to delete this
						article?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-bold btn-pure btn-secondary"
						data-dismiss="modal">No</button>
					<form action="/eod/articles/delete" method="post">
            @csrf
						<input class="id" type="hidden" name="aid">
						<button type="submit" class="btn btn-bold btn-pure btn-danger"
						>Delete</button>
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
    	$(document).ready(function(){
    		
    		$('table').on('click', '.articles', function () {
                $('.id').val($(this).attr("id"));
                $('.title').text($(this).attr("title-article"))
            });
    		
    	});
    </script>

  </body>
</html>
