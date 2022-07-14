<?php 

require '../include/connection.php';

$query = "delete from doctor";
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