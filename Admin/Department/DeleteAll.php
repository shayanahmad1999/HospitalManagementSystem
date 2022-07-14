<?php 

    require '../include/connection.php';

    $query = "delete from department";
    $go = mysqli_query($connect,$query);

    if($go){
        header('location:../Department_Table.php?msg=success');
        exit();
    }
    else{
        header('location:../Department_Table.php?msg=error');
        exit();
    }

?>