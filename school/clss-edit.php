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
    <h1 class="h2">Class Form</h1>
  </div>
<html>
  <head>
    <title>Class</title>
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

        $query = 'SELECT * FROM `class` WHERE class.c_id ='.$_GET['edit'];
        $stmt = $conn->query($query);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);


      }catch(PDOException $e){

      }



      ?>

    <form action="clss-update.php" method="get">
  <div class="gap">
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Class</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="classname" value="<?php echo $row['class_name']; ?>"  placeholder="Enter class name">
  </div>
  <input type="hidden" name="class_id" value="<?Php echo $row['c_id']; ?>">
</div>
  <button type="submit" id="sub" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php'); ?>
