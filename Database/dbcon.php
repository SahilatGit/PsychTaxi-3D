<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "psychtaxi";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn)
{
    ?>
        <script>
            alert("Connection Successful");
        </script>
    <?php
}else
{
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php

}
?>