<?php 

    require '../include/connection.php';

    if (isset($_POST['room']) && $_POST['room'] == 'update') {

        $Room = $_POST['room_type'];
        $update = $_POST['update'];

        $query = "UPDATE room SET 
        room_type = '$Room'
        where room_id = '$update'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../room_Table.php?msgs=success');
            exit();
        }
        else{
            header('location:../room_Table.php?msgs=error');
            exit();
        }

    }

?>