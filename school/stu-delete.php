<?php require_once('db.php'); ?>
<?php

try{

$query = "DELETE FROM `student` WHERE `s_id` =".$_GET['id'];

$conn->exec($query);

header('location: stu-display.php');


}catch(PDOException $e){

}
 ?>
