<?php 

    session_start();
    
    $connect = mysqli_connect("localhost","root","","hospital_management_system");
    if (mysqli_connect_errno()) {
        echo "sorry data base is not connected". mysqli_connect_error();
    }

?>