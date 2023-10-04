<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud_operations";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if(!$conn){
        die("Unable to connect to database") . mysqli_connect_error();
    }