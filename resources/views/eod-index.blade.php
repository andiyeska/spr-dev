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

          <li class="menu-category">Super Admin</li>

          <li class="menu-item active">
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
          
          <li class="menu-item">
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
        
        <div class="row">
        <!-- Free Run Participant -->
          <div class="col-md-6 col-12">
            <div class="card card-body">
              <div class="flexbox">
                <div data-provide="sparkline" data-type="bar" data-fill-color="false" data-line-width="2">6,4,8,9,6,8,7</div>
                <div class="text-right">
                  <span class="fw-400">Fun Run Participant</span><br>
                  <span>
                    <i class="ti-angle-down text-danger"></i>
                    <span class="fs-18 ml-1">113</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

    <!-- Festival Participant -->
          <div class="col-md-6 col-12">
            <div class="card card-body">
              <div class="flexbox">
                <div data-provide="sparkline" data-type="bar" data-fill-color="false" data-line-width="2">6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span class="fw-400">Festival Participant</span><br>
                  <span>
                    <i class="ti-angle-up text-success"></i>
                    <span class="fs-18 ml-1">113</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Gender Free Run -->
          <div class="col-md-4 col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>Gender</strong> Free Run</h5>
              </div>

              <div class="card-body card-body">
                <!-- Desktop Version -->
                <div class="text-center py-20 d-none d-lg-block">
                  <div data-provide="peity" data-type="donut" data-size="150" data-inner-radius="55" data-fill="#efb3e6,#ffdf7c">95,81</div>
                </div>
                <!-- Mobile Version -->
                <div class="text-center py-20 d-lg-none">
                  <div data-provide="peity" data-type="donut" data-size="87" data-inner-radius="35" data-fill="#efb3e6,#ffdf7c">95,81</div>
                </div>

                <br>

                <ul class="list-inline mb-0">
                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #efb3e6"></span>
                      <span>Male</span>
                    </div>
                    <div>95</div>
                  </li>

                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #ffdf7c"></span>
                      <span>Female</span>
                    </div>
                    <div>81</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Cities Free Run -->
          <div class="col-md-4 col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>Cities</strong> Free Run</h5>
              </div>

              <div class="card-body card-body">
                <!-- Desktop Version -->
                <div class="text-center py-20 d-none d-lg-block">
                  <div data-provide="peity" data-type="donut" data-size="150" data-inner-radius="55" data-fill="#efb3e6,#ffdf7c">65,21</div>
                </div>
                <!-- Mobile Version -->
                <div class="text-center py-20 d-lg-none">
                  <div data-provide="peity" data-type="donut" data-size="87" data-inner-radius="35" data-fill="#efb3e6,#ffdf7c">65,21</div>
                </div>

                <br>

                <ul class="list-inline mb-0">
                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #efb3e6"></span>
                      <span>Jakarta</span>
                    </div>
                    <div>65</div>
                  </li>

                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #ffdf7c"></span>
                      <span>Depok</span>
                    </div>
                    <div>21</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Publications Media -->
          <div class="col-md-4 col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>Publications</strong> Media</h5>
              </div>

              <div class="card-body card-body">
                <!-- Desktop Version -->
                <div class="text-center py-20 d-none d-lg-block">
                  <div data-provide="peity" data-type="donut" data-size="150" data-inner-radius="55" data-fill="#efb3e6,#ffdf7c">105,21</div>
                </div>
                <!-- Mobile Version -->
                <div class="text-center py-20 d-lg-none">
                  <div data-provide="peity" data-type="donut" data-size="87" data-inner-radius="35" data-fill="#efb3e6,#ffdf7c">105,21</div>
                </div>

                <br>

                <ul class="list-inline mb-0">
                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #efb3e6"></span>
                      <span>Social Media</span>
                    </div>
                    <div>105</div>
                  </li>

                  <li class="flexbox mb-1">
                    <div>
                      <span class="badge badge-dot badge-lg mr-1" style="background-color: #ffdf7c"></span>
                      <span>Banner</span>
                    </div>
                    <div>21</div>
                  </li>
                </ul>
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

  </body>
</html>
