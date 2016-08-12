<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">   </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="stylesheets/customStyle.css">
    <script src="javascript/indexJS.js" ></script>
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
            <a class="navbar-brand" href="#"><img class="logo" src="images/whitelogo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class=" nav navbar-nav">
                <li><a id="servicesLink" href="#">Services</a></li>
                <li><a id="portfolio" href="#">Portfolio</a></li>
                <li><a id="about" href="#">About</a></li>
                <li><a id="contactUs" href="#">Contact Us</a></li>
            </ul>
        </div>

    </div>

</div><!--End Top menu bar-->



<div class="container textColor"><!--Main container below the navbar-->
    <h2>Contact Me</h2>
    <p >
        If you would like to contact me for a project or anything I can do for you send me an email at <cite>george@besmartbesimple.com</cite>
        or fill the form below.
    </p>

    <form id="contact" class=" col-lg-4 col-md-4 col-xs-12  col-sm-12" method="post" action="contactFormToEmail.php">


        <div >
            <label  class=" ">Subject : </label>
            <input id="gameTitle" class="form-control" pattern=".{5,}" placeholder="Your sites rock(min 5 chars)" type="text" name="emailSubject"maxlength="25" required>
        </div>

        <div class=" formRow  ">
            <label  class="descriptionLabel">Email : </label>
            <input id="email" class="form-control"  placeholder="Your email" type="email" name="email" required>
        </div>



        <div class="formRow">
            <label  class="des ">Message :</label>
            <textarea id="description"  class="form-control "   type="text" rows="5" name="description" required></textarea>

        </div>


        <div class="alignCenter"><input name="makeContact" class="submitButton" type="submit" value="Send message!"></div>
        <div id="error">Error to display</div>


    </form>




</div><!--End container -->







</body>
</html>