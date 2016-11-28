<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get website quote fast </title>
    <meta name="description" content="Get website quote or contact George Tourtsinakis for anything" >
    <meta name="keywords" content="contact george tourtsinakis,get web design quote,get website quote,get a website quote online,get a free website quote">
    <meta name="author" content="George Tourtsinakis">
    
    <?php include 'head.php' ?>

    <?php include_once("analyticstracking.php") ?>

    <script>
        //Add footer id dynamic so it responds to page
        $(document).ready(function () {

            $('.footerContainer').attr('id','footerContact');

        });


    </script>

</head>
<body>

<?php include 'navbar.php'?>

<!--Contact Page-->
<div id="showContactUs" class=" textColor">
    <div class="container contactMe showEffect3">
        <h1>Get quote in some minutes!</h1>
        <p >
            If you would like to contact me for anything I can do for you send me an email at
            <cite class="contactInfo"><a href="mailto:george@besmartbesimple.com">george@besmartbesimple.com</a></cite>
            or fill the form below.
        </p>

        <form id="contact" class=" col-lg-4 col-md-4 col-xs-12  col-sm-12" method="post" action="contactFormToEmail.php">


            <div >
                <label  class=" ">Subject : </label>
                <input id="gameTitle" class="form-control" pattern=".{5,}" placeholder="Minimum 5 characters" type="text" name="emailSubject" maxlength="25" required>
            </div>

            <div class=" formRow  ">
                <label  class="descriptionLabel">Email : </label>
                <input id="email" class="form-control"  placeholder="Your email" type="email" name="email" required>
            </div>

            <div class="formRow">
                <label  class="des ">Message :</label>
                <textarea id="description" placeholder="ex I have this idea for a site can you create something like that ?" class="form-control " rows="5" name="description" required></textarea>

            </div>

            <div class="alignCenter"><input name="makeContact" class="submitButton" type="submit" value="Get quote in some minutes!"></div>
            <div id="error">Error to display</div>

        </form>

    </div>
    <?php include "footer.php" ?>

</div><!--End contact  container -->




</body>
</html>





