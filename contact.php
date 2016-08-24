<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>beSmartbeSimple - Web Design and Development  </title>
    <?php include 'head.php' ?>
</head>
<body>

<?php include 'navbar.php'?>

<!--Contact Page-->
<div id="showContactUs" class=" textColor">
    <div class="container-fluid contactMe">
        <h2>Contact Me</h2>
        <p >
            If you would like to contact me for a project or anything I can do for you send me an email at <cite>george@besmartbesimple.com</cite>
            or fill the form below.
        </p>

        <form id="contact" class=" col-lg-4 col-md-4 col-xs-12  col-sm-12" method="post" action="contactFormToEmail.php">


            <div >
                <label  class=" ">Subject : </label>
                <input id="gameTitle" class="form-control" pattern=".{5,}" placeholder="Minimum 5 characters" type="text" name="emailSubject"maxlength="25" required>
            </div>

            <div class=" formRow  ">
                <label  class="descriptionLabel">Email : </label>
                <input id="email" class="form-control"  placeholder="Your email" type="email" name="email" required>
            </div>

            <div class="formRow">
                <label  class="des ">Message :</label>
                <textarea id="description"  class="form-control " rows="5" name="description" required></textarea>

            </div>

            <div class="alignCenter"><input name="makeContact" class="submitButton" type="submit" value="Send message!"></div>
            <div id="error">Error to display</div>

        </form>

    </div>
    <?php include "footerAboutMe.php" ?>

</div><!--End contact  container -->




</body>
</html>





