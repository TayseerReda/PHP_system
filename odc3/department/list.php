<?php
include '../shared/header.php';
include '../shared/nav.php';
include '../general/environment.php';
include '../general/functions.php';
?>


<?php

$select="SELECT * FROM department";
$row=mysqli_query($conn,$select );
?>

</table>

<div >
<table class="table table-dark">

<tr>
<td>Department_ID</td>
    <td>Department_Name</td>
</tr>
<?php foreach($row as $data){ ?>

    <tr>
<td><?=$data["id"]?></td>
 <td><?=$data["name"]?></td>
   
    <td>
      <a class="btn btn-danger"  href="/ODC3/department/delete.php?delete=<?=$data['id']?>">DELETE</a>
      <a class="btn btn-success" href="/ODC3/department/update.php?edit=<?=$data['id']?>"> UPDATE </a>

  
    </td>

    
</tr>
<?php } ?>

</table>



<?php
include '../shared/footer.php';
?>