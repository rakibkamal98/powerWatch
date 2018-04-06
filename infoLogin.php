<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}

$email = $_POST['Email'];
$password = $_POST['Password'];

if($email != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$email. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$hashPass = hash('sha512', $password);
		if($hashPass == $row["Password"]){
			header("Location: http://localhost/powerWatch/signIn.php?loginMessage=Peace");#-- REDIRECT TO HOME PAGE --#
		} else {
			header("Location: http://localhost/powerWatch/signIn.php?loginMessage=Incorrect%20Login");
		}
		
	} else {
		header("Location: http://localhost/powerWatch/signIn.php?loginMessage=Email not found");
	}
}



?>