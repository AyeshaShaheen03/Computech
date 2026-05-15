<?php
$insert = false;

// Set connection variables
$server = "sql112.infinityfree.com";

$username = "if0_41536598";

$password = "newwork44";

$database = "if0_41536598_lms_db";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);
// Check for connection success
// if (!$con) {
//     echo "eror";
// }


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


//echo "Success connecting to the db";
if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    $fullname = $_POST['fullname'];
    $company = $_POST['company'];
    $workemail = $_POST['workemail'];
    $phoneno = $_POST['phoneno'];


    $sql = "INSERT INTO `contactus`(`message`, `fullname`, `company`, `work_email`, `phone_no`) VALUES ('$message','$fullname','$company','$workemail','$phoneno')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $insert = true;
        //     
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>You entry is not successfully submitted!</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
}

$sql = "SELECT * FROM `contactus` WHERE 1";
    // $con->close();
    ?>