<?php

include_once "..\connexion\connexion.php";


use PHPMailer\PHPMailer\PHPMailer;
require_once "..\PHPMailer/PHPMailer.php";
    require_once "..\PHPMailer/SMTP.php";
    require_once "..\PHPMailer/Exception.php";


 $to =$_GET['email'];
 $subject  = 'Reservation canceled ';
$message  = 'Hi, your reservation has been canceled.';
$headers  = 'From: librarymanagement999@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
$email='librarymanagement999@gmail.com';
$name='library manager contantine2';

            $mail = new PHPMailer();

            //smtp settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "librarymanagement999@gmail.com";
            $mail->Password = 'gestiondunebibliotheque999';
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";
        
            //email settings
            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress($to);
            $mail->Subject = ("$subject");
            $mail->Body = $message;
        
            if($mail->send()){
                $status = "success";
                $response = "Email is sent to $to";
                ?><img src="http://localhost/gestiondunebibliotheque/image/Confirmed(1).GIF" alt="email confermed image"><?php
                echo '<br> <a href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>';
            
            }

            else
            {
                $status = "failed";
                $response = "Email sent fail to $to: <br>" . $mail->ErrorInfo;
                echo '<br> <a href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>';
            }
        
            exit(json_encode(array( $status,  $response)));
        



?>