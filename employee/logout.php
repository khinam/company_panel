<?php
    session_start();
    unset($_SESSION["user"]);
    //session_destroy();
    
    //echo 'You have cleaned session';
    header('location: ../index.php');
?>