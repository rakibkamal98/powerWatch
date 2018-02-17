<?php 
include_once "connection.php";
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$zipcode = $_POST['Zipcode'];
//$password = $_POST['Password'];


$sql = "INSERT INTO customer_info (Name,Email,Password,Address,City,State,Zipcode)
	VALUES('$name','$email','$password','$address','$city','$state','$zipcode')";
$value = mysqli_query($conn, $sql);

echo 'debug line'

#how to insert php variables into database with query 
#$queryemail = "SELECT * FROM `customer info` WHERE email='$Email'";


#mysql_select_db('ecommerce');

#$retval = mysql_query($conn,$queryemail);
?>