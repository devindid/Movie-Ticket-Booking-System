<?php

@include 'config.php';

session_start();

if(!isset( $_SESSION['user_name'] )){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Movie Theater | Seat Reservation</title>
        <link src="admin/assets/font-awesome/css/all.js"/>
        <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
        <script src="admin/assets/font-awesome/js/all.js"></script>
       
        <link href="css/styles.css" rel="stylesheet" />

         <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    </head>
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <img src="images/Logo1.png" width="79px" height="79px">
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=movies">Movies</a></li>
                    <li><a href="index.php?page=payment">Payment</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact Us</a></li>
                    <li>
                    
                        <a href="logout.php" class="btn btn-hover">
                        <span>Log Out</span>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->
       <?php

       $page = isset($_GET['page']) ? $_GET['page'] : 'home';
       include($page.'.php');
       ?>
      
        <!-- Bootstrap core JS-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
