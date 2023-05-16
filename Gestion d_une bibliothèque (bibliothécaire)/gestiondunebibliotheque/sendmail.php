<?php
include_once ".\.\connexion\connexion.php";


use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
$date=date("Y-m-d") ;
$ref=$_GET['ref'];
$to       = $_GET['to'];
$subject  = 'Reservation ';
$message  = 'Hi, the document that you have reserved is available. Your are at risk of loosing your reservation within 3 days !';
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
                ?>
                <img src="http://localhost/gestiondunebibliotheque/image/Confirmed.GIF" alt="email confermed image">
                <?php
                $sql="UPDATE reserver SET emailsentdate='$date' where email='$to' and ref=$ref ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
                echo '<br> <a href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>';
            }
            else
            {
                $status = "failed";
                $response = "Email sent fail to $to: <br>" . $mail->ErrorInfo;
                echo '<br> <a href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>';
            }
        
            exit(json_encode(array($status,  $response)));

            
        




/*
if(mail($to, $subject, $message, $headers)){
    echo "Email sent";
    echo $to;
    header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");
}
else{
    echo "Email sending failed   ";
    echo $to;
    echo "<br> refresh the page if the is still a problem check your send mail properties or php.ini file and php extentions ";
    echo '<br> <a href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>
    </a>
 ';

}*/
?>

