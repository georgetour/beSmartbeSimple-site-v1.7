<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>beSmartbeSimple - Web Design and Development  </title>
    <meta name="description" content="I built smart websites with beautiful simple design.Contact me for a free quote." >
    <meta name="keywords" content="besmarbesimple,be smart be simple,besmart be simple,web design,web designer,web developer,web page design,web design services,smart website,simple designs,creative web design,affordable web design,responsive,responsive web design">
    <meta name="author" content="George Tourtsinakis">

    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--<link type="text/css" rel="stylesheet" href="stylesheets/customStyle.css">-->
    <link type="text/css" rel="stylesheet" href="stylesheets/customStyle.min.css">

    <style>
        @media (max-width:732px ){
            h1{
                font-size: 23px;
                margin-top:-2%;!important;
            }
            .buttonsMain{
                font-size: 13px;
                height: 40px;
                width: 160px;
            }
            .weCreate{
                margin-top: 0.8%;
            }
        }

    </style>

    <?php include_once("analyticstracking.php") ?>
    <!--<script src="javascript/indexCompressed.js" ></script>-->
</head>
<body>

<?php include_once 'navbar.php'?>


<div class="container-fluid">
 <div class="iframeGrid alignCenter "><!--Grid for centering the iframe -->

    <div   class="col-lg-3 col-md-3 col-sm-12 col-xs-12 weCreate alignCenter ">
        <div class="mainHeader">
        <h1   class=" weCreate "><span class="fadeIn1 ">I create</span> <span class="fadeIn2 ">smart websites</span>
        <span class="fadeIn3 ">with beautiful simple <br>design.</span></h1>
        </div>
    </div>
    <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12  alignCenter everything">
        <div class="phoneDiv">
        <img class="iphone" src="images/iphoneTrimmedNoText.png" alt="Holding responsive mobile">
            <div class="centeredPhoneText bold col-sm12">
                <div class="weCreate"><span class="fadeIn1 ">I create</span> <span class="fadeIn2 ">smart websites</span>
                    <span class="fadeIn3 ">with beautiful simple design.</span></div>
            </div>
        </div>

    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
        <div class=" buttonsRow">
            <button onclick="location.href='contact.php';" class="buttonsMain">Get quote in some minutes >>>></button>
        </div>
    </div>


 </div><!--End Grid for centering the iphone -->
</div><!--End mainPage container fluid-->

<!--Footer-->
<?php include "footer.php" ?>


<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">   </script>

</body>
</html>