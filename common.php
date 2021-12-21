<?php
    include 'config.php';
    class Common {
        
        public $con;

        function __construct()
        {
            $this->con = new PDO(DSN, ROOT, ROOT_PASS);
        }

        // function data($a, $b, $c){
        //     include 'config.php';
        //     $d = 2;
        //     $z = $a + $b + $c + $d + $this->e + $f;
        //     return $z;
        // }

        //select all data
        function getAll($query, $param = []) {
            // echo $query;
            // die();
            $data = $this->con->prepare($query);
            $data->execute($param);
            $data = $data->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        //select all data where id for edits
        function getAllRow($query, $param = []) {
            $data = $this->con->prepare($query);
            $data->execute($param);
            $datas = $data->fetch(PDO::FETCH_ASSOC);
            return $datas;
        }

        // function getCount($query, $param = []) {
        //     $data = $this->con->prepare($query);
        //     $data->execute($param);
        //     $data = $data->fetchColumn();
        //     return $data;
        // }

        //insert, update, add and delete data to db
        function getAllData($query, $param = []) {
            $sql = $this->con->prepare($query);
            // $sql->execute($param);
            // return $sql;
            if($sql->execute($param)) {
                return true;
            }
            return false;

            //echo 'hello';           return သည် သူ့အောက်က echo ဘယ်လောက်ထုတ်ထုတ် output မထွက် 
        }
        

    }

?>