<?php 

    require '../include/connection.php';

    if (isset($_POST['admin']) && $_POST['admin'] == 'update') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $update = $_POST['AdminUpdate']; 

       if($_FILES['photo']['name'] != ""){
        $PhotoName = $_FILES['photo']['name'];
        $PhotoSize = $_FILES['photo']['size'];
        $PhotoType = $_FILES['photo']['type'];
        $PhotoTamp = $_FILES['photo']['tmp_name'];
        if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp, "../uploads/$PhotoName");
        }
       }
       else{
        $PhotoName = $_POST['newphoto'];
    }

        $query = "UPDATE admin SET 
        Admin_Name = '$Name',
        Admin_Email = '$Email',
        Admin_Password = '$Password',
        Admin_Picture = '$PhotoName'
        where Admin_ID = '$update'";
        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Admin_Table.php?msgs=success');
            exit();
        }
        else{
            header('location:../Admin_Table.php?msgs=error');
            exit();
        }

    }

?>