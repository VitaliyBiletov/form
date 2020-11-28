<?php

    function debug($data){
        echo '<pre>' . print_r($data, 1) . '</pre>';
    }

    function load($data){

        if (empty($_POST)){
            return $data;
        }

        foreach ($_POST as $k => $v) {
            echo "{$k} => {$v}";
        }

    }