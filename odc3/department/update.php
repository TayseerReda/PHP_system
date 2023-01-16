<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';

?>

<?php
if(isset($_GET['edit'])){
$id=$_GET['edit'];




$sel="SELECT * FROM department WHERE id=$id";
$update=mysqli_query($conn,$sel);
$table=mysqli_fetch_assoc($update);


if(isset($_POST["go"])){
    $name=$_POST["name"];
   

    $inser=" UPDATE  `department` SET `name` = '$name' WHERE id=$id";
    mysqli_query($conn,$inser);
    header('Location:list.php');
   
}
}
?>

<div  class="container col-6">
    
<form method="POST" >
  <div class="form-group">
  <label for="" >Department NAME</label>
    <input type="text"  class="form-control" name="name" value="<?=(isset($table["name"]))?
    $table["name"]:''?>"> 
  </div>

  <button type="submit" class="btn btn-primary" name="go">Submit</button>
</form>
    
    </div>
    
  
    
    </div>

<?php
include '../shared/footer.php';
?>
