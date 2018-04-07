<?php
	session_start();
	unset($_SESSION['Name']);
	unset($_SESSION['Email']);
	session_unset();
	session_destroy();
	$_SESSION = array();
	header("Location: http://localhost/powerWatch/memberHome.php");
?>