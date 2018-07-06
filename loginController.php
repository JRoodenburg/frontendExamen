<?php
    if (!$_SESSION){
       session_start();
    }
    $regCode = "1A32ZP859UKB4";
    $password = $_POST['password'];

    if ($password === $regCode){
        $_SESSION['loggedin'] = true;
    }
    header("Location: index.php");

session_write_close();
?>