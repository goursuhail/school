<?php require_once('db.php'); ?>
<?php

try{


$query = "UPDATE `school`.subject SET `sub_name` = :suname WHERE id = :sid";

$stmt = $conn->prepare($query);

$stmt->bindValue('suname', $_GET['subname'] );
$stmt->bindValue('sid', $_GET['subject_id'] );

$stmt->execute();

header('location:subj-display.php');

}catch(PDOException $e){

}


 ?>
