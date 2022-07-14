<?php

require '../include/connection.php';

$query = "delete from patient";
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