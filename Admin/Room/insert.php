<?php 

    require '../include/connection.php';

    if (isset($_POST['room']) && $_POST['room'] == 'insert') {
        
        $Room = $_POST['room_type'];

        $query = "INSERT INTO room SET 
        room_type = '$Room'";
  
        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../room.php?msg=success');
            exit();
        }
        else{
            header('location:../room.php?msg=error');
            exit();
        }

    }

?>