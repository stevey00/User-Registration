<?php
    include_once('connect.php');

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
?>