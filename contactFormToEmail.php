<?php

include 'contacted.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailHandling/Exception.php';
require 'mailHandling/PHPMailer.php';
require 'mailHandling/SMTP.php';

//Variables to use below
$error_message = '';//Error message for the user if something goes wrong
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';//Email pattern acceptance

$flag = '';// flag to control the form and how it proceeds

if(isset($_POST['makeContact'])&&(($flag==0))){


    //Variables for the email
    $to = "george@besmartbesimple.com";
    $subject = $_POST['emailSubject'];
    $from = $_POST['email'];
    $message = $_POST['description'];

    $mail = new PHPMailer();

    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.besmartbesimple.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'george@besmartbesimple.com';                 // SMTP username
    $mail->Password = 'Xelonaki1@';                           // SMTP password
    $mail->SMTPSecure = false;
	$mail->SMTPAutoTLS = false;                           // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
	$mail->addReplyTo($from, 'Visitor email');
    $mail->setFrom($to, 'Contact form besmartbesimple.com');
    $mail->addAddress($to, 'George Tourtsinakis');     // Add a recipient
    


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message."<br>"."User's email:....".$from;



    if(!preg_match($email_exp,$from)) {
        global $error_message;
        $error_message .= 'the email address you entered does not appear to be valid.<br />';
        $flag=1;
    }

    if(isset($_POST['g-recaptcha-response'])&&!empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6LcrxFMUAAAAADAJgvfozwoZSGzLO4kGARq6A-H3';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

        if($responseData->success){
            $flag=0;
            $mail->send();
        }
        else{
            echo $error_message .= 'Click captcha.<br />';
            $flag=1;
        }


    }




}

?>