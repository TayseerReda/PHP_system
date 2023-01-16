<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>
<?php
$id=$_SESSION['admin'];
$select="SELECT * FROM `admin` WHERE id=$id";
$op=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($op);
if(isset($_POST["go"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];
   // print_r($_FILES);
   $fname=time().$_FILES["image"]["name"];
    $temp_name=$_FILES["image"]["tmp_name"];
    $direct='../employees/public/'.$fname;
    move_uploaded_file($temp_name,$direct);
$update="UPDATE `admin` SET `name`='$name',`PASSWORD`='$pass',`image`='$direct'";
mysqli_query($conn,$update);
}

?>

<div  class="container col-6">
    
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <label for="" > NAME</label>
    <input type="text"  class="form-control" name="name" value="<?=$row["name"]?>">
  </div>
  <div class="form-group">
  <label for="">Password</label>
    <input type="password" class="form-control" name ="pass"value="<?=$row["PASSWORD"]?>">
   
  </div>
  <div class="form-group">
  <label for="">Profile Photo</label>
  <img src="<?=$row["image"]?>" alt="">
    <input type="file" class="form-control"  name ="image" width="100">
  </div>

 
  <button type="submit" class="btn btn-primary" name="go">Edit</button>
</form>
    
<?php
include '../shared/footer.php';
?>