<?php
include "../../../koneksi.php";

$username = $_GET['username'];
$id = mysqli_real_escape_string($conn, $_GET['id']);
$update = mysqli_query($conn, "UPDATE `fspace_mobilelegend` SET `validasi` = 0 WHERE id = '$id' ");

if (mysqli_affected_rows($conn)) {
    echo "<script>alert('Account Has Been Rejected'); 
    location.href='../../../pages/sport_ml/approve_team.php?username=$username';</script>";
} else {
    echo "<script>alert('Account Has Not Rejected'); 
    location.href='../../../pages/sport_ml/approve_team.php?username=$username';</script>";
}
