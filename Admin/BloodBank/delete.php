<?php 

require '../include/connection.php';

$id = $_GET['id'];

$query = "delete from bloodbank where ID = '$id'";
$go = mysqli_query($connect,$query);

if($go)
{
    header('location:../bloodbank_table.php?msg=success');
    exit();
}
else
{
    header('location:../bloodbank_table.php?msg=error');
    exit();   
}


?>