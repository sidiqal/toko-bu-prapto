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
                <a href="index.php" class="navbar-brand text-white font-weight-bold">Toko Bu Prapto</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../catalog.php" class="nav-link text-white">Catalog</a>
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

    <!-- Hero -->
    <section id="tambah" class="pad">
        <div class="container">
            <div class="row d-flex align-items-center balik">
                <div class="col-md-6">
                    <h2 class="font-weight-bold">Tambah Data</h2>
                    <form action="../process/tambah-process.php" method="POST">
                        <div class="form-body mb-3">
                            <label for="nama">Nama Makanan :</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-body mb-3">
                            <label for="harga">Harga Makanan :</label>
                            <input type="text" class="form-control" name="harga" id="harga">
                        </div>
                        <div class="form-body mb-3">
                            <label for="stok">Stok Makanan :</label>
                            <input type="text" class="form-control" name="stok" id="stok">
                        </div>
                        <div class="form-body mb-3">
                            <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="../assets/img/shutterstock_1223567968.jpg" alt="makanan" class="img-kanan rounded mb-4">
                </div>
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