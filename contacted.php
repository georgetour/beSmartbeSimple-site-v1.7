
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

<?php include 'navbar.php' ?>


<div class="container"><!--Main container below the navbar-->
    <h1 class="textColor">Thank you for contacting.I will try to respond as soon as possible.</h1>
    <div><a href="contact.php">Back to form</a></div>
    <div><a href="index.php">Back to Home Page</a></div>



</div><!--End container -->

<?php include_once "footer.php" ?>


</body>
</html>