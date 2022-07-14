<?php 

    require '../include/connection.php';

    if (isset($_POST['bloodbank']) && $_POST['bloodbank'] == 'update') {
        
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Address = $_POST['address'];
        $Phone = $_POST['phone'];
        $Sex = $_POST['gender'];
        $BloodGroup = $_POST['bloodgroup'];
        $LastDonation = $_POST['lastdonation'];
        $update = $_POST['bloodbankupdate'];

        $query = "UPDATE bloodbank SET 
        username = '$Name',
        email = '$Email',
        address = '$Address',
        phone = '$Phone',
        sex = '$Sex',
        bloodgroup = '$BloodGroup',
        lastdonation = '$LastDonation'
        WHERE ID = '$update'";

        $submit = mysqli_query($connect,$query);

        if ($submit) {
            header('location:../bloodbank_table.php?msgs=success');
            exit();
        }
        else{
            header('location:../bloodbank_tabble.php?msgs=error');
            exit();
        }

    }

?>