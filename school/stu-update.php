<?php require_once('db.php'); ?>

<?php

try{

$query = "UPDATE `school`.student SET `name` = :nam, fname = :fnam, c_id = :cid, dob = :db, address = :add, phone = :mob  WHERE s_id = :sid";

$stmt = $conn->prepare($query);

$stmt->bindValue('nam', $_GET['sname'] );
$stmt->bindValue('fnam', $_GET['paname'] );
$stmt->bindValue('cid', $_GET['choose'] );
$stmt->bindValue('db', $_GET['sdob'] );
$stmt->bindValue('add', $_GET['addss'] );
$stmt->bindValue('mob', $_GET['pho'] );
$stmt->bindValue('sid', $_GET['student_id'] );

$stmt->execute();

header('location: stu-display.php');



}catch(PDOException $e){

}

?>
