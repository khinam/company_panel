<?php 

    include 'common.php';

    $firstName = $_POST['st_name'];
    $lastName = $_POST['se_name'];
    $staffID = $_POST['staff'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyId = $_POST['com_category'];
    $department = $_POST['depart'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];
    $address = $_POST['address'];

    // print_r($password);
    // exit();
    
    $comm = new Common();
    $stat = $comm->getAllData("INSERT INTO employee (firstName, lastName, staffID, email, phone, companyId, department, password, address) VALUES (?,?,?,?,?,?,?,?,?)", [$firstName, $lastName, $staffID, $email, $phone, $companyId, $department, $password, $address]);
    if($stat) {
        echo 'Data Inserted';
        header("location: employee.php");
    }
    else {
        echo 'Fail Data Inserted';
    }
?>