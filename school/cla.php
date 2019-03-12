<?php require_once('db.php'); ?>

<?php
try{

  $query = "INSERT INTO `class`(`class_name`) values(:nam)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('nam', $_POST['classname'] );


  $stmt->execute();

  header('location: cls-display.php');

}catch(PDOException $e){

}
?>
