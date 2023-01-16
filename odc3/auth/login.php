<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';

?>
<?php
if(isset($_POST["go"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
$seladmin="SELECT * FROM `admin` where `name`='$name' and `PASSWORD`='$password' ";
$row=mysqli_query($conn,$seladmin);
//if($row)echo "true";
$num=mysqli_num_rows($row);
//echo $num;
$data=mysqli_fetch_assoc($row);
if($num==1){
   // echo "true";
 
 $_SESSION["admin"]=$data["id"];
 //echo $_SESSION["admin"];
 
 
}


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
      <button type="submit" class="btn btn-primary " name="go">login</button>
    </form>
    
    </div>
    </div>
    </div>

<?php
include '../shared/footer.php';
?>
