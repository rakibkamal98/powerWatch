<?php
session_start();
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

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
$mail->setFrom($email, $name);
$mail->addAddress('powerwatch0@gmail.com');     // Add a recipient

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $name . ' ' . $email;
$mail->Body    = $message;
$mail->AltBody = $message;

$mail->send();

header("Location: http://localhost/powerWatch/contactUs.php?emailSent=Message delivered!");
die();

?>