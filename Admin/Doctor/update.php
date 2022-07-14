<?php 

    require '../include/connection.php';

    if (isset($_POST['doctor']) && $_POST['doctor'] == 'update') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Address = $_POST['address'];
        $update = $_POST['DoctorUpdate'];

        if($_FILES['photo']['name'] != "")
        {
            $PhotoName = $_FILES['photo']['name'];
            $PhotoSize = $_FILES['photo']['size'];
            $PhotoType = $_FILES['photo']['type'];
            $PhotoTamp = $_FILES['photo']['tmp_name'];
            if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp, "../uploads/$PhotoName");
        }
        }
        else
        {
            $PhotoName = $_POST['newphoto'];
        }

        $query = "UPDATE doctor SET 
        Doctor_Name = '$Name',
        Doctor_Email = '$Email',
        Doctor_Phone = '$Phone',
        Doctor_Address = '$Address',
        Doctor_Photo = '$PhotoName'
        where Doctor_ID = '$update'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Doctor_Table.php?msgs=success');
            exit();
        }
        else{
            header('location:../Doctor_Table.php?msgs=error');
            exit();
        }

    }

?>