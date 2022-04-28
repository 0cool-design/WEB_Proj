<?php 
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "webproj";
         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         $pid = $_GET['pid'];
            $sql = "DELETE FROM `patients` WHERE `patients`.`pid` = $pid";
            $result = mysqli_query($conn, $sql); 
         ?>
            <script>
                window.location.href = "patients.php";
            </script>