<?php
 function testMessage($connection, $message)
{
    if ($connection) {
        echo " <div class='alert alert-success col-4 mx-auto'>
   $message Done Successfuly
</div>";
    } else {
        echo " <div class='alert alert-danger col-4 mx-auto'>
        $message Falied Proccess
     </div>";
    }
}