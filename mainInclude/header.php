<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Student Testimonial Owl Slider CSS -->
  <link rel="stylesheet" type="text/css" href="css/owl.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/testyslider.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link rel="stylesheet" type="text/css" href="./css/style2.css" />
  <title>Website</title>
</head>

<body>

  <section class="header_wrapper sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid ms-5">
        <a class="navbar-brand" href="#">
          <img src="img/soft-logo-blue.png" alt="" width="130px" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="courses.php"> Courses</a>
            </li>
            <!-- <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a>
            </li> -->
            <?php
            session_start();
            if (isset($_SESSION['is_login'])) {
              echo '<li class="nav-item custom-nav-item"><a href="/Student/studentProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
            } else {
              echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
            }
            ?>
            <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link">Feedback</a></li>
            <li class="nav-item custom-nav-item"><a href="/contactus.php" class="nav-link">ContactUs</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </section>