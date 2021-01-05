<?php 
session_start();

if($_SESSION['level'] !== 'admin' AND $_SESSION['level'] !== 'staff') {
    header('Location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bu Prapto</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-light bg-primary">
            <div class="container">
                <a href="hello.php" class="navbar-brand text-white font-weight-bold">Toko Bu Prapto</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="hello.php" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="panel.php" class="nav-link text-white">Panel</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link text-white font-weight-bold">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- table -->
    <section id="table" class="pad">
        <div class="container">
            <h2 class="subtitle mb-2 font-weight-bold">Catalog Admin</h2>
            <a href="../action/tambah.php" class="btn btn-primary mb-4">Tambah</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../process/config.php');

                        $sql = 'SELECT * FROM menu';

                        $query = mysqli_query($conn,$sql);

                        $no = 1;

                        while($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['harga']; ?></td>
                                <td><?= $data['stok']; ?></td>
                                <td>
                                    <a href="../action/edit.php?id=<?= $data['id_makanan']; ?>" class="btn btn-success">Edit</a>
                                    <a href="../action/delete.php?id=<?= $data['id_makanan']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer" class="pad-fo">
        <div class="container">
            <h2 class="text-white mb-3 font-weight-bold">Toko Bu Prapto</h2>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <h5 class="text-white">Alamat</h5>
                    <p class="text-white">
                        Jl. Pemuda No 23, Klaten Utara, Klaten, Jawa Tengah, Indonesia
                    </p>
                </div>
                <div class="col-md-4 mb-2">
                    <h5 class="text-white">Contact</h5>
                    <p class="text-white">
                        Telephon : +62893252323
                    </p>
                </div>
                <div class="col-md-4 mb-2">
                    <h5 class="text-white">Social Media</h5>
                    <p class="text-white">
                        FB : Toko Bu Prapto
                    </p>
                </div>
            </div>
        </div>
    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
</body>
</html>