<?php
// establishing a connection to the SQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webproj";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>