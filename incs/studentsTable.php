<?php
require_once __DIR__ . "/../db.php";

if (!empty($_POST)) {
    $conn = connect();
    select($conn);
    connectionClose($conn);
}
?>
<div class="container">
    <button type="button " id="loadButton" class="btn btn-primary col-md-8 offset-md-2 mt-3">Primary</button>
    <div class="row">
        <table id="studentsTable" class="table col-md-8 offset-md-2 mt-3">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Дополнительная информация</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="loader loadButtonLoader">
            <img src="/Pulse.svg" alt="">
        </div>
    </div>
</div>