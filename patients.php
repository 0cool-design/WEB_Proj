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
   </head>
   <body >
      <?php
      include 'dp.php';
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
                     <a class="nav-link" href="contact.php">Contact Us</a>
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
                     <h1>Patients:</h1>
                  </div>
               </div>
            </div>
         </header>
         <form action="" name="pform" method="POST">
            <div class="row">
               <div class="col">
                  <input id="name" name="name" style="margin:10px" type="text" class="form-control" placeholder="Name" required>
                  <input id="email" name="email" style="margin:10px" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="inputEmail3" placeholder="Email" required>
                  <button style="margin:10px" type="submit" name="insert" class="btn btn-success" >Add Patient</button>

               </div>
               <div class="col">
                  <input id="phone" name="phone" style="margin:10px" type="tel" pattern="[0-9]{8}" id="typePhone" class="form-control" placeholder="Phone Number" required>
                  <input id="age" name="age" style="margin:10px" type="" pattern="[0-9]{1,3}" class="form-control" placeholder="Age" required>
                  <input id="pid" name="pid" style="margin:10px" type="" pattern="[0-9]{4}" class="form-control" placeholder="ID" required>
               </div>
            </div>
            <hr>
         </form>
         <!-- patients search function form-->
         <form action="psearch.php" method="POST">
            <div class="row">
               <div class="col">
                  <button style="margin:10px" type="submit" name="searchbtn" class="btn btn-info" >Search</button>
               </div>
            </div>
         </form>
      </div>
      </div>
      <div class="container">
      <table id="appont-table" class="table table-hover">
         <!-- table data -->
         <?php
         //table header
            echo"
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Edit</th>
            </tr>   ";
            // select data from patients table
            $sql = "SELECT * FROM `patients`";
            $result = mysqli_query($conn, $sql);
            //check if there are selected rows.
            if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
               echo "<tr>
               <td>" . $row["pid"]."</td>".
               "<td>" . $row["name"]."</td>".
               "<td>" . $row["email"]."</td>".
               "<td>" . $row["phone"]."</td>".
               "<td>". $row["age"]."</td>";
               //an edit button that directs to pedit.php to update values
               echo "<td>"; ?> <a href="pedit.php?pid=<?php echo $row["pid"]; ?>"><button type="button" class="btn btn-info">Edit</button></a> <?php echo "</td>";
               }
               echo "</table>";

            }
           //if nothing was entered in the search bar message will appear
           else {
           echo "No patients were found";
           }

           echo"<br>";

            ?>
      </table>
   </body>
   <?php
   // insert function
   if (isset($_POST['insert'])) {
      $pid = $_POST['pid'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $age = $_POST['age'];
      // insert the new values to the database
      mysqli_query($conn, "INSERT INTO `patients` (`pid`,`name`, `email`, `phone`, `age`) VALUES ('$pid','$name', '$email', '$phone', '$age')");
      echo "<script>window.location.href='patients.php';</script>";
   }
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
                        <li><a href="contact.php">Contact Us</a></li>
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
