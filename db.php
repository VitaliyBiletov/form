<?php

    function insert(){
        $host = 'localhost';
        $database = 'test';
        $user = 'root';
        $pswd= '';
        $notification = '';

        $conn = mysqli_connect($host, $user, $pswd, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO teachers (last_name, first_name, add_info) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

        if (mysqli_query($conn, $sql)) { ?>
            <div class="alert alert-success col-md-6 offset-md-3" role="alert">
                <?= $notification = 'Новая запись успешно создана!'?>
            </div>
            <script>
                setTimeout(() => $(".alert").fadeOut('middle', function(){ this.remove() } ), 1500)
            </script>

        <?php } else {
            $notification = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>