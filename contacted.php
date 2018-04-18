<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailHandling/Exception.php';
require 'mailHandling/PHPMailer.php';
require 'mailHandling/SMTP.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">   </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="stylesheets/customStyle.css">
    <script src="javascript/indexJS.js" ></script>

    <script>
        //Add footer id dynamic so it responds to page
        $(document).ready(function () {

            $('.footerContainer').attr('id','footerMain');

        });


    </script>
</head>
<body>
<!--Top menu bar-->
<div class="navbar navbar-inverse alignCenter">
    <div class="">

        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
            <a id="mainPage" class="navbar-brand" href="#mainPage"><img class="logo" src="images/whitelogo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class=" nav navbar-nav">
                <li><a id="services" href="#services">Services</a></li>
                <li><a id="portfolio" href="#portfolio">Portfolio</a></li>
                <li><a id="awards" href="#awards">Awards</a></li>
                <li><a id="about" href="#about">About</a></li>
                <li><a id="contactUs" href="#contactUs">Contact</a></li>
            </ul>
        </div>

    </div>

</div><!--End Top menu bar-->


<div class="container"><!--Main container below the navbar-->
    <h1 class="textColor">Thank you for contacting.I will try to respond as soon as possible.</h1>
    <div><a href="contact.php">Back to form</a></div>
    <div><a href="index.php">Back to Home Page</a></div>



</div><!--End container -->

<?php include_once "footer.php" ?>


</body>
</html>