<?php 

    require '../include/connection.php';

    $id = $_GET['id'];
    $query = "delete from department where Department_Id = '$id'";
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