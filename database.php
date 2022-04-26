<?php
    $servername = "localhost";
    $username = "root";
    $password = "Bp$GeP9bK6gjh$Eh75cBy5Nc#";
    $dbname = "clinicom";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM patients";
    $result = $conn->query($sql);
    ?>