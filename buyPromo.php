<?php
session_start();
#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include

$mail = $_SESSION['Email'];

if($mail != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$mail. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$sql = "UPDATE customer_info SET Promo='1' WHERE Email='$mail'";
		$result = mysqli_query($conn, $sql);
		header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=");
		
	} else {
		$message = 'Not logged in!';
		header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=");
	}
}

?>
