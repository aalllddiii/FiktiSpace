<?php
session_start();
include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login dulu ngab');
        location.href= '../'
        </script>";
}
