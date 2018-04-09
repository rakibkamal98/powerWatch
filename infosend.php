<?php 
#include_once "connection.php";
session_start();
#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include


$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$zipcode = $_POST['Zipcode'];
//$password = $_POST['Password'];
$password = hash('sha512', $password);


if($email != ""){
	$sql = "SELECT * FROM customer_info WHERE Email='" .$email. "'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$message = 'Incorrect email';
		header("Location: http://localhost/powerWatch/signUp.php?message=Email already exists&welcomeMessage=");
	} else {
		$message = '';
		$sql = "INSERT INTO customer_info (Name,Email,Password,Address,City,State,Zipcode)
			VALUES('$name','$email','$password','$address','$city','$state','$zipcode')";
		
		$_SESSION['Name'] = $name;
		$_SESSION['Email'] = $email;

		header("Location: http://localhost/powerWatch/signUp.php?message=&welcomeMessage=Welcome, $name - Use Promocode: 'weaver' for 20% off!");
	}
}

$value = mysqli_query($conn, $sql);


#how to insert php variables into database with query 
#$queryemail = "SELECT * FROM `customer info` WHERE email='$Email'";


#mysql_select_db('ecommerce');

#$retval = mysql_query($conn,$queryemail);

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

//Server settings
$mail->SMTPDebug = 2;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'powerwatch0@gmail.com';                 // SMTP username
$mail->Password = 'DaddyLongLegs';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom('powerwatch0@gmail.com', 'Power Watch');
$mail->addAddress($email, $name);     // Add a recipient

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Welcome new Power Watch user!';
$mail->Body    = 'Welcome to Power Watch! We hope you enjoy your experience. Please contact us with any issues.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';

?>