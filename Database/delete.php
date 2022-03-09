<?php

include 'dbcon.php';

$id = $_GET['id'];

$q = "DELETE from register_user where id = $id";

mysqli_query($conn,$q);

header('location: leaderboard.php');

?>