<?php
session_start();
include "../koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM data_admin WHERE username = '$username' AND `password` = PASSWORD('$password') ");
    $data = mysqli_fetch_array($sql);
    $cek = mysqli_num_rows($sql);

    if ($cek === 1) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Selamat datang'); 
                location.href='../pages';</script>";
    } else {
        echo "<script>alert('Mohon maaf akun salah'); 
            location.href='../';</script>";
    }
}
