<?php 

    require '../Admin/include/connection.php';

    if (isset($_POST['patient']) && $_POST['patient'] == 'insert') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Appointment = $_POST['appointment'];
        $Doctor = $_POST['doctor'];
        $Department = $_POST['department'];
        $Message = $_POST['message'];
        

        // $PhotoName = $_FILES['photo']['name'];
        // $PhotoSize = $_FILES['photo']['size'];
        // $PhotoType = $_FILES['photo']['type'];
        // $PhotoTamp = $_FILES['photo']['tmp_name'];
        // if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
        //     $upload = move_uploaded_file($PhotoTamp,"../uploads/$PhotoName");
        // }
        //Patient_Photo = '$PhotoName',

        $query = "INSERT INTO patient SET 
        Patient_Name = '$Name',
        Patient_Email = '$Email',
        Patient_Phone = '$Phone',
        Patient_Appointment = '$Appointment',
        Patient_Message = '$Message',
        Doctor_ID = '$Doctor',
        Department_ID = '$Department'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../index.php?msg=success');
            exit();
        }
        else{
            header('location:../index.php?msg=error');
            exit();
        }

    }

?>