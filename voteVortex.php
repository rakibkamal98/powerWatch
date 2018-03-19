<?php 

#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include

$rating = $_POST['starV'];

$sql = "INSERT INTO vortexreviews (review) VALUES (" . $rating . ")";
if(mysqli_query($conn, $sql)){
	header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=Thanks for the review!");
} else {
	header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=First, select a rating");
}
?>