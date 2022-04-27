<?php
$servername='localhost';
$username="root";
$password="";
$dbname = "webproj";

try
{
    $con=new PDO("mysql:host=$servername;dbname=test_db",$username,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>