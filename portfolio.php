<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>George Tourtsinakis portfolio </title>
    <meta name="description" content="Web developer portfolio" >
    <meta name="keywords" content="web developer portfolio, developer portfolio, designer portfolio,george tourtsinakis portfolio,responsive web design portfolio,fast sites,responsive,easy to navigate,responsive web design,responsive web development,personal portfolio">
    <meta name="author" content="George Tourtsinakis">

    <?php include 'head.php' ?>

    <?php include_once("analyticstracking.php") ?>
</head>
<body>
<?php include 'navbar.php'?>
<!--Portfolio page-->
<div id="showPortfolio"  class="textColor">

    <div class="container-fluid">
        <!--First row-->
        <div class=" alignCenter">
            <!--Column 1-->
            <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12 showEffect1 ">
                <h4 class="bold " >Portfolio</h4>
            </div>
            <!--Column 2-->
            <div class=" col-lg-6  col-md-6 col-sm-12 col-xs-12 showEffect2  ">
                <h3 class="bold">Some of my projects </h3>
            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->

        <!--Wikipedia project row-->
        <div class="row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12  showEffect3">
                <a href="wikipediaProject/wikipediaProject.php">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/wikiProject-compressor.jpg" alt="Wikipedia Project">
                </a>
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect4">
                <h4 class="bold"><a href="wikipediaProject/wikipediaProject.php">Wikipedia Project</a></h4>
                <p>A project for wikipedia that uses some special techniques
                    which make the site fast even with high quality images without reloading the page.
                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/wikiTrimmed2.png" alt="Wipipedia Project at mobile">
            </div>
        </div>
        <!--Wikipedia project row-->

        <!--OldTimesClassic Row -->
        <div  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12 showEffect5   everything ">
                <a href="http://www.oldtimesclassic.com" target="_blank">   <img class="img-responsive borderPortfolio" src="images/portfolio/blogProject-compressor.jpg" alt="Old Times Classic blog"></a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12 showEffect6  everything ">
                <h4 class="bold"><a href="http://www.oldtimesclassic.com">www.oldtimesclassic.com</a></h4>
                <p>A blog for oldTimesClassic games .It contains unique games from all genres
                    that everyone should play  and people can suggest games.
                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/blogTrimmed2.png" alt="Old Times Classic blog at mobile">
            </div>

        </div><!--OldTimesClassic Row End-->

        <!--Mastering SASS Row -->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect2 ">
                <a href="Sass/mastering-sass.php" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/mastering-sass-compressor.jpg" alt="Mastering SASS">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">
                <h4 class="bold"> <a href="Sass/mastering-sass.php" target="_blank">Mastering SASS</a> </h4>
                <p> A single page guide, so from beginner to SASS you will be able to understand more advanced topics
                    and master it.

                </p>
                <p>It has everything you want from simple explanation, installation and basic to advanced categories.</p>

            </div>

        </div><!--Mastering SASS Row End-->

        <!--Atypon Assignment Row -->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect2 ">
                <a href="Atypon-project/atypon-project.html" target="_blank">
                    <img class="img-responsive borderPortfolio" src="Atypon-project/images/atypon-assignment-compress.gif" alt="Mastering SASS">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">
                <h4 class="bold"> <a href="Atypon-project/atypon-project.html" target="_blank">An atypon.com project</a> </h4>
                <p> A prototype project for this great USA company that uses no framework except
                    jquery with some difficult single page animation.

                </p>
                <p>It looks really nice in all devices and has accessibility top priority. </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="Atypon-project/images/atypon-responsive-compressed.gif" alt="Image share application at mobile">
            </div>

        </div><!--Atypon Row End-->

        <!--Image share Row-->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12    showEffect4">
                <a href="https://github.com/georgetour/Meteor-image_share" target="_blank">
                <img class="img-responsive borderPortfolio" src="images/portfolio/image-share-with-fork-me-compressor.jpg" alt="Image share application">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect5  ">
                <h4 class="bold">Image share application</h4>
                <p> This is an application made with meteor.js that people register, upload and rate images.
                    <a href="https://github.com/georgetour/Meteor-image_share">Source Code Here</a>
                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/imageshare-trimmed.png" alt="Image share application at mobile">
            </div>

        </div><!--Image share Row-->

        <!--Cinemagic Row-->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect1 ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/cinemagic-compressor.jpg" alt="Cinemagic.gr">
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect2 ">
                <h4 class="bold">www.cinemagic.gr</h4>
                <p> This was an older project for a Greek company that sold and made smart home installations
                    or home theaters.
                </p>
                <p>
                    It had more than 1000 unique visitors per month and high security transactions
                    through a Paypal verified system.
                </p>

            </div>

        </div>
        <!--Cinemagic Row end-->

        <!--Farmaparnassou Row -->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect2 ">
                <img class="img-responsive borderPortfolio" src="images/portfolio/farma-main-4-compressor.jpg" alt="Farmaparnassou.gr">
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">
                <h4 class="bold"> <a href="http://www.farmaparnassou.gr" target="_blank">www.farmaparnassou.gr</a> </h4>
                <p> Currently UNDER CONSTRUCTION page for a local shop with high quality
                    Greek products like meat, wine and many more...
                </p>

            </div>

        </div><!--Farmaparnassou Row -->




    </div><!--End portfolio container main-->
    <div style="color: white" class="alignCenter">Also you can check source code and projects <a href="https://github.com/georgetour" target="_blank">here in Github</a>
        or clicking the link below at footer.
    </div>

    <!--Footer-->
    <?php include "footerPortfolio.php" ?>

</div><!--End container portfolio page -->
</body>
</html>





