<?php

require '../include/connection.php';

$id = $_GET['id'];

$query = "delete from patient where Patient_ID = '$id'";
$go = mysqli_query($connect,$query);

if($go)
{
    header('location:../Patient_Table.php?msg=success');
    exit();
}
else{
    header('location:../Patient_Table.php?msg=error');
    exit();
}

?>