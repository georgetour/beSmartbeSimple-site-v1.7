<?php

include 'contacted.php';

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

    // create email headers
    $headers = 'From:'.$from.'...besmartForm...'."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();


    if(!preg_match($email_exp,$from)) {
        global $error_message;
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        $flag=1;
    }
    else{
        $flag = 0;
        mail($to, $subject, $message, $headers);
    }

}

?>