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
		$sql = "SELECT Promo FROM customer_info WHERE Email='" .$mail. "'";
		if($promo == "weaver" && $sql == "0"){
			//$sql = "UPDATE customer_info SET Promo='1' WHERE Email='$mail'";
			header("Location: http://localhost/powerWatch/ShoppagePromo.php?voteMessage=");
		}
	} else {
		$message = 'Not logged in!';
		header("Location: http://localhost/powerWatch/signIn.php?message=Please log in&welcomeMessage=");
	}
}

$value = mysqli_query($conn, $sql);
?>
