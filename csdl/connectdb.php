<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "db_phone";
    
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn) {
        die("Error :Cound not connect " . mysqli_connect_error());
    }
?>

