<?php
session_start();
include 'common.php';
$id = $_GET['delete'];

$common = new Common();
$stmt = $common->getAllData('DELETE FROM company WHERE comId = ?',[$id]);
header('location:index.php');
?>