<?php
  
include 'dbh.php';

$ID = "";
$NAME = "";
$ADDRESS = "";
$CONTACT = "";

function getPosts()
{
  $posts[0] = $_POST['id'];
  $posts[1] = $_POST['name'];
  $posts[2] = $_POST['address'];
  $posts[3] = $_POST['contact'];
  return $posts;
}




//insert a record
if (isset($_POST['Insert'])) {
  $data = getPosts();

 $insert_Query ="INSERT INTO `university`.`student` (`id`, `name`, `address`, `contact`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";

     

     try{
      $insert_Result = mysqli_query($conn, $insert_Query);
      if ($insert_Result) {
        if (mysqli_affected_rows($conn) > 0) {
          echo "Data Inserted";
        }
        else{
          echo "Data Not Inserted";
        }
      }
     }
     catch(Exception $ex){
  echo "Error Insert".$ex->getMessage();
}

}



//delete a record
if (isset($_POST['Delete'])) {

$data = getPosts();

 
    $delete_Query = "DELETE FROM student
    WHERE id='$data[0]'";

    try{
      $delete_Result = mysqli_query($conn, $delete_Query);
      if ($delete_Result) {
        if (mysqli_affected_rows($conn) > 0) {
          echo "Data Deleted";
        }
        else{
          echo "Data Not Deleted";
        }
      }
    }
         catch(Exception $ex){
  echo "Error Delete".$ex->getMessage();
  }

}


//search a record
if (isset($_POST['Search'])) {

  $data = getPosts();

 
  $search_Query = "SELECT * FROM student WHERE id=$data[0]";


    $search_Result = $conn->query($search_Query);

  if ($search_Result) {
    if (mysqli_num_rows($search_Result)) {
      while ($row = mysqli_fetch_array($search_Result)) {
        $ID = $row['id'];
        $NAME = $row['name'];
        $ADDRESS= $row['address'];
        $CONTACT = $row['contact'];
      }
    }
    else{
      echo "No data for this ID";
    }
  }
  else{
    echo "Result Error";
  }

  
}


//update a record
if (isset($_POST['Update'])) {

  $data = getPosts();

 
  $update_Query = "UPDATE `student` SET `name`='$data[1]',`address`='$data[2]',`contact`='$data[3]' WHERE id=$data[0]";


   try{
      $update_Result = mysqli_query($conn, $update_Query);
      if ($update_Result) {
        if (mysqli_affected_rows($conn) > 0) {
          echo "Data Updated";
        }
        else{
          echo "Data Not Updated";
        }
      }
    }
         catch(Exception $ex){
  echo "Error Update".$ex->getMessage();
  }
  
} 



/*header("Location: CRUD_in_php.php");*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Contact Details</h1>
  <p>Enter your Details!</p> 
</div>
  
<div class="container">
 <form class="form-horizontal" method="post" action="CRUD_in_php.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="ID">ID:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID" value="<?php echo $ID; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="nm" name="name" placeholder="Enter name" value="<?php echo $NAME; ?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="add">Address:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="add" name="address" placeholder="Enter add" value="<?php echo $ADDRESS; ?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="con">Contact:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="co" name="contact" placeholder="Enter contact" value="<?php echo $CONTACT; ?>">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>

 <div class="row">
    <div class="col-sm-3">
      <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Insert" class="btn btn-default">Insert</button>
    </div>
  </div> 
    </div>

    <div class="col-sm-3">
      <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Search" class="btn btn-default">Search</button>
    </div>
  </div>
    </div>

    <div class="col-sm-3">
       <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Delete" class="btn btn-default">Delete</button>
    </div>
  </div>
    </div>
 <div class="col-sm-3">
       <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Update" class="btn btn-default">Update</button>
    </div>
  </div>
    </div>

  </div>


</form>
</div>

</body>
</html>
