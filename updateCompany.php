<?php

    include 'common.php';
    $id = $_POST['id'];
    $company = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // print_r($id);
    // exit();

    $sql = new Common();
    $sqls = $sql->getAllData('UPDATE company SET company = ?, email = ?, address = ? WHERE comId = ?', [$company, $email, $address, $id]);

    if($sqls) {
        echo 'Success Update Data';
        header ("location: company.php");
    }
    else {
        echo 'Fail Update Data';
        //header ("location: index.php");
    }

    

?>