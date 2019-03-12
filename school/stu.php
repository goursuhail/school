<?php require_once('db.php'); ?>

<?php
try{
  $query = "INSERT INTO `student`(`name`, `fname`, `c_id`, `dob`, `address`, `phone`) values(:nam, :fname, :cid, :dob, :addr, :mob)";
  //print_r($query);
  $stmt = $conn->prepare($query);
  $stmt->bindValue('nam', $_POST['sname'] );
  $stmt->bindValue('fname', $_POST['paname'] );
  $stmt->bindValue('cid', $_POST['choose'] );
  $stmt->bindValue('dob', $_POST['sdob'] );
  $stmt->bindValue('addr', $_POST['addss'] );
  $stmt->bindValue('mob', $_POST['pho'] );
  $stmt->execute();
  header('location: stu-display.php');
  //echo "New Record Added Succesfully";

}catch(PDOException $e){
  echo"Error:". $e->getMessage();
}
?>
