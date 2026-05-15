<?php

$db_host = "sql112.infinityfree.com";
$db_user = "if0_41536598";
$db_password = "newwork44";
$db_name = "if0_41536598_lms_db";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if($conn->connect_error) {
 die("connection failed: " . $conn->connect_error);
}

?>


<!-- for localhost  -->
 
<?php
/*
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "lms_db";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}  
 */
?> 