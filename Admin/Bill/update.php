<?php 

    require '../include/connection.php';

    if (isset($_POST['bill']) && $_POST['bill'] == 'update') {
        
        $Doctor = $_POST['doctor'];
        $Room = $_POST['room'];
        $Laboratory = $_POST['laboratory'];
        $Days = $_POST['days'];
        $Patient = $_POST['patient'];
        $update = $_POST['update'];

        $query = "UPDATE bill SET 
        Doctor_Charge = '$Doctor',
        Room_Charge = '$Room',
        Laboratory_Charge = '$Laboratory',
        No_of_Days	 = '$Days',
        Patient_ID = '$Patient'
        where Bill_ID = '$update'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../bill_table.php?msg=success');
            exit();
        }
        else{
            header('location:../bill_table.php?msg=error');
            exit();
        }

    }

?>