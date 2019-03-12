<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>

<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: log-in.php');
}
 ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Admin Form</h1>
  </div>


<html>
  <head>
    <title>Subject</title>
  <style type="text/css">

  #sub {
    margin-top: 15px;
    margin-left: 20px;
  }
  </style>

  </head>
  <body>
    <div class="container">
      <?php
        try{

          $query = 'SELECT * FROM `admin_user` WHERE admin_user.a_id ='.$_GET['edit'];
          $stmt = $conn->query($query);
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){

        }


       ?>



    <form action="adm-update.php" method="get">

  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Username</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="uname" value="<?php echo $row['user_name']; ?>"  placeholder="Enter Username">
  </div>
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>First Name</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="faname" value=" <?php echo $row['first_name']; ?>"  placeholder="Enter First Name">
  </div>
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Last Name</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lasname" value="<?php echo $row['last_name']; ?>"  placeholder="Enter Last name">
  </div>
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Password</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pass" value="<?php echo $row['password']; ?>"  placeholder="Enter Password">
  </div>
  <input type="hidden" name="admin_id" value="<?php echo $row['a_id']; ?>">

  <button type="submit" id="sub" class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>
</main>

<?php require_once('footer.php'); ?>
