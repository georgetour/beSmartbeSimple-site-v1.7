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
<!--Portfolio page-->
<div id="showPortfolio"  class="textColor">

    

    <div class="container-fluid">
        <!--First row-->
        <div class=" alignCenter">
            <!--Column 1-->
            <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
                <h4 class="bold " >Portfolio</h4>
            </div>

            <!--Column 2-->
            <div class=" col-lg-6  col-md-6 col-sm-12 col-xs-12   ">
                <h3 class="bold">Some of my projects </h3>
            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->

        <!--Second row-->
        <div class="row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12  ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/wikiProject-compressor.jpg">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  ">
                <h4 class="bold">Wikipedia Project</h4>
                <p>A project for wikipedia that uses some special techniques
                    which make the site fast even with high quality images without reloading the page.
                    <a href="wikipediaProject/wikipediaProject.php">Find it here</a>
                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/wikiTrimmed2.png">
            </div>


        </div>
        <!--End second row-->

        <!--Third Row -->
        <div  class="imageRow row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   everything ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/blogProject-compressor.jpg">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   everything ">
                <h4 class="bold">www.oldtimesclassic.com</h4>
                <p>A blog for oldTimesClassic games .It contains unique games from all genres
                    that everyone should play  and people can suggest games.

                    <a href="http://www.oldtimesclassic.com">Find it here</a>
                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/blogTrimmed2.png">
            </div>

        </div><!--Third Row End-->

        <!--Forth Row-->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   everything ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/d_and_d_characters_in_campaign-compressor.jpg">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   everything ">
                <h4 class="bold">Dungeons and Dragons characters in campaign application</h4>
                <p> This is an application for Dungeons and Dragons
                    that shows live characters in campaign with info.
                    Adding some features and soon will be published.
                    <a href="https://github.com/georgetour/D-and-D-characters-in-campaign">Source Code Here</a>

                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/d_and_app_trimmed.png">
            </div>

        </div><!--Forth Row End-->
        <!--Forth Row-->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   everything ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/cinemagic-compressor.jpg">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   everything ">
                <h4 class="bold">www.cinemagic.gr</h4>
                <p> This was an older project for a Greek company that sold and made smart home installations
                    or home theaters.
                </p>
                <p>
                    It had more than 1000 unique visitors per month and high security transactions
                    through a Paypal verified system.
                </p>

            </div>

        </div><!--Forth Row End-->
    </div><!--End portfolio container main-->
    <div style="color: white" class="alignCenter">Also you can check source code and projects <a href="https://github.com/georgetour">here in Github </a>
        or clicking the linking below at footer.
    </div>

    <?php include "footerPortfolio.php" ?>

</div><!--End container portfolio page -->
</body>
</html>





