<?php 

require '../include/connection.php';

$query = "delete from bloodbank";
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