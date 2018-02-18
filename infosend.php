<?php 
#include_once "connection.php";

#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include


$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$zipcode = $_POST['Zipcode'];
//$password = $_POST['Password'];
$password = hash('sha512', $password);


if($email != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$email. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$message = 'Incorrect email';
		header("Location: http://localhost/powerWatch/signUp.php?message=Email already exists");
	} else {
		$message = '';
		$sql = "INSERT INTO customer_info (Name,Email,Password,Address,City,State,Zipcode)
			VALUES('$name','$email','$password','$address','$city','$state','$zipcode')";
	}
}

$value = mysqli_query($conn, $sql);


#how to insert php variables into database with query 
#$queryemail = "SELECT * FROM `customer info` WHERE email='$Email'";


#mysql_select_db('ecommerce');

#$retval = mysql_query($conn,$queryemail);
?>