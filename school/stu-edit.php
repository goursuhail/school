<?php
      require_once('header.php');
      require_once('db.php');
      require_once('helper.php');

 ?>
 <?php
 session_start();
 if(!isset($_SESSION['user'])){
   header('location: log-in.php');
 }
  ?>
  <?php


  $section = get_class1($conn);

   ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Student Form</h1>
   </div>


<html>
  <head>
    <title>Student</title>
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

      $query = 'SELECT * FROM `student` WHERE `student`.s_id ='.$_GET['edit'];
      $stmt = $conn->query($query);

      $row = $stmt->fetch(PDO::FETCH_ASSOC);


    }catch(PDOException $e){

    }

       ?>

    <form action="stu-update.php" method="get">
  <div class="gap">
  <div class="col-sm-3">
    <label for="exampleInputEmail1"><strong>Student Name</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sname" value="<?php echo $row['name']; ?>"  placeholder="Enter Student name">
  </div>
</div>
  <div class="col-sm-3">
    <label for="exampleInputPassword1"><strong>Student Dob</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sdob" value="<?php echo $row['dob']; ?>" placeholder="Enter Student Dob">
  </div>
  <div class="col-sm-3">
    <label for="exampleInputPassword1"><strong>Father Name</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="paname" value="<?php echo $row['fname']; ?>" placeholder="Enter Father Name">
  </div>

  <div class="col-sm-3">
    <label for="exampleInputPassword1"><strong>Class id</strong></label>
    <select name="choose" class="form-control" value="<?php echo $row['c_id']; ?>">
      <?php foreach ($section as $id => $class){

       ?>
        <Option value="<?php echo $id; ?>"><?php echo $class;  ?></option>

      <?php
            }
      ?>
    </select>
  </div>


  <div class="col-sm-6">
    <label for="exampleInputPassword1"><strong>Address</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="addss" value="<?php echo $row['address']; ?>" placeholder="Enter Address">
  </div>
  <div class="col-sm-3">
    <label for="exampleInputPassword1"><strong>Phone</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pho" value="<?php echo $row['phone']; ?>" placeholder="Enter Phone">
  </div>
  <input type="hidden" name="student_id" value="<?php echo $row['s_id']; ?>">
  
  <button type="submit" id="sub" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php'); ?>
