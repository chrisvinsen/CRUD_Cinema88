<?php 
    session_start();
    unset($_SESSION['status']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    session_destroy();
    header("location: ../view/user_login.php");
?>