<?php require_once('db.php'); ?>

<?php
try{

  $query = "INSERT INTO `teacher`(`name`, `dob`, `address`, `phone`) values(:nam,  :dob, :addr, :mob)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('nam', $_POST['tname'] );
  $stmt->bindValue('dob', $_POST['tdob'] );
  $stmt->bindValue('addr', $_POST['addss'] );
  $stmt->bindValue('mob', $_POST['pho'] );

  $stmt->execute();

  header('location: teach-display.php');

}catch(PDOException $e){

}
?>
