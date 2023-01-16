<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>

<?php

$id=$_SESSION["admin"];
$select="SELECT * FROM `admin` WHERE id=$id ";
$row=mysqli_query($conn,$select );

?>

</table>

<table class="table table-dark">

<?php foreach($row as $data){ ?>
  <tr>
    <td>Name</td>
    <td><?=$data["name"]?></td>
</tr>
<tr>
<td>pasword</td>
<td><?=$data["PASSWORD"]?></td>
</tr>
<tr>
    <td>Photo</td>
    <td><img src="<?=$data["image"]?> " width=100 alt=""></td>
    </tr>
    <tr>
    <td><a class="btn btn-success"  href="/ODC3/admin/edit.php"> UPDATE </a></td> 
     
    </tr>
    
      <?php } ?>

</table>

<?php
include '../shared/footer.php';
?>