<?php 

    require '../include/connection.php';

    $id = $_GET['id'];
    $query = "delete from room where room_id = '$id'";
    $go = mysqli_query($connect,$query);

    if($go){
        header('location:../room_Table.php?msg=success');
        exit();
    }
    else{
        header('location:../room_Table.php?msg=error');
        exit();
    }

?>