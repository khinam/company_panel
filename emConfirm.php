<?php
session_start();
include 'common.php';
$con = new Common();

$email = $_POST['emails'];
$pass = $_POST['passwords'];

$data = $con->getAllRow("SELECT * FROM employee WHERE email = ? AND password = ?", [$email, $pass]);
// print_r($data['email']);
// echo $_POST['emails'];
// exit();

$msgs = '';

if($email === $data['email'] && $pass === $data['password']) {
    $_SESSION['user'] = $data['email'];
    header('Location: employee/dashboard.php');
}
else {
     $msgs = 'Wrong email or password';
     header('Location: index.php?incorrects=1#signup');
}

?>