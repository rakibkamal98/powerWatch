<?php 
#include_once "connection.php";
session_start();
#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include
$password = $_POST['Password'];
//$password = $_POST['Password'];
$password = hash('sha512', $password);

UPDATE `customer_info` SET `Password`=[value-8] WHERE 1

if($password != ""){
	$sql = "SELECT * FROM customer_info WHERE Password='" .$password. "'";
	$result = mysqli_query($conn, $sql);
	//if(mysqli_num_rows($result)>0){
		//$message = 'Incorrect email';
		//header("Location: http://localhost/powerWatch/signUp.php?message=Email already exists&welcomeMessage=");
	//} else {
		$message = '';
		$sql = UPDATE `customer_info` SET `Password`=[value-8] WHERE 1
		
		header("Location: http://localhost/powerWatch/signUp.php?message=&welcomeMessage=Welcome, $name");
	}
}

$value = mysqli_query($conn, $sql);