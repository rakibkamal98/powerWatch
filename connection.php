<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}

echo 'Connected successfully';
//mysqli_close('$conn');
?>