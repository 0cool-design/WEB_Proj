<!DOCTYPE html>
<html lang="en">
   <!-- Header -->
   <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-2GC86H6BZ8"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'G-2GC86H6BZ8');
      </script>
      <meta charset="utf-8">
      <title>Patients</title>
      <link rel="icon" type="image/x-icon" href="assets/imgs/logooo.ico">
      <link rel="stylesheet" href="assets/css/index.css">
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap & css -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/design.css">
      <link rel="stylesheet" href="assets/css/index.css">
      <link rel="stylesheet" href="assets/css/icons.css">
      <style media="screen">
         @font-face {
         src: url(assets/fonts/rog.ttf);
         font-family: rog;
         }
         .table table-hover {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         table.table table-hover>td,
         table.table table-hover>th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
      </style>
      <script src="assets/js/patients.js"></script>
      <script>
         function cancel() {
                window.location.href = "patients.php";
            }
      </script>
   </head>
   <body>
      <?php 
         include 'dp.php';
         $id=$_GET['pid'];
         $name="";
         $email="";
         $phone="";
         $age="";
         
         $result = mysqli_query($conn,"SELECT * FROM patients where pid='$id'");
         while($row = mysqli_fetch_assoc($result)) {
         $name=$row['name'];
         $email=$row['email'];
         $phone=$row['phone'];
         $age=$row['age'];
         }

         ?>
      <!-- Pre Header -->
      <div id="pre-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <span></span>
               </div>
            </div>
         </div>
      </div>
      <!-- Navigation -->
      <header>
         <table>
            <th>
               <a href="index.html"><img class="logo" src="assets/imgs/logooo.png" alt="logo.pic" title="Home"></a>
            </th>
            <td class="name">Clinicom</td>
         </table>
      </header>
      <nav class="navbar navbar-expand-lg navbar-dark static-top">
         <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="feedback.html"> Feedback</a>
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About Us</a>
                     <span class="sr-only">(current)</span>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="appointments.html">Book an Appointment</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Page Content -->
      <div class="container">
         <header style="margin-top: 90px;" class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-heading">
                     <div class="line-dec"></div>
                     <h1>Patient data:</h1>
                  </div>
               </div>
            </div>
         </header>
         <form action="" name="pform" method="POST">
            <div class="row">
               <div class="col">
                  <input id="name" name="name" style="margin:10px" type="text" class="form-control" placeholder="Name" required value="<?php echo $name; ?>">
                  <input id="email" name="email" style="margin:10px" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="inputEmail3" placeholder="Email" required value="<?php echo $email; ?>">
               </div>
               <div class="col">
                  <input id="phone" name="phone" style="margin:10px" type="tel" pattern="[0-9]{8}" id="typePhone" class="form-control" placeholder="Phone Number" required value="<?php echo $phone; ?>">
                  <input id="age" name="age" style="margin:10px" type="" pattern="[0-9]{1,3}" class="form-control" placeholder="Age" required value="<?php echo $age; ?>">
               </div>
            </div>
            <button style="margin:10px" type="submit" name="insert" class="btn btn-success" >Save</button>
            <button style="margin:10px" type="submit" name="delete" class="btn btn-danger" >Delete</button>
            <button onclick="cancel()" style="margin:10px" type="button" class="btn btn-warning">Cancel</button>
            </form>
      </div>
   </body>
   <?php
      if(isset($_POST['insert'])){
         $name=$_POST['name'];
         $email=$_POST['email'];
         $phone=$_POST['phone'];
         $age=$_POST['age'];
         $sql = "UPDATE patients SET name='$name', email='$email', phone='$phone', age='$age' WHERE pid='$id'";
         if (mysqli_query($conn, $sql)) {
            //echo "<script>alert('Patient data updated successfully');</script>";
            echo "<script>window.location.href='patients.php';</script>";
         } else {
            echo "Error updating record: " . mysqli_error($conn);
         }
      }
      if(isset($_POST['delete'])){
         $sql = "DELETE FROM patients WHERE pid='$id'";
         if (mysqli_query($conn, $sql)) {
            //echo "<script>alert('Patient data deleted successfully');</script>";
            echo "<script>window.location.href='patients.php';</script>";
         } else {
            echo "Error deleting record: " . mysqli_error($conn);
         }
      }
      mysqli_close($conn);
      ?>
   <footer>
      <!-- Footer Starts Here -->
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="logo">
                     <a href="index.html"> <img src="assets/imgs/logooo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="footer-menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="social-icons">
                     <ul>
                        <li><a href="https://www.instagram.com/0_co0l"><em class="fa fa-instagram"></em></a></li>
                        <li><a href="tel:+96897744003"><em class="fa fa-phone"></em></a></li>
                        <li><a href="mailto:support@clinicom.om"><em class="fa fa-envelope"></em></a></li>
                        <li><a href="funpage.html"><em class="fa fa-gamepad"></em></a></li>
                        <li><a href="calculate.php"><em class="fa fa-shopping-cart"></em></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Ends Here -->
      <!-- Sub Footer Starts Here -->
      <div class="sub-footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="copyright-text">
                     <p>Copyright &copy; 2022</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Sub Footer Ends Here -->
   </footer>
</html>