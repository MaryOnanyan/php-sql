<?php

    $servername = "localhost";
    $username = "mysql";
    $password = "mysql";
    $database = "table2";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

