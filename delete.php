<?php 
   include 'dp.php';
   $id = $_GET['pid'];
      $sql = "DELETE FROM `products` WHERE `products`.`id` = $id";
      $result = mysqli_query($conn, $sql); 
   ?>
      <script>
            window.location.href = "products.php";
      </script>