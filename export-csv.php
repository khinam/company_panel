<?php

    include 'common.php';
    $data = new Common();

    
    header("Content-Type: application/octet-stream; ");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Disposition: attachment; filename=\"employee.csv\""); 

    //save-csv in server and create empty csv file
    $fh = fopen("php://output", "w");
    if($fh === false) { exit("Failed to create csv file"); }

    $datas = $data->getAll("SELECT * FROM employee");
    foreach($datas as $row) {
        $comdta = new Common();
        $comname = $comdta->getAllRow("SELECT company FROM company WHERE comId = ? ", [$row['companyId']]);
        //row data - csv column are separated with a comma
        // echo implode(",",[
        //     $row['staffID'],
        //     $row['firstName'] . ' ' . $row['lastName'],
        //     $row['email'],
        //     $comname['company'],
        //     $row['department'],
        //     $row['phone'],
        //     $row['address']

    fputcsv($fh, [
        $row['staffID'],
        $row['firstName'] . ' ' . $row['lastName'],
        $row['email'],
        $comname['company'],
        $row['department'],
        $row['phone'],
        $row['address']

    ]);

    //echo "\r\n";
    }

    fclose($fh);


?>