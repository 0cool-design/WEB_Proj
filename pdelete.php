<?php 
include 'dp.php';
$pid = $_GET['pid'];
   $sql = "DELETE FROM `patients` WHERE `patients`.`pid` = $pid";
   $result = mysqli_query($conn, $sql); 
?>
<script>
      window.location.href = "patients.php";
</script>