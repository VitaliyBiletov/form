<?php


require_once __DIR__ . "/data.php";
require_once __DIR__ . "/functions.php";
require __DIR__ . "/db.php";

if (!empty($_POST)) {

    $formName = $_POST['formName'];

    switch($formName){
        case 'formTeachers':
            $fields = load($fieldsForTeachers);
            break;
        case 'formStudents':
            $fields = load($fieldsForStudents);
            break;
    }

    $conn = connect();
    insert($conn, $formName, $fields);
    connectionClose($conn);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/main.css">
</head>
<body>
<div class="container">
    <?php include __DIR__ . '/incs/mainMenu.php' ?>
    <div class="tab-content">
        <div class="tab-pane fade" id="studentForm">
            <?php include __DIR__ . "/incs/studentForm.php" ?>
        </div>
        <div class="tab-pane fade" id="teacherForm">
            <?php include __DIR__ . "/incs/teacherForm.php"  ?>
        </div>
        <div class="tab-pane fade" id="studentsTable">
            <?php include __DIR__ . "/incs/studentsTable.php" ?>
        </div>
        <div id="answer" class="col-md-6 offset-md-3 mt-3"></div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/menu.js"></script>
<script src="main.js"></script>
</body>
</html>

