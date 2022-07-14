<?php 

    require '../include/connection.php';

    if (isset($_POST['patient']) && $_POST['patient'] == 'update') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Appointment = $_POST['appointment'];
        $Doctor = $_POST['doctor'];
        $Department = $_POST['department'];
        $Message = $_POST['message'];
        $update = $_POST['PatientUpdate'];

        if($_FILES['photo']['name'] != "")
        {
            $PhotoName = $_FILES['photo']['name'];
            $PhotoSize = $_FILES['photo']['size'];
            $PhotoType = $_FILES['photo']['type'];
            $PhotoTamp = $_FILES['photo']['tmp_name'];
            if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp,"../uploads/$PhotoName");
        }
        }
        else
        {
            $PhotoName = $_POST['newphoto'];
        }

        $query = "UPDATE patient SET 
        Patient_Name = '$Name',
        Patient_Email = '$Email',
        Patient_Phone = '$Phone',
        Patient_Appointment = '$Appointment',
        Patient_Photo = '$PhotoName',
        Patient_Message = '$Message',
        Doctor_ID = '$Doctor',
        Department_ID = '$Department'
        where Patient_ID = '$update'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Patient_Table.php?msgs=success');
            exit();
        }
        else{
            header('location:../Patient_Table.php?msgs=error');
            exit();
        }

    }

?>