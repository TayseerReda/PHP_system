
<?php
$con=mysqli_connect("localhost", "root", "", "odc4");
$id=$_GET['delete'];
$del="DELETE FROM department WHERE id= $id ";
mysqli_query($con,$del);

header('Location:list.php');