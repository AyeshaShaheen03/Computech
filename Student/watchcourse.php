<?php
if (!isset($_SESSION)) {
   session_start();
}
include ('../dbConnection.php');


if (isset($_SESSION['is_login'])) {
   $stuEmail = $_SESSION['stuLogEmail'];
} else {
   echo "<script> location.href='../index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Watch Course</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="../css/all.min.css">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="../css/stustyle.css">
</head>

<body>

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

   <div class="container-fluid mycourse p-2">
      <a class="mycourse-btn" href="./myCourse.php">My Courses</a>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-3 mt-5">
            <h4>Lessons</h4>
            <ul id="playlist" class="nav flex-column">
               <?php
               if (isset($_GET['course_id'])) {
                  $course_id = $_GET['course_id'];
                  $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo '<li class="nav-item border-bottom py-2" movieurl=' . $row['lesson_link'] . ' style="cursor: pointer;">' . $row['lesson_name'] . '</li>';
                     }
                  }
               }
               ?>
            </ul>
         </div>
         <div class="col-sm-8">
            <video id="videoarea" src="" class="mt-3 w-100 " controls>
            </video>
         </div>
      </div>
   </div>



   <!-- Jquery and Boostrap JavaScript -->
   <script type="text/javascript" src="../js/jquery.min.js"></script>
   <script type="text/javascript" src="../js/popper.min.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>

   <!-- Font Awesome JS -->
   <script type="text/javascript" src="../js/all.min.js"></script>

   <!-- Ajax Call JavaScript -->
   <!-- <script type="text/javascript" src="..js/ajaxrequest.js"></script> -->

   <!-- Custom JavaScript -->
   <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>