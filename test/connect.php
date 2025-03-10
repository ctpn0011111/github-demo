<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "new_db";
    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error){
        echo "Kết nối thất bại". $conn->connect_error;
    }
?>