<?php require_once('db.php'); ?>
<?php

try{


$query = "DELETE FROM `subject` WHERE `id` =".$_GET['id'];

$conn->exec($query);

header('location: subj-display.php');


}catch(PDOException $e){

}


 ?>
