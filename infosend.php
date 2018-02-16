<?php 
include_once "connection.php";
$email = $_POST['Email'];
$password = $_POST['Password'];


$sql = "INSERT INTO customer_info (Email,Password)
	VALUES('$email', '$password')";
$value = mysqli_query($conn, $sql);

echo 'debug line'

#how to insert php variables into database with query 
#$queryemail = "SELECT * FROM `customer info` WHERE email='$Email'";


#mysql_select_db('ecommerce');

#$retval = mysql_query($conn,$queryemail);
?>