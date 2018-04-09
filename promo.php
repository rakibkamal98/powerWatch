<?php
session_start();
#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include

$promo = $_POST['Promo'];
$mail = $_SESSION['Email'];

if($promo != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$mail. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		#$sql = "SELECT Promo FROM customer_info WHERE Email='" .$mail. "'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if($promo == 'weaver' && $row["Promo"] == 0){
			$sql = "UPDATE customer_info SET Weaver='1' WHERE Email='$mail'";
			$result = mysqli_query($conn, $sql);
			header("Location: http://localhost/powerWatch/ShoppagePromo.php?voteMessage=20% Discount Applied!");
		}
		else {
			header("Location: http://localhost/powerWatch/memberHome.php");
		}
	} else {
		$message = 'Not logged in!';
		header("Location: http://localhost/powerWatch/signIn.php?message=Please log in&welcomeMessage=");
	}
}

?>
