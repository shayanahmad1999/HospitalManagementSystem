<?php 

require '../include/connection.php';

$query = "delete from admin";
$go = mysqli_query($connect,$query);

if($go)
{
    header('location:../Admin_Table.php?msg=success');
    exit();
}
else
{
    header('location:../Admin_Table.php?msg=error');
    exit();   
}


?>