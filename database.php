<<<<<<< HEAD
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
=======
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
>>>>>>> ea4baa88a086840521652333b42df286f7661560
    ?>