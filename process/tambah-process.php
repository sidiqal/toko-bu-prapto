<?php 
include('config.php');

if(isset($_POST['submit'])) {
    $nama_makanan = htmlspecialchars($_POST['nama']);
    $harga_makanan = htmlspecialchars($_POST['harga']);
    $stok_makanan = htmlspecialchars($_POST['stok']);

    $sql = "INSERT INTO menu(nama, harga, stok) VALUES ('$nama_makanan', '$harga_makanan', '$stok_makanan')";

    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../catalog.php');
        exit;
    }
}

?>