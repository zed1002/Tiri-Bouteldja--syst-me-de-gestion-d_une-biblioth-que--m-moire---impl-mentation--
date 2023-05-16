<?php
require_once 'vendor/autoload.php';
require_once('dbconnection.php');
define("PROJECT_NAME", "http://localhost/test/");
$mail = new PHPMailer\PHPMailer\PHPMailer;
//Enable SMTP debug mode
$mail->SMTPDebug = 0;
//set PHPMailer to use SMTP
$mail->isSMTP();
//set host name
$mail->Host = "smtp.gmail.com";
// set this true if SMTP host requires authentication to send mail
$mail->SMTPAuth = true;
//Provide username & password
$mail->Username = "librarymanagement999@gmail.com";
$mail->Password = "gestiondunebibliotheque999";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$row1=mysqli_query($con,"select email, password from user where email='".$_POST['femail']."'");
$row2=mysqli_fetch_array($row1);
$mail->From = "librarymanagement999@gmail.com";
$mail->FromName = "Library Ntic";
$mail->addAddress($_POST["femail"]);
$mail->isHTML(true);

$mail->Subject = "Your password is:";
$mail->Body="Dear user your password is : ".$row2['password'];

        if(!$mail->send()) {
            $error_message = "Mailer Error : ". $mail->ErrorInfo;
        } else {
            $success_message = "Message has been sent successfully";
        }
        


