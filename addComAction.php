<?php

    include 'common.php';
    $company = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // print_r($company);
    // exit();

    $sql = new Common();
    $sqls = $sql->getAllData("INSERT INTO company (company, email, address) VALUES (?,?,?)",[$company, $email, $address]);
    if($sqls) {
        echo 'Success Insert Data';
        header ("location: company.php");
    }
    else {
        echo 'Fail Insert Data';
        //header ("location: index.php");
    }

    

?>