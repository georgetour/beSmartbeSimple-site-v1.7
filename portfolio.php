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
<section id="showPortfolio"  class="textColor">

    <article class="container">
        <!--First row-->
            <div class="row alignCenter">
                <header>
                    <h1 class="showEffect1 text-center">George Tourtsinakis portfolio</h1>
                    <h2 class="showEffect2">Websites</h2>
                    <p class="showEffect3"><strong>Click the image or the title to see the project</strong></p>
                </header>
            </div>


        <!--End first row-->

        <!--Farmaparnassou Row -->
        <section class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect1 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="http://www.farmaparnassou.gr" target="_blank">Farmaparnassou.gr</a> </h4>
                    <p > A site for a Greek company that has farms with high quality food products like meat, cheese and many more...</p>
                    <p>The client needed every page to look different and of course we achieved that.</p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP</p>
                </div>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect2 ">

                <h3>Responsive</h3>
                <img class="img-responsive  centerImg phonePortfolio" src="images/portfolio/farmaparnassou-trimmed-compressor.png" alt="Farmaparnassou.gr mobile">
            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect3 ">
                <h3>Normal view</h3>
                <a href="http://www.farmaparnassou.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/famarparnassou-final-compressor.jpg" alt="Farmaparnassou.gr">
                </a>
            </div>

        </section><!--Farmaparnassou Row -->

        <!--Test Wordpress Row -->
        <section  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect4 ">
                <h3>Normal view</h3>
                <a href="http://www.mywordpress.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/mywordpress-compressor.jpg" alt="Test Wordpress">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/mywordpresstrimmed-compressor.png" alt="Test Wordpress at mobile">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect6 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="http://www.mywordpress.gr" target="_blank">MyWordpress.gr</a> </h4>
                    <p> This is a project that uses Wordpress and Bootstrap custom theme creation.
                    <p>I can create custom themes in Wordpress at your needs as you can see. </p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress custom, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>

        </section><!--Test Wordpress End-->

        <!--Plazaresort project row-->
        <section class="imageRow row alignCenter ">


            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect1" >
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"><a href="http://www.myprototype.eu">Plaza Resort Hotel</a></h4>
                    <p >A prototype project for plaza resort hotel and marinet.gr made with
                    full customized Wordpress.</p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress, WooCommerce, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12   showEffect2">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/plazaresort-trimmed-compressor.png" alt="Plaza Resort at mobile">

            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12  showEffect3">
                <h3>Normal view</h3>
                <a href="http://www.myprototype.eu">
                <img class="img-responsive borderPortfolio" src="images/portfolio/plazaresort-compressor.jpg" alt="Plaza Resort Project">
            </a>
        </div>
        </section>
        <!--End Plazaresort row-->

        <!--Wikipedia project row-->
        <section class="imageRow row alignCenter ">
            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12  showEffect4">
                <h3>Normal view</h3>
                <a href="wikipediaProject/wikipediaProject.php">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/wikiProject-compressor.jpg" alt="Wikipedia Project">
                </a>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/wikiTrimmed2.png" alt="Wipipedia Project at mobile">

            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect6">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold "><a href="wikipediaProject/wikipediaProject.php" target="_blank">Wikipedia Project</a></h4>
                    <p >A project for wikipedia that uses some special techniques
                    which make the site fast even with high quality images without reloading the page.
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript/Jquery, Handlebars.js </p>
                </div>
            </div>
        </section>
        <!--Wikipedia project row-->

        <!--OldTimesClassic Row -->
        <section  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12 showEffect4">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold "><a href="http://www.oldtimesclassic.com" target="_blank">Old Times Classic</a></h4>
                    <p >A blog for oldTimesClassic games. It contains unique games from all genres
                        that everyone should play  and people can suggest games.
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript/Jquery,PHP, MySql </p>
                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect5">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/blogTrimmed2.png" alt="Old Times Classic blog at mobile">
            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12 showEffect6   everything ">
                <h3>Normal view</h3>
                <a href="http://www.oldtimesclassic.com" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/blogProject-compressor.jpg" alt="Old Times Classic blog">
                </a>
            </div>

        </section><!--OldTimesClassic Row End-->

        <!--Mastering SASS Row -->
        <section class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect2 ">
                <h3>Normal View</h3>
                <a href="Sass/mastering-sass.php" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/mastering-sass-compressor.jpg" alt="Mastering SASS">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="Sass/mastering-sass.php" target="_blank">Mastering SASS</a> </h4>

                        <p> A guide for SASS that you will be able to understand everything about SASS.
                        </p>
                        <p>It has everything you want from simple explanation, installation and basic to advanced categories.</p>
                         <h4>Technologies used :</h4>
                        <p>HTML5/CSS3, SASS, Bootstrap, Javascript/Jquery, </p>

                </div>

            </div>

        </section><!--Mastering SASS Row End-->

        <!--Atypon Assignment Row -->
        <section class="imageRow row alignCenter ">
            <!--Left column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect4">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="Atypon-project/atypon-project.html" target="_blank">An atypon.com project</a> </h4>
                    <p > A prototype project for this great USA company that uses no framework except
                        jquery with some difficult single page animation.

                    </p>
                    <p>It looks really nice in all devices and has accessibility top priority. </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Javascript/Jquery </p>
                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12   showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/atyponTrimmed2-compressor.png" alt="Atypon.com project at mobile">
            </div>


            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect6 ">
                <h3>NormaL view</h3>
                <a href="Atypon-project/atypon-project.html" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/atypon-compressor.png" alt="Atypon.com project">
                </a>
            </div>
        </section><!--Atypon Row End-->

        <!--Cinemagic Row-->
        <section class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12   showEffect1 ">
                <h3>NormaL view</h3>
                <img class="img-responsive borderPortfolio" src="images/portfolio/cinemagic-compressor.jpg" alt="Cinemagic.gr">
            </div>
            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect2 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold">www.cinemagic.gr</h4>
                    <p> This was an e-shop in 2010-2012 for a Greek company that sold and made smart home installations or home theaters.</p>
                    <p>It had more than 1000 unique visitors per month and high security transactions
                        through a Paypal verified system.
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML/CSS, Javascript/Jquery, PHP, MySql ,Paypal</p>
                </div>
            </div>

        </section>
        <!--Cinemagic Row end-->


        <header>
            <h2 class="showEffect1 text-center">Applications</h2>
            <p class="showEffect2 text-center">These are some of my  applications that you can find the source code in github
            </p>
        </header>

        <!--Applications row-->
        <section class="imageRow row alignCenter" >
            <!--Left columt-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect1  ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold">Dungeons and Dragons characters in campaign</h4>
                    <p class="whiteBackPortfolio"> This was my capstone project for my Responsive Design Specialization
                        for University of London.
                        <a href="https://github.com/georgetour/Dungeons-and-Dragons-characters-in-campaign">Source Code Here</a>
                    </p>
                    <p>Users are able to see what characters are playing in their session and easily update items, skills,
                        levels etc from their tablet, phone or pc.
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript, Meteor.js, Node.js, MongoDB</p>

                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect2 ">
                <h3>The app</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/d_and_app_trimmed.png" alt="Dungeons and Dragons application at mobile">
            </div>


            <!--Left columt-->
            <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect3">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold">Chat application</h4>
                    <p class="whiteBackPortfolio"> This is an application that users register and chat live.
                        <a href="https://github.com/georgetour/https://github.com/georgetour/Meteor-chat-application-minstant">Source Code Here</a>
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript, Meteor.js, Node.js, MongoDB</p>

                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect4 ">
                <h3>The app</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/chat-app.png" alt="Chat application at mobile">
            </div>



        </section><!--Applications row-->


        <!--Image share Row-->
        <section  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect4  ">
                <h3>Description</h3>
                    <div class="whiteBackPortfolio">
                        <h4 class="bold">Image share application</h4>
                        <p > This is an application that people share images by registering
                        and rate them pretty easily.
                        <a href="https://github.com/georgetour/Meteor-image_share">Source Code Here</a>
                        </p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Bootstrap, Javascript, Meteor.js, Node.js, MongoDB</p>

                 </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12   showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/imageshare-trimmed.png" alt="Image share application at mobile">
            </div>


            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12  showEffect6">
                <h3>Normal view</h3>
                <a href="https://github.com/georgetour/Meteor-image_share" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/image-share-with-fork-me-compressor.jpg" alt="Image share application">
                </a>
            </div>

        </section><!--Image share Row-->






    </article><!--End portfolio container main-->

<div style="color: white" class="alignCenter">Also you can check source code and projects <a href="https://github.com/georgetour" target="_blank">here in Github</a>
        or clicking the link below at footer.
    </div>

    <!--Footer-->
    <?php include "footer.php" ?>




</body>
</html>





