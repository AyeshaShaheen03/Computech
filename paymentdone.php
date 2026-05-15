<?php 
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])) {
    echo "<script> location.href='loginorsignup.php'; </script>";
} else { 
    if(isset($_POST['ORDER_ID']) && isset($_POST['TXN_AMOUNT'])){
        $order_id = $_POST['ORDER_ID'];
        $stu_email = $_SESSION['stuLogEmail'];
        $course_id = $_SESSION['course_id'];
        $status = "Success";
        $respmsg = "Done";
        $amount = $_POST['TXN_AMOUNT'];
        $sql = "INSERT INTO courseorder (order_id, stu_email, course_id, status, respmsg, amount, order_date) VALUES ('$order_id', '$stu_email', '$course_id', '$status', '$respmsg', '$amount', NOW())";
        if($conn->query($sql) === TRUE){
            echo "Redirecting to My Profile....";
            echo "<script> setTimeout(() => {
                window.location.href = './Student/myCourse.php';
            }, 1500); </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<b>Transaction status is failure</b>" . "<br/>";
    }
}
?>