<?php 
include('config.php');
session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE username = '$username'";

    $query = mysqli_query($conn, $sql);

    // validasi username
    if(mysqli_num_rows($query) === 1) {

        // ambil data
        $data = mysqli_fetch_array($query);

        // validasi password
        if($password === $data['password']) {

            // validasi level
            if($data['level'] == 'admin' OR $data['level'] == 'staff') {

                // Buat session
                $_SESSION['username'] = $username;
                $_SESSION['level'] = $data['level'];

                header('Location: ../admin/hello.php');
                exit;
            }
        }
    }
}

?>