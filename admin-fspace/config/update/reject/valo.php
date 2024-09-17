<?php
include "../../../koneksi.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);
$update = mysqli_query($conn, "UPDATE `fspace_account` SET `validasi_payment` = 0 WHERE id = '$id' ");

if (mysqli_affected_rows($conn)) {
    echo "<script>alert('Account Has Been Reject'); 
    location.href='../../../pages/sport_valo/approve.php';</script>";
} else {
    echo "<script>alert('Account Has Not Reject'); 
    location.href='../../../pages/sport_valo/approve.php';</script>";
}
