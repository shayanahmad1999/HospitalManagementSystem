<?php 

    require '../include/connection.php';

    if (isset($_POST['department']) && $_POST['department'] == 'insert') {
        
        $Name = $_POST['name'];

        $PhotoName = $_FILES['Photo']['name'];
        $PhotoSize = $_FILES['Photo']['size'];
        $PhotoType = $_FILES['Photo']['type'];
        $PhotoTamp = $_FILES['Photo']['tmp_name'];
        if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp,"../uploads/$PhotoName");
        }

        $query = "INSERT INTO department SET 
        Department_Name = '$Name',
        Department_Photo = '$PhotoName'";
  
        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Department.php?msg=success');
            exit();
        }
        else{
            header('location:../Department.php?msg=error');
            exit();
        }

    }

?>