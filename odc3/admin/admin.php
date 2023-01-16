<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>
<?php
if(isset($_POST["go"])){
    $name=$_POST["name"];
    $pass=$_POST["password"];
   
    $fname=$_FILES["image"]["name"];
    $fname=time().$fname;
    $temp_name=$_FILES["image"]["tmp_name"];
    $direct='./public/'.$fname;
    move_uploaded_file($temp_name,"$direct");

    $insert="INSERT INTO `admin` VALUES(null,'$name','$pass','$direct')";
    mysqli_query($conn,$insert);
}



?>
<div class="form">

<div  class="container col-6">
    
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group ">
      <label for="" > Name</label>
        <input type="text" class="form-control" name="name" >
      </div>
      <div class="form-group">
      <label for="">Password </label>
        <input type="text" class="form-control" name ="password">
      </div>
      <label for="">Profile </label>
        <input type="file"  name ="image">
      </div>
      <button type="submit" class="btn btn-primary " name="go">Add Admin</button>
    </form>
    
    </div>
    </div>
    </div>


<?php
include '../shared/footer.php';
?>