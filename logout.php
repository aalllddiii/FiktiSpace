<?php
session_start();


if($_GET['href'] == 'sign-in'){
    echo "<script>location.href='./sign-in.php';</script>";
}else{
    echo "<script>alert('Good bye!'); location.href='./index.php';</script>";
}


// remove all session variables
session_unset();

// destroy the session
session_destroy();



?>