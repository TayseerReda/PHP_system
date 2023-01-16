<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>
<?php
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



    //print_r($_FILES);
    //file code
    $fname=time().$_FILES["image"]["name"];
    $temp_name=$_FILES["image"]["tmp_name"];
    $direct='./public/'.$fname;
    move_uploaded_file($temp_name,$direct);


    $inser="INSERT INTO `employee` VALUES(null,'$name' , $salary,'$direct',$phone ,$city,$dept)";
    mysqli_query($conn,$inser);




   // header('Location:list.php');
   
}
$reademp="SELECT * FROM employee";
$emp=mysqli_query($conn,$reademp);

//print_r($_FILES);


?>

<div class="form">

<div  class="container col-6">
    
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group ">
      <label for="" >EMPLOYEE NAME</label>
        <input type="text" class="form-control" name="empname" >
      </div>
      <div class="form-group">
      <label for="">EMPLOYEE PHONE</label>
        <input type="text" class="form-control" name ="empphone">
      </div>
      <div class="form-group">
      <label for="">EMPLOYEE SALARY</label>
        <input type="text" class="form-control"  name ="empsalary">

      </div>
      <div class="form-group">
      <label for="">upload</label>
      <input type="file" name="image">
      </div >

      <div class="form-group">
      <label for="">EMPLOYEE CITY</label>
        <select name="empcity" id="" class="form-control">
    
            <?php foreach($ct as $data ){?>
                <option value="<?=$data["id"]?>"><?=$data["name"]?></option>
                <?php } ?>
            
        </select>
      </div>
      <div class="form-group">
      <label for="">EMPLOYEE DEPATMENT</label>
      <select name="empdept" id="" class="form-control">
    
      <?php foreach($depaert as $data ){?>
                <option value="<?=$data["id"]?>"><?=$data["name"]?></option>
                <?php } ?>
    
        </select>
      </div>
     
      <button type="submit" class="btn btn-primary " name="go">Submit</button>
    </form>
    
    </div>
    
  
    
    </div>
    </div>

<?php
include '../shared/footer.php';
?>
