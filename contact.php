
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<?php include 'navbar.php' ?>


<!--Contact Page-->
<div id="showContactUs" class=" textColor">
    <div class="container contactMe showEffect3 ">
        <h1>Get free quote in some minutes!</h1>
        <p >
            If you would like to contact me for anything I can do for you send me an email at
            <cite class="contactInfo"><a href="mailto:george@besmartbesimple.com">george@besmartbesimple.com</a></cite>
            or fill the form below.
        </p>


       
        <form id="contact"  method="post" action="contactFormToEmail">

            <div >
                <div><label>Subject : </label></div>
                <input id="gameTitle" class="formInput"  pattern=".{5,}" placeholder="Minimum 5 characters" type="text" name="emailSubject" maxlength="30" required>

                <div><label  class="descriptionLabel">Email : </label></div>
                <input id="email" class="formInput"  placeholder="Your email" type="email" name="email" required>

                <div ><label  class="des ">Message :</label></div>
                <textarea id="description"  class="formInput"  placeholder="ex I have this idea for a site can you create something like that ?"  rows="5" name="description" required></textarea>
               
                <div  class="g-recaptcha alignCenter" data-sitekey="6LcrxFMUAAAAAO2_0bI6I1PWbmF8jNZUUD_bcDk5"></div>
                <div><input name="makeContact" class="submitButton" type="submit" value="Get free quote now!"></div>
                <div id="error">Error to display</div>
            </div>
        </form>
        


    </div>
</div>
    <?php include "footer.php" ?>





<script>
    //Add footer id dynamic so it responds to page
    $(document).ready(function () {

        $('.footerContainer').attr('id','footerContact');

    });


</script>
</body>
</html>





