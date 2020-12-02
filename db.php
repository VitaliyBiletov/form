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

    function select($conn){
        $result = [];
        if ($res = $conn->query("SELECT * FROM students")){
            $rows = mysqli_num_rows($res); //количество полученных строк
            for ($i = 0 ; $i < $rows ; ++$i){
                array_push($result,mysqli_fetch_row($res));
            }
        };

        exit(json_encode($result));
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