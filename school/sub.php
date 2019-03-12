<?php require_once('db.php'); ?>

<?php
try{

  $query = "INSERT INTO `subject`(`sub_name`) values(:nam)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('nam', $_POST['subname'] );


  $stmt->execute();

  header('location: subj-display.php');

}catch(PDOException $e){

}
?>
