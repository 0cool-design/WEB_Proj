<?php 
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "webproj";
         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         $id = $_GET['pid'];
            $sql = "DELETE FROM `products` WHERE `products`.`id` = $id";
            $result = mysqli_query($conn, $sql); 
         ?>
            <script>
                window.location.href = "products.php";
            </script>