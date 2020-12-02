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

        if ($errors = validate($fields)){
            $res = ['answer' => 'error', 'errors' => $errors];
        } else {
            if (mysqli_query($conn, $sql)){
                $res = ['answer' => 'ok'];
            } else {
                $res = mysqli_error($conn);
            }

        }
        exit(json_encode($res));


    }
?>