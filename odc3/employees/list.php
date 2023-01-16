<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>

<?php



/*$reademp="SELECT * FROM employee";
$emp=mysqli_query($conn,$reademp);

$readcity="SELECT * FROM city";
$ct=mysqli_query($conn,$readcity );

$readDept="SELECT * FROM department";
$depaert=mysqli_query($conn,$readDept );*/

$select="SELECT * FROM concatination ";
$concate=mysqli_query($conn,$select );

?>

</table>

<div >
<table class="table table-dark">

<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>SALARY</td>
    <td>PHONE</td>
    <td>CITY_ID</td>
    <td>DEPT_ID</td>
    <td>PROFILE</td>
    <td>ACTION</td>
</tr>
<?php foreach($concate as $data){ ?>
<tr>
  
    <td><?=$data["id"]?></td>
    <td><?=$data["name"]?></td>
    <td><?=$data["salary"]?></td>
    <td><?=$data["phone"]?></td>
    <td><?=$data["cityname"]?></td>
    <td><?=$data["depname"]?></td>
    <td><img src="<?=$data["image"]?> " width="100" alt=""></td>
    <td>

      <a class="btn btn-danger" href="/ODC3/employees/delete.php?delete=<?=$data['id']?>">DELETE</a>
      <a class="btn btn-success"  href="/ODC3/employees/update.php?edit=<?=$data['id']?>"> UPDATE </a>

  
    </td>

    
</tr>
<?php } ?>

</table>









<?php
include '../shared/footer.php';
?>