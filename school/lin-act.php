<?php require_once('db.php'); ?>

<?php

session_start();
try{

  $query = "SELECT * FROM `admin_user` WHERE user_name = :name and password = :passwd";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('name', $_POST['usname'] );
  $stmt->bindValue('passwd', $_POST['pass'] );

  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($row != false){
    echo 'login sucess';
    $_SESSION['user'] = $row;
    header('location: index.php');
  }else{
    header('location: log-in.php?message=fail');
  }

}catch(PDOException $e){

}

?>
