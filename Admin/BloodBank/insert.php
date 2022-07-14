<?php 

    require '../include/connection.php';

    if (isset($_POST['bloodbank']) && $_POST['bloodbank'] == 'insert') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Address = $_POST['address'];
        $Phone = $_POST['phone'];
        $Sex = $_POST['gender'];
        $BloodGroup = $_POST['bloodgroup'];
        $LastDonation = $_POST['lastdonation'];

        $query = "INSERT INTO bloodbank SET 
        username = '$Name',
        email = '$Email',
        address = '$Address',
        phone = '$Phone',
        sex = '$Sex',
        bloodgroup = '$BloodGroup',
        lastdonation = '$LastDonation'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../bloodbank.php?msg=success');
            exit();
        }
        else{
            header('location:../bloodbank.php?msg=error');
            exit();
        }

    }

?>