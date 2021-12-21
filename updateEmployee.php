<?php 

include 'common.php';
$id = $_POST['id'];
$firstName = $_POST['st_name'];
$lastName = $_POST['se_name'];
$staffID = $_POST['staff'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$companyId = $_POST['com_category'];
$department = $_POST['depart'];
$password = $_POST['password'];
$address = $_POST['address'];

// print_r($lastName);
// exit();

$common = new Common();
$sql = $common->getAllData('UPDATE employee SET firstName = ?, lastName = ?, staffID = ?, email = ?, phone = ?, companyId = ?, department = ?, password = ?, address = ? WHERE emId = ?', [$firstName, $lastName, $staffID, $email, $phone, $companyId, $department, $password, $address, $id]);

if($sql) {
    echo 'Success Update Data';
    header ("location: employee.php");
}
else {
    echo 'Fail Update Data';
    //header ("location: index.php");
}



?>