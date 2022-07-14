<?php
// session_start(); 
// echo 'in';
// print_r($_SESSION); exit;

if (!isset($_SESSION['ADID']) || empty($_SESSION['ADID'])); {
    header('location:index.php?msg=you not access directly please first login');
    exit();
}
?>