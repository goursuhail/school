<?php require_once('db.php'); ?>
<?php

try{


$query = "DELETE FROM `class` WHERE `c_id` =".$_GET['id'];

$conn->exec($query);

header('location: cls-display.php');


}catch(PDOException $e){

}

 ?>
