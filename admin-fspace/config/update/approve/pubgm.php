<?php
include "../../../koneksi.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);
$update = mysqli_query($conn, "UPDATE `fspace_account` SET `validasi_payment` = 1 WHERE id = '$id' ");

if (mysqli_affected_rows($conn)) {
    echo "<script>alert('Account Has Been Approved'); 
    location.href='../../../pages/sport_pubgm/reject.php';</script>";
} else {
    echo "<script>alert('Account Has Not Approved'); 
    location.href='../../../pages/sport_pubgm/reject.php';</script>";
}
