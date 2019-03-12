<?php require_once('db.php'); ?>

<?php
try{

  $query = "INSERT INTO `admin_user`(`user_name`, `first_name`, `last_name`, `password`) values(:uname, :finame, :lasname, :passwd)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('uname', $_POST['usname'] );
  $stmt->bindValue('finame', $_POST['fname'] );
  $stmt->bindValue('lasname', $_POST['laname'] );
  $stmt->bindValue('passwd', $_POST['pass'] );


  $stmt->execute();

  header('location: addisplay.php');

}catch(PDOException $e){

}
?>
