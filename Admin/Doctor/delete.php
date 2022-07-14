<?php 

require '../include/connection.php';

$id = $_GET['id'];

$query = "delete from doctor where Doctor_ID = '$id'";
$go = mysqli_query($connect,$query);

if($go)
{
    header('location:../Doctor_Table.php?msg=success');
    exit();
}
else
{
    header('location:../Doctor_Table.php?msg=error');
    exit();   
}


?>