<?php require_once('db.php'); ?>
<?php

try{

$query = "DELETE FROM `admin_user` WHERE `a_id` =".$_GET['id'];

$conn->exec($query);

header('location: addisplay.php');


}catch(PDOException $e){

}


 ?>
