<?php require_once('db.php'); ?>

<?php

try{


$query = "UPDATE `school`.admin_user SET `user_name` = :usname, first_name = :fname, last_name = :laname, password = :passwd WHERE a_id = :aid";

$stmt = $conn->prepare($query);

$stmt->bindValue('usname', $_GET['uname'] );
$stmt->bindValue('fname', $_GET['faname'] );
$stmt->bindValue('laname', $_GET['lasname'] );
$stmt->bindValue('passwd', $_GET['pass'] );
$stmt->bindValue('aid', $_GET['admin_id'] );

$stmt->execute();

header('location: addisplay.php');

}catch(PDOException $e){

}

 ?>
