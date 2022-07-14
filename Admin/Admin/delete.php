<?php 

require '../include/connection.php';

$aid = $_GET['aid'];

$query = "delete from admin where Admin_ID = '$aid'";
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