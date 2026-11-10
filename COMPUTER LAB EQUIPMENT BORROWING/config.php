<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "lab_borrowing";

    $conn = mysqli_connect($host, $username, $password, $db);

    try{
        if(!$conn){
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
    } catch(Exception $e){
        echo $e->getMessage();
    }

    ?>