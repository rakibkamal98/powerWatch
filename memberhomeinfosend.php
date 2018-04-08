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
//$password = hash('sha512', $password);
$mail = $_SESSION['Email'];


if($password != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$mail. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$sql = "UPDATE customer_info SET Password= $password WHERE Email='" .$mail. "'";
		$result = mysqli_query($conn, $sql);

		

	//how to retrieve information from the database and process it
	//if(mysqli_num_rows($result)>0){
		//$message = 'Incorrect email';
		//header("Location: http://localhost/powerWatch/signUp.php?message=Email already exists&welcomeMessage=");
	//} else {
		$message = 'Password changed';
		echo $message;
		
		header("Location: http://localhost/powerWatch/memberHome.php?message=&welcomeMessage=Welcome");
	}
	else{
		$message = 'error';
		echo $message;
	}

}

$value = mysqli_query($conn, $sql);