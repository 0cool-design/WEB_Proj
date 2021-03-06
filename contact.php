<!DOCTYPE html>
<html lang="en">

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
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="assets/imgs/logooo.ico">
    <meta charset="utf-8">
    <!-- bootstrap & css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/design.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <style>
        @font-face {
            src: url(assets/fonts/rog.ttf);
            font-family: rog;
        }
        
        #cont_form {
            margin: 250px 20px 9px 90px;
        }
        
        .container {
            align-content: center;
            justify-items: center;
            justify-content: center;
        }
        
        .form-control {
            margin: 30px;
        }
        
        .table {
            padding: 90px 90px;
        }
        /*        this edits the descrition of the contact us*/
        
        .th_des {
            border-right: 1px solid gray;
            padding: 0px 15px;
            font-size: 22px;
            margin-right: 0px;
            text-align: center;
            position: flex;
        }
        
        .message {
            margin-left: 50px;
            margin-right: 50px;
        }
        
        .col {
            padding-right: 0px;
            margin-right: 70px;
            margin-left: 50px;
        }
        /* .table-margin {} */
    </style>
</head>

<body>
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
        <a href="profile.html"><img style="padding-bottom:20px ;" src="assets/imgs/MyProfile_icon.png" alt="profile_logo" height="90px" title="My Profile"></a>
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
                    <li class="nav-item active">
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
    <section class="container">
        <table id="cont_form">
            <th class="th_des">
                <h2> Contact Us </h2>
                <p><a href="tel:+96897744003">Phone number</a></p>
                <p> <a href="mailto:support@clinicom.om" rel="external nofollow noopener" target="_blank">support@clinicom.om</a> </p>
            </th>
            <td style="padding-left:0px; justify-items:center; justify-content:center;">
                <form action="https://httpbin.org/post" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            <input style="margin-bottom: 0px" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            <input type="tel" pattern="[0-9]{8}" id="typePhone" class="form-control" placeholder="Phone Number" />
                        </div>
                    </div>
                    <div class="message">
                        <label style="margin-left: 30px" vfor="exampleFormControlTextarea1">Message</label>
                        <textarea style="margin-top: 0px" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message here..." maxlength="500"></textarea>
                        <button style="margin: 0px 0px 22px 29px; border-radius: 20px" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </td>
        </table>
    </section>
</body>
<!-- Footer Starts Here -->
<footer>
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