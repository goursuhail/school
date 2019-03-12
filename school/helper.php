<?php

function get_class1($conn){

  $query = 'SELECT * FROM `class`';

  $stmt = $conn->query($query);

  while($row = $stmt->fetch()){
    $section[$row['c_id']] = $row['class_name'];
  }
  return $section;
}
