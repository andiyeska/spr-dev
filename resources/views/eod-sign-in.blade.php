<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Event Official Dashboard SPARE XII NEO">
    <meta name="keywords" content="login, signin">

    <title>EOD - Sign In</title>

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
    <div class="row min-h-fullscreen center-vh p-20 m-0">
      <div class="col-12">
        <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
          <h5 class="text-uppercase">Sign in</h5>
          <br>

          <form action="/eod/signin" method="POST" class="form-type-material">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username">
              <label for="username">Username</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password">
              <label for="password">Password</label>
            </div>

            <div class="form-group">
              <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
            </div>
          </form>
          @if($alert === 'signInFail')
            <p><strong>Username or password doesn't match</strong></p>
          @endif
        </div>
      </div>


      <footer class="col-12 align-self-end text-center fs-13">
        <p class="mb-0"><small>Copyright © 2018 <a href="/">SPARE Official Dashboard</a>. All rights reserved.</small></p>
      </footer>
    </div>




    <!-- Scripts -->
    <script src="/js/core.min.js"></script>
    <script src="/js/app.min.js"></script>
    <script src="/js/script.min.js"></script>

  </body>
</html>