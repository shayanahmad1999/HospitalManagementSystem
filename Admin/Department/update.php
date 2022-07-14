<?php 

    require '../include/connection.php';

    if (isset($_POST['department']) && $_POST['department'] == 'update') {

        $Name = $_POST['name'];
        $update = $_POST['update'];

       if($_FILES['Photo']['name'] != ""){
        $PhotoName = $_FILES['Photo']['name'];
        $PhotoSize = $_FILES['Photo']['size'];
        $PhotoType = $_FILES['Photo']['type'];
        $PhotoTamp = $_FILES['Photo']['tmp_name'];
        if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp,"../uploads/$PhotoName");
        }
    }
        else{
            $PhotoName = $_POST['OldPhoto'];
        }

        $query = "UPDATE department SET 
        Department_Name = '$Name',
        Department_Photo = '$PhotoName'
        where Department_ID = '$update'";
  
        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../Department_Table.php?msgs=success');
            exit();
        }
        else{
            header('location:../Department_Table.php?msgs=error');
            exit();
        }

    }

?>