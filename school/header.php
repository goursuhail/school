
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Student Management System">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Management</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-min.css">

    <!-- Main core css-->
    <link rel="stylesheet" href="assets/css/dash-main.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Management</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="log-out.php">LOg out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stu-display.php">
              <span data-feather="users"></span>
              Student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teach-display.php">
              <span data-feather="users"></span>
              Teacher
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cls-display.php">
              <span data-feather="file"></span>
              Class
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subj-display.php">
              <span data-feather="file"></span>
              Subject
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addisplay.php">
              <span data-feather="file"></span>
              Admin User
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
