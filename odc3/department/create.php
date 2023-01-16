<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>
<?php
if(isset($_POST["go"])){
    $name=$_POST["name"];

    $inser="INSERT INTO `department` VALUES('$name',null )";
    mysqli_query($conn,$inser);

   header('Location:list.php');
   
}


?>
<div class="form">

<div  class="container col-6">
    
    <form method="POST" ">
      <div class="form-group ">
      <label for="" >Depatrment NAME</label>
        <input type="text" class="form-control" name="name" >

      <button type="submit" class="btn btn-primary " name="go">Submit</button>
    </form>
    
    </div>
    
  
    
    </div>
    </div>


<?php
include '../shared/footer.php';
?>