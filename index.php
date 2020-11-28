<?php
    require_once(__DIR__."/data.php");
    require_once(__DIR__."/functions.php");

    if (!empty($_POST)){
        debug($_POST);
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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="h2 mt-3">Сведения об ученике</p>
                <div class="form mt-3">
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="lastName">Фамилия:</label>
                                <input name="lastName" type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">Имя:</label>
                                <input name="firstName" type="text" class="form-control" id="firstName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="dateOfBirth">Дата рождения:</label>
                                <input name="dateOfBirth" type="date" class="form-control" id="dateOfBirth" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Домашний адрес:</label>
                            <input name="address" type="text" class="form-control" id="address" required>
                        </div>
                        <div class="form-group">
                            <label for="addInfo">Дополнительные сведения:</label>
                            <textarea name="addInfo" class="form-control" id="addInfo" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>