<?php 

    require '../include/connection.php';

    $query = "delete from room";
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