<?php require_once('db.php'); ?>

<?php

try{

  $query = "UPDATE `school`.teacher SET `name` = :nam, dob = :da, address = :addr, phone = :mob WHERE t_id = :tid";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('nam', $_GET['tname'] );
  $stmt->bindValue('da', $_GET['tdob'] );
  $stmt->bindValue('addr', $_GET['addss'] );
  $stmt->bindValue('mob', $_GET['pho'] );
  $stmt->bindValue('tid', $_GET['teacher_id'] );

  $stmt->execute();

  header('location: teach-display.php');


}catch(PDOException $e){

}


?>
