<?php
    session_start();
    include 'common.php';
    $id = $_GET['delete'];
    $common = new Common();
    $sqlde = $common->getAllData("DELETE FROM employee WHERE emId = ? ", [$id]);

    header("location: dashboard.php");
?>