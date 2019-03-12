
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
    <h1 class="h2">Subject Form</h1>
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

        $query = 'SELECT * FROM `subject` WHERE subject.id ='.$_GET['edit'];

        $stmt = $conn->query($query);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);



      }catch(PDOException $e){

      }

       ?>

    <form action="subj-update.php" method="get">
  <div class="gap">
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Subject</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="subname" value="<?php echo $row['sub_name']; ?>"  placeholder="Enter Subject name">
  </div>
  <input type="hidden" name="subject_id" value="<?php echo $row['id']; ?>">
</div>
  <button type="submit" id="sub" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php'); ?>
