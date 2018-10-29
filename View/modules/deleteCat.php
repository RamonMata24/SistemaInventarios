<?php 

session_start();
if (!$_SESSION['validar']) {
    header('location: login.php');
    exit();
}

$delete = new Controller();
$delete->deleteCatController();
?>