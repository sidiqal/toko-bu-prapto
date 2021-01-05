<?php 
include('config.php');

if(isset($_POST['submit'])) {
    $id = htmlspecialchars($_POST['id']);
    $nama_makanan = htmlspecialchars($_POST['nama']);
    $harga_makanan = htmlspecialchars($_POST['harga']);
    $stok_makanan = htmlspecialchars($_POST['stok']);

    $sql = "UPDATE menu SET nama='$nama_makanan',harga='$harga_makanan',stok='$stok_makanan' WHERE id_makanan = $id";

    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../admin/panel.php');
        exit;
    }
}

?>