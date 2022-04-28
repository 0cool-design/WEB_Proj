<?php
$servername='localhost';
$username="root";
$password="";
$dbname = "webproj";
$link = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($link));
?>