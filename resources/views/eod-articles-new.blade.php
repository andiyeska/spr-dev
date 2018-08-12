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
		<div class="container">
      @if($isAdd || !is_null($article))
  			<form action="
        @if($isAdd)
          /eod/articles/new/submit
        @else
          /eod/articles/edit/submit
        @endif" method="post" enctype="multipart/form-data" class="row">
          @csrf
  				<div class="col-lg-8">
  					<div class="card shadow-1">
  						<h4 class="card-title">
  							<strong>New</strong> Article
  						</h4>
              @if(!$isAdd)
  						  <input value="{{$article->id}}" type="hidden" name="aid" required>
              @endif
  						<div class="card-body">
  							<input class="form-control form-control-lg" type="text"
  								placeholder="Article Title" 
                  @if(!$isAdd)
                    value="{{$article->title}}" 
                  @endif 
                  name="title" required> <br>
  							<textarea data-provide="summernote" id="content" name="content" data-height="300px" required>
                  @if(!$isAdd)
                    {{$article->content}}
                  @endif 
                </textarea>
  						</div>
  					</div>
  				</div>


  				<div class="col-lg-4">
  					<div class="card shadow-1">
  						<h4 class="card-title">
  							<strong>Thumbnail</strong> Picture
  						</h4>

  						<div class="card-body">
  							<div class="form-group">
  								<label>Thumbnail</label> <input type="file"
  									data-provide="dropify" name="file" required>
  							</div>
  						</div>

  						<footer class="card-footer flexbox">
  							<div class="text-center flex-grow">
  								<button type="submit" class="btn btn-bold btn-primary">Submit</button>
  							</div>
  						</footer>

  					</div>
  				</div>
  			</form>
      @else
        <h2>Article Not Found</h2>
      @endif
				<!--/.main-content -->

				<!-- Footer -->
				<footer class="site-footer">
					<div class="row">
						<div class="col-12">
							<p class="text-center text-md-left">Copyright © 2018 SPARE.
								All rights reserved.</p>
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

  </body>
</html>
