<?php
    session_start();
    include 'common.php';
    $con = new Common();
    $data = $con->getAllRow("SELECT * FROM login");
    // echo $_POST['username'];
    // exit();

        if($_POST['email'] === $data['email'] and md5($_POST['password']) === $data['password']) {
            $_SESSION['user'] = $data['name'];
            header('Location: dashboard.php');
        }
        else {
             header('Location: index.php?incorrect=1');
        }


?>

<!-- <h1>Hello Khin</h1> -->