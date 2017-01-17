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

    <script>
        //Add footer id dynamic so it responds to page
        $(document).ready(function () {
            $('.footerContainer').attr('id','footerStatic');
        });
    </script>

    <?php include_once("analyticstracking.php") ?>
</head>
<body >
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
                <strong>Click any image or the link to see the project</strong>
            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->

        <!--Farmaparnassou Row -->
        <div class=" row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect2 ">
                <a href="http://www.farmaparnassou.gr" target="_blank">
                <img class="img-responsive borderPortfolio" src="images/portfolio/famarparnassou-final-compressor.jpg" alt="Farmaparnassou.gr">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">

                <h4 class="bold whiteBackPortfolio"> <a href="http://www.farmaparnassou.gr" target="_blank">www.farmaparnassou.gr</a> </h4>
                <p class="whiteBackPortfolio"> A site for a Greek company that has farms with high quality food products like meat, cheese and many more...

                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/farmaparnassou-trimmed-compressor.png" alt="Farmaparnassou.gr mobile">
            </div>

        </div><!--Farmaparnassou Row -->

        <!--Test Wordpress Row -->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect5 ">
                <a href="http://www.mywordpress.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/mywordpress-compressor.jpg" alt="Test Wordpress">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect6 ">
                <h4 class="bold whiteBackPortfolio"> <a href="http://www.mywordpress.gr" target="_blank">MyWordpress.gr</a> </h4>
                <div class="whiteBackPortfolio">
                <p> This is a project that uses Wordpress and Bootstrap custom theme creation.
                </p>
                <p>I can create custom themes in Wordpress at your needs as you can see. </p>
                </div>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/mywordpresstrimmed-compressor.png" alt="Test Wordpress at mobile">
            </div>

        </div><!--Test Wordpress End-->

        <!--Plazaresort project row-->
        <div class="imageRow row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12  showEffect3">
                <a href="http://www.myprototype.eu">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/plazaresort-compressor.jpg" alt="Plaza Resort Project">
                </a>
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect4" >
                <h4 class="bold whiteBackPortfolio"><a href="http://www.myprototype.eu">Plaza Resort Hotel</a></h4>
                <p class="whiteBackPortfolio">A prototype project for plaza resort hotel and marinet.gr made with
                    full customized Wordpress.

                </p>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/plazaresort-trimmed-compressor.png" alt="Plaza Resort at mobile">
            </div>
        </div>
        <!--End Plazaresort row-->

        <!--Wikipedia project row-->
        <div class="imageRow row alignCenter ">
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12  showEffect3">
                <a href="wikipediaProject/wikipediaProject.php">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/wikiProject-compressor.jpg" alt="Wikipedia Project">
                </a>
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect4">
                <h4 class="bold whiteBackPortfolio"><a href="wikipediaProject/wikipediaProject.php">Wikipedia Project</a></h4>
                <p class="whiteBackPortfolio">A project for wikipedia that uses some special techniques
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
                <h4 class="bold whiteBackPortfolio"><a href="http://www.oldtimesclassic.com">www.oldtimesclassic.com</a></h4>
                <p class="whiteBackPortfolio">A blog for oldTimesClassic games. It contains unique games from all genres
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
                <h4 class="bold whiteBackPortfolio"> <a href="Sass/mastering-sass.php" target="_blank">Mastering SASS</a> </h4>
                <div class="whiteBackPortfolio">
                <p > A single page guide, so from beginner to SASS you will be able to understand more advanced topics
                    and master it.

                </p>
                <p>It has everything you want from simple explanation, installation and basic to advanced categories.</p>
                </div>

            </div>

        </div><!--Mastering SASS Row End-->

        <!--Atypon Assignment Row -->
        <div style="margin-bottom:10px " class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect4 ">
                <a href="Atypon-project/atypon-project.html" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/atypon-compressor.png" alt="Atypon.com project">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect5 ">
                <h4 class="bold whiteBackPortfolio"> <a href="Atypon-project/atypon-project.html" target="_blank">An atypon.com project</a> </h4>
                <div class="whiteBackPortfolio">
                <p class="whiteBackPortfolio"> A prototype project for this great USA company that uses no framework except
                    jquery with some difficult single page animation.

                </p>
                <p>It looks really nice in all devices and has accessibility top priority. </p>
                </div>
                <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/atyponTrimmed2-compressor.png" alt="Atypon.com project at mobile">
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
                <h4 class="bold whiteBackPortfolio">Image share application</h4>
                <p class="whiteBackPortfolio"> This is an application made with meteor.js that people register, upload and rate images.
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
                <h4 class="bold whiteBackPortfolio">www.cinemagic.gr</h4>
                <div class="whiteBackPortfolio">
                <p> This was an older project for a Greek company that sold and made smart home installations
                    or home theaters.
                </p>
                <p>
                    It had more than 1000 unique visitors per month and high security transactions
                    through a Paypal verified system.
                </p>
                </div>
            </div>

        </div>
        <!--Cinemagic Row end-->






    </div><!--End portfolio container main-->
    <div style="color: white" class="alignCenter">Also you can check source code and projects <a href="https://github.com/georgetour" target="_blank">here in Github</a>
        or clicking the link below at footer.
    </div>

    <!--Footer-->
    <?php include "footer.php" ?>

</div><!--End container portfolio page -->


</body>
</html>





