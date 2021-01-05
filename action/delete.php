<?php 
include('../process/config.php');
session_start();

if($_SESSION['level'] !== 'admin' AND $_SESSION['level'] !== 'staff') {
    header('Location: ../index.php');
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM menu WHERE id_makanan = $id";

$query = mysqli_query($conn, $sql);

if($query) {
    header('Location: ../admin/panel.php');
    exit;
}

?>