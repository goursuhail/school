<?php require_once('db.php'); ?>
<?php

try{

$query = "DELETE FROM `teacher` WHERE `t_id` =".$_GET['id'];

$conn->exec($query);

header('location: teach-display.php');


}catch(PDOException $e){

}


 ?>
