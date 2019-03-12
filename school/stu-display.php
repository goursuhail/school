<?php
require_once('header.php');
require_once('db.php');
 ?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">#Student List</h1>


       <!-- search bar -->
       <div class="container">
       <form class="form-inline">

       <div class="form-group mb-2">
       <select name="search_field">
         <option value="s_id">Id</option>
         <option value="name">Student Name</option>
       </select>
     </div>

     <div class="form-group mx-sm-3 mb-2">
       <label for="inputPassword2" class="sr-only">search</label>
       <input type="text" class="form-control" name="search" id="inputPassword2" placeholder="search....">
     </div>
     <button type="submit" class="btn btn-primary mb-2">Search</button>
   </form>
   </div>

   <!-- Add new -->
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="student.php">Add New</a>

      </div>
    </div>
   </div>


<?php

try{

  $search = '';

   if(isset($_GET['search']) && $_GET['search'] != ''){
     $search = $_GET['search'];
   }

  $query = 'SELECT * FROM `student`';


  if($search != ''){

    $query = $query." WHERE ".$_GET['search_field']." = '".$search."'";
  }

  $stmt = $conn->query($query);
  ?>


  <table class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">S.Id</th>
    <th scope="col">S.Name</th>
    <th scope="col">F.Name</th>
    <th scope="col">C.Id</th>
    <th scope="col">Dob</th>
    <th scope="col">Address</th>
    <th scope="col">Phone</th>
    <th scope="col">Operation</th>
  </tr>
</thead>

<?php
while($row = $stmt->fetch()){
?>

  <tr>

    <td><?php echo $row['s_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['c_id']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><a href="stu-edit.php?edit=<?php echo $row['s_id']; ?>">Edit</a></td>
    <td><a href="stu-delete.php?id=<?php echo $row['s_id']; ?>">Delete</a></td>

  </tr>

  <?php
}
?>

</table>
<?php

}catch(PDOException $e){

}

 ?>
 <?php require_once('footer.php'); ?>
</main>
