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
$currentPassword = $_POST['CurrentPassword'];
$password = hash('sha512', $password);
$currentPassword = hash('sha512', $currentPassword);
$mail = $_SESSION['Email'];


if($password != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$mail. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		if($row['Password']==$currentPassword){
			$sql = "UPDATE customer_info SET Password='$password' WHERE Email='" .$mail. "'";
			$result = mysqli_query($conn, $sql);

			$message = 'Password changed';
			header("Location: http://localhost/powerWatch/memberHome.php?promoMessage=&passwordMessage=".$message);
		} else {
			$message = 'Incorrect Password';
			header("Location: http://localhost/powerWatch/memberHome.php?promoMessage=&passwordMessage=".$message);
		}
	}
}

?>