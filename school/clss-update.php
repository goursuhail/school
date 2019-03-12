<?php require_once('db.php'); ?>

<?php

try{

$query = "UPDATE `school`.class SET `class_name` = :clsname WHERE c_id = :cid";

$stmt = $conn->prepare($query);

$stmt->bindValue('clsname', $_GET['classname'] );
$stmt->bindValue('cid', $_GET['class_id'] );

$stmt->execute();

header('location: cls-display.php');



}catch(PDOException $e){

}

?>
