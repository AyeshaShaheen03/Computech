<?php
include_once ('../dbConnection.php');
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION['is_login'])) {
  $stuLogEmail = $_SESSION['stuLogEmail'];
}
// else {
//  echo "<script> location.href='../index.php'; </script>";
// }
if (isset($stuLogEmail)) {
  $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $stu_img = $row['stu_img'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php echo TITLE ?>
  </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
   href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&family=Noto+Sans+TC:wght@700&family=REM:ital,wght@0,400;1,300&family=Roboto+Slab:wght@400;500;600&display=swap"
   rel="stylesheet">


  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/stustyle.css">

</head>

<body>
  <!-- Top Navbar -->
  <!-- <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../">CompuTech</a>
  </nav> -->


  <section class="header_wrapper sticky-top">
    <nav class="navbar navbar-expand navbar-light stuheader">
      <div class="container-fluid ms-5">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">

            <li class="nav-item profile-header">
              <a class="nav-link  " aria-current="page" style="color: white;" href="">CompuTech </a>
            </li>
          </ul>
          </div>
          </div>
    </nav>
    </section>




  <!-- Side Bar -->
  <div class="container-fluid mb-5 " style="margin-top:40px;">
    <div class="row">
      <nav class="col-sm-3 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item mb-3">
              <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (PAGE == 'profile') {
                echo 'active';
              } ?>" href="studentProfile.php">
                <i class="fas fa-user"></i>
                Profile <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (PAGE == 'mycourse') {
                echo 'active';
              } ?>" href="myCourse.php">
                <i class="fab fa-accessible-icon"></i>
                My Courses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (PAGE == 'feedback') {
                echo 'active';
              } ?>" href="stufeedback.php">
                <i class="fab fa-accessible-icon"></i>
                Feedback
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (PAGE == 'studentChangePass') {
                echo 'active';
              } ?>" href="studentChangePass.php">
                <i class="fas fa-key"></i>
                Change Password
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">
                <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>