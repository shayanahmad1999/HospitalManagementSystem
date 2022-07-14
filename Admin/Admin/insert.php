<?php 

    require '../include/connection.php';

    if (isset($_POST['admin']) && $_POST['admin'] == 'insert') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $PhotoName = $_FILES['photo']['name'];
        $PhotoSize = $_FILES['photo']['size'];
        $PhotoType = $_FILES['photo']['type'];
        $PhotoTamp = $_FILES['photo']['tmp_name'];
        if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp, "../uploads/$PhotoName");
        }

        $query = "INSERT INTO admin SET 
        Admin_Name = '$Name',
        Admin_Email = '$Email',
        Admin_Password = '$Password',
        Admin_Picture = '$PhotoName'";
        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Admin.php?msg=success');
            exit();
        }
        else{
            header('location:../Admin.php?msg=error');
            exit();
        }

    }

?>