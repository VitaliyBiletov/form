<?php

    function connect(){

        $host = 'localhost';
        $database = 'test';
        $user = 'root';
        $pswd = 'root';

        $conn = mysqli_connect($host, $user, $pswd, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    function connectionClose($conn){
        mysqli_close($conn);
    }

    function insert($conn, $formName, $fields){

        $notification = "";
        $arrReq = [];

        foreach ($fields as $k => $v){
            array_push($arrReq, "'".$v['value']."'");
        }

        $req = join(', ', $arrReq);
        //echo $formName;

        switch($formName){
            case 'formStudents':
                $sql = "INSERT INTO students (last_name, first_name, date_of_birth, add_info) VALUES ($req)";
                break;
            case 'formTeachers':
                $sql = "INSERT INTO teachers (last_name, first_name, add_info) VALUES ($req)";
                break;
        }

        mysqli_query($conn, $sql);

    }
?>