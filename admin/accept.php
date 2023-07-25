<?php
include 'connect.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
require 'mail/Exception.php';

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;



$id = $_GET['id'];
$op = $_GET['op'];
$email = $_GET['email'];

$sql = "UPDATE userpost SET status='$op' WHERE id='$id'";
$rs = $conn->query($sql);

if ($rs) {
 	if ($op=='1') {


 $html = 'Dear User,Your Application is Approved';
   
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "dabhiharsiddhi2001@gmail.com";
        $mail->Password = "dabhi2001";
        $mail->Subject = "Application Status";
        $mail->setFrom("dabhiharsiddhi2001@gmail.com");
        $mail->Body =  $html;
        $mail->AddAddress($email);
        
        if ($mail->send()) {
            echo "email sent";
        }
        else
        {
            echo "Invalid email";
        }
        
    }
    else{
       
        $html = 'Dear User,Your Application is Rejected';
   
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "dabhiharsiddhi2001@gmail.com";
        $mail->Password = "dabhi2001";
        $mail->Subject = "Application Status";
        $mail->setFrom("dabhiharsiddhi2001@gmail.com");
        $mail->Body =  $html;
        $mail->AddAddress("priyachaudhari94@gmail.com");
        
        if ($mail->send()) {
            echo "email sent";
        }
        else
        {
            echo "Invalid email";
        }

    }
 	header("location:userpostt.php");
 } 




?>