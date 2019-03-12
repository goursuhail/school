
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-min.css">

    <!-- main core css -->

    <link rel="stylesheet" href="assets/css/dash-main.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/login.css" >
  </head>
  <body class="text-center">
    <?php

        if(isset($_GET['message']) && $_GET['message'] == 'fail'){
          ?>
          <div class="alert alert-danger" role="alert">
              Login Failed. Username or Password invalid
          </div>



        <?php
        }
     ?>
    <form class="form-signin" action="lin-act.php" method="post">

  <h1 class="h3 mb-3 font-weight-normal">Please login in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" class="form-control" name="usname" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Login in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
</form>
</body>
</html>
