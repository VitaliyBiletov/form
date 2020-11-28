<?php

    $host = 'localhost';
    $database = 'test';
    $user = 'root';
    $pswd= 'root';

    $dbh = mysqli_connect($host, $user, $pswd, $database) or die("Ошибка " . mysqli_error($link));

    $query = "INSERT INTO personal_data(lastName, firstName, dateOfBirth, address, addInfo) VALUES ()";

    mysqli_close($dbh);