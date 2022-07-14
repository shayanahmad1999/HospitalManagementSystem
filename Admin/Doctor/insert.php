<?php 

    require '../include/connection.php';

    if (isset($_POST['doctor']) && $_POST['doctor'] == 'insert') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Address = $_POST['address'];

        $PhotoName = $_FILES['photo']['name'];
        $PhotoSize = $_FILES['photo']['size'];
        $PhotoType = $_FILES['photo']['type'];
        $PhotoTamp = $_FILES['photo']['tmp_name'];
        if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp, "../uploads/$PhotoName");
        }

        $query = "INSERT INTO doctor SET 
        Doctor_Name = '$Name',
        Doctor_Email = '$Email',
        Doctor_Phone = '$Phone',
        Doctor_Address = '$Address',
        Doctor_Photo = '$PhotoName'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Doctor.php?msg=success');
            exit();
        }
        else{
            header('location:../Doctor.php?msg=error');
            exit();
        }

    }

?>