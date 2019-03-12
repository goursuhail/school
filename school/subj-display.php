
<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">#Subject List</h1>

        <!-- search bar-->
        <div class="container">
        <form class="form-inline">

        <div class="form-group mb-2">
        <select name="search_field">
          <option value="id">Id</option>
          <option value="sub_name">Subject Name</option>
        </select>
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">search</label>
        <input type="text" class="form-control" name="search" id="inputPassword2" placeholder="search....">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
    </div>

        <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
           <a class="btn btn-sm btn-outline-secondary" href="subject.php">Add New</a>

         </div>
       </div>
      </div>


<?php

try{

  $search = '';
  if(isset($_GET['search']) && $_GET['search'] != '')
    $search = $_GET['search'];


  $query = 'SELECT * FROM `subject`';

  if($search != ''){
    $query = $query." WHERE ".$_GET['search_field']." = '".$search."'";
  }

  $stmt = $conn->query($query);

      ?>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sub Id</th>
      <th scope="col">Sub Name</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>

  <?php
  while($row = $stmt->fetch()){
  ?>

    <tr>

      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['sub_name']; ?></td>
      <td><a href="subj-edit.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
      <td><a href="subj-delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

    </tr>

    <?php
  }
  ?>
</table>
<?php

}catch(PDOException $e){

}

 ?>
</main>
<?php require_once('footer.php'); ?>
