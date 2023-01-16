<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';

?>

<?php
if(isset($_GET['edit'])){
$id=$_GET['edit'];




$sel="SELECT * FROM employee WHERE id=$id";
$update=mysqli_query($conn,$sel);
$table=mysqli_fetch_assoc($update);

$readcity="SELECT * FROM city";
$ct=mysqli_query($conn,$readcity );

$readDept="SELECT * FROM department";
$depaert=mysqli_query($conn,$readDept );

if(isset($_POST["go"])){
    $name=$_POST["empname"];
    $salary=$_POST["empsalary"];
    $phone=$_POST["empphone"];
    $dept=$_POST["empdept"];
    $city=$_POST["empcity"];

  
    $fname=time().$_FILES["image"]["name"];
    $temp_name=$_FILES["image"]["tmp_name"];
    $direct='./public/'.$fname;
    move_uploaded_file($temp_name,$direct);

    $inser=" UPDATE  `employee` SET `name` = '$name',salary=$salary,phone=$phone ,`image`=' $direct',depid=$dept,cityid=$city WHERE id=$id";
    mysqli_query($conn,$inser);

    header('Location:list.php');
   
}
}
?>

<div  class="container col-6">
    
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <label for="" >EMPLOYEE NAME</label>
    <input type="text"  class="form-control" name="empname" value="<?=(isset($table["name"]))?
    $table["name"]:''?>"> 
  </div>
  <div class="form-group">
  <label for="">EMPLOYEE PHONE</label>
    <input type="text" class="form-control" name ="empphone" value="<?=(isset($table['phone']))?
    $table["phone"]:'' ?>">
  </div>
  <div class="form-group">
  <label for="">EMPLOYEE SALARY</label>
    <input type="text" class="form-control"  name ="empsalary" value="<?=(isset($table['salary']))?
    $table["salary"]:'' ?>">
  </div>



  
  <div class="form-group">
  <label for="">Profile Photo</label>
  <img src="<?=$table["image"]?>" alt="" width =100>
  <input type="file" name="image">


  <div class="form-group">
  <label for="">EMPLOYEE CITY</label>
    <select name="empcity" id="" class="form-control">

        <?php foreach($ct as $data ){?>
            <option value="<?=$data["id"] ?>"><?=$data["name"]?></option>
            <?php } ?>
        
    </select>
  </div>
  <div class="form-group">
  <label for="">EMPLOYEE DEPATMENT</label>
  <select name="empdept" id="" class="form-control">

  <?php foreach($depaert as $data ){?>
            <option value="<?=$data["id"] ?>"><?=$data["name"]?></option>
            <?php } ?>

    </select>
  </div>
 
  <button type="submit" class="btn btn-primary" name="go">Submit</button>
</form>
    
    </div>
    
  
    
    </div>

<?php
include '../shared/footer.php';
?>
