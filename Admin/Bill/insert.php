<?php 

    require '../include/connection.php';

    if (isset($_POST['bill']) && $_POST['bill'] == 'insert') {
        
        $Doctor = $_POST['doctor'];
        $Room = $_POST['room'];
        $Laboratory = $_POST['laboratory'];
        $Days = $_POST['days'];
        $Patient = $_POST['patient'];

        $query = "INSERT INTO bill SET 
        Doctor_Charge = '$Doctor',
        Room_Charge = '$Room',
        Laboratory_Charge = '$Laboratory',
        No_of_Days	 = '$Days',
        Patient_ID = '$Patient'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../bill.php?msg=success');
            exit();
        }
        else{
            header('location:../bill.php?msg=error');
            exit();
        }

    }

?>