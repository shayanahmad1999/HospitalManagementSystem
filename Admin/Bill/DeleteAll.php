<?php 

require '../include/connection.php';

$id = $_GET['id'];

$query = "delete from bill";
$go = mysqli_query($connect,$query);

if($go)
{
    header('location:../bill_table.php?msg=success');
    exit();
}
else
{
    header('location:../bill_table.php?msg=error');
    exit();   
}


?>