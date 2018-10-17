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
	<style>
	@media screen and (min-width: 1024px){
		.borderPortfolio{
			height:360px;
			width:100%;
		}
	}

	@media screen and (max-width:768px){

		.flex-ordering{
			display:grid;
			flex-direction: column;
		}

        .flex-ordering div:nth-of-type(1) {
        order: 3;
        }

        .flex-ordering div:nth-of-type(2) {
            order: 2;
        }

        .flex-ordering div:nth-of-type(3) {
            order: 1;
        }
    }
</style>
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
                    <h2 class="whiteBackPortfolio showEffect2">Websites</h2>
                    <p class="showEffect3"><strong>Click the image or the title to see the project</strong></p>
                </header>
            </div>


        <!--End first row-->

        <!--CultureFyli Row -->
        <section class="imageRow row alignCenter flex-ordering">
           <!--Left column-->
            <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect1 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="http://www.culturefyli.gr" target="_blank">Culturefyli.gr</a> </h4>
                    <p> A site for the municipality of Fyli in Athens which is one the biggest municipalities in Greece. </p>
					          <p>It has many areas for different clubs, stadiums, events calendar, news and online booking system. </p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress custom, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect2 ">

                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/culturefyli-trimmed-small.png" alt="Cultyrefyli at mobile">
            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect3 ">
                <h3>Normal view</h3>
                <a href="http://culturefyli.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/culturefyli-compressor.jpg" alt="Municipality Of Fyli">
                </a>
            </div>

        </section><!--CultureFyli Row end-->


		<!--Farmaparnassou Row -->
        <section  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect4 ">
              <h3>Normal view</h3>
              <a href="http://www.farmaparnassou.gr" target="_blank">
                  <img class="img-responsive borderPortfolio" src="images/portfolio/famarparnassou-final-compressor.jpg" alt="Farmaparnassou.gr">
              </a>            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive  centerImg phonePortfolio" src="images/portfolio/farmaparnassou-trimmed-compressor.png" alt="Farmaparnassou.gr mobile">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect6 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                  <h4 class="bold"> <a href="http://www.farmaparnassou.gr" target="_blank">Farmaparnassou.gr</a> </h4>
                  <p > A site for a Greek company that has farms with high quality food products like meat, cheese and many more...</p>
                  <p>The client needed every page to look different and of course we achieved that.</p>
                  <h4>Technologies used :</h4>
                  <p>HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP</p>
                </div>
            </div>

        </section><!--Farmaparnassou End-->

        <!--Orthodontikos-peiraias Row -->
        <section class="imageRow row alignCenter flex-ordering">
           <!--Left column-->
            <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect3">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="https://www.orthodontikos-peiraias.gr" target="_blank">Orthodontikos-peiraias.gr</a> </h4>
                    <p>A site for an orthodontist in Piraeus. The client needed online presence since she couldn't be found at google.</p>
                    <p>She was found in first day of deployment. We will have an appointment application that will sync with the website.</p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect4">
                <h3>Responsive</h3>
                <img class="img-responsive  centerImg phonePortfolio" src="images/portfolio/orthodontikos-peiraias-trimmed-small.png" alt="orthodontikos-peiraias.gr mobile">
            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect5">
                <h3>Normal view</h3>
                <a href="https://www.orthodontikos-peiraias.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/orthodontikos-peiraias-compressed.jpg" alt="orthodontikos-peiraias.gr">
                </a>
            </div>

        </section><!--Orthodontikos-peiraias Row -->


		<!--Synectics Row -->
        <section  class="imageRow row alignCenter ">
            <!--Left column-->
            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect4 ">
                <h3>Normal view</h3>
                <a href="https://www.synectics.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/synectics-compressor.jpg" alt="Synectics">
                </a>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/synectics-trimmed-compressor.png" alt="Synectics at mobile">
            </div>

            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect6 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="https://www.synectics.gr" target="_blank">Synectics.gr</a> </h4>
                    <p> As an employee in synectics.gr I totally recreated their site.
                    <p>The website had many problems in different areas that were fixed. Maximized responsiveness and user experience. A lot of customization. </p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress custom, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>

        </section><!--Synectics End-->

		<!--Serviceworld Row -->
        <section  class="imageRow row alignCenter flex-ordering">
            <!--Left column-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 showEffect4 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="https://www.serviceworld.gr" target="_blank">Serviceworld.gr</a> </h4>
                    <p> As an employee in synectics.gr we created the site for serviceworld.gr which is the support for philco.gr.
                    <p>The website is modern and user friendly. The clients can make appointments online and see their RMA progress.  </p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress, HTML5/CSS3, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/serviceworld-trimmed-compressor.png" alt="Serviceworld.gr at mobile">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12  showEffect6 ">
                <h3>Normal view</h3>
                <a href="https://www.serviceworld.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/serviceworld-compressor.jpg" alt="Serviceworld.gr">
                </a>
            </div>

        </section><!--Serviceworld End-->

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
        <section class="imageRow row alignCenter flex-ordering">


            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect1" >
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"><a href="http://plazaresort.myprototype.eu/" target="_blank">Plaza Resort Hotel</a></h4>
                    <p >A prototype project for plaza resort hotel and marinet.gr made with
                    full customized Wordpress.</p>
                    <h4>Technologies used :</h4>
                    <p>Wordpress/WooCommerce, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12   showEffect2">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/plazaresort-trimmed-compressor.png" alt="Plaza Resort at mobile">

            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12  showEffect3">
                <h3>Normal view</h3>
                <a href="http://plazaresort.myprototype.eu/" target="_blank">
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
        <section  class="imageRow row alignCenter flex-ordering">
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
        <section class="imageRow row alignCenter flex-ordering">
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

        <!--Eshops Row-->
        <section class="imageRow row alignCenter ">
            <header>
                <h2 class="whiteBackPortfolio showEffect1 text-center">E-shops</h2>
                <p class="showEffect2 text-center">These are some of the e-shops I have created with various technologies.
                </p>
            </header>
            
           <!--Omikron Row -->
           <section class="imageRow row alignCenter flex-ordering">
            <!--Left column-->
            <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect1 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"> <a href="https://www.omikron.gr" target="_blank">Omikron.gr</a> </h4>
                    <p > As an employee in synectics.gr we created the e-commerce site of omikron.gr</p>
                    <p>The client needed things that weren't supported by the theme so we made them custom.</p>
                    <h4>Technologies used :</h4>
                    <p>Opencart, HTML5/CSS3, Bootstrap, Javascript/Jquery, PHP, MySql</p>
                </div>
            </div>
            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect2 ">

                <h3>Responsive</h3>
                <img class="img-responsive  centerImg phonePortfolio" src="images/portfolio/omikron-trimmed-compressor.png" alt="Omikron.gr mobile">
            </div>

            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect3 ">
                <h3>Normal view</h3>
                <a href="https://www.omikron.gr" target="_blank">
                    <img class="img-responsive borderPortfolio" src="images/portfolio/omikron-compressor.jpg" alt="Omikron.gr">
                </a>
            </div>
            </section><!--Omikron Row -->

            <!--E-coach-->
            <section class="imageRow row alignCenter">
                <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12  showEffect4">
                    <h3>Normal view</h3>
                    <a href="http://e-coach.gr" target="_blank">
                        <img class="img-responsive borderPortfolio" src="images/portfolio/e-coach-resized.jpg" alt="Wikipedia Project">
                    </a>
                </div>

                <!--Right Column-->
                <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect5 ">
                    <h3>Responsive</h3>
                    <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/ecoach-trimmed.png" alt="Wipipedia Project at mobile">

                </div>

                <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12  showEffect6">
                    <h3>Description</h3>
                    <div class="whiteBackPortfolio">
                        <h4 class="bold "><a href="http://e-coach.gr" target="_blank">E-coach.gr</a></h4>
                        <p >An e-shop for marketing and sales strategies. Users can buy videos and watch them.</p>
                        <h4>Technologies used:</h4>
                        <p>Wordpress/Woocommerce, HTML5/CSS3, Javascript/Jquery, PHP, Mysql </p>
                    </div>
                </div>
            </section>
            <!--End E-coach -->

            <!--Devilperfume Row -->
            <section class="imageRow row alignCenter flex-ordering">
                <!--Left column-->
                <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect1 ">
                    <h3>Description</h3>
                    <div class="whiteBackPortfolio">
                        <h4 class="bold"> <a href="https://www.devilperfume.gr" target="_blank">Devilperfume.gr</a> </h4>
                        <p > As an employee in synectics.gr we improved and hosted the site of devilperfume.gr.</p>
                        <p>The speed was improved by 40-50%, created custom affiliate areas, special shipping methods and many other improvements.</p>
                        <h4>Technologies used :</h4>
                        <p>Wordpress/WooCommerce, HTML5/CSS3, Javascript/Jquery, PHP, MySql</p>
                    </div>
                </div>
                <!--Right Column-->
                <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12 showEffect2 ">

                    <h3>Responsive</h3>
                    <img class="img-responsive  centerImg phonePortfolio" src="images/portfolio/devileperfume-trimmed.png" alt="Devilperfume.gr mobile">
                </div>

                <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect3 ">
                    <h3>Normal view</h3>
                    <a href="https://www.devilperfume.gr" target="_blank">
                        <img class="img-responsive borderPortfolio" src="images/portfolio/devilperfume-compressor.jpg" alt="Devilperfume.gr">
                    </a>
                </div>

            </section><!--Devilperfume Row -->

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
                    <p> This was an e-shop for a Greek company that sold and made smart home installations or home theaters.</p>
                    <p>It had more than 1000 unique visitors per month and high security transactions
                        through a Paypal verified system.
                    </p>
                    <h4>Technologies used :</h4>
                    <p>HTML/CSS, Javascript/Jquery, PHP, MySql ,Paypal</p>
                </div>
            </div>

        </section>
        <!--Eshops Row end-->

        <!--Applications row-->
        <section class="imageRow row alignCenter" >
            <header>
                <h2 class="whiteBackPortfolio showEffect1 text-center">Applications</h2>
                <p class="showEffect2 text-center">These are some of my  applications that you can find the source code in github
                </p>
            </header>


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
        </section><!--End Applications row-->


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


        <!--Custom CMS row-->
        <section class="imageRow row alignCenter flex-ordering">

            <header>
                <h2 class="whiteBackPortfolio showEffect1 text-center">Custom CMS</h2>
                <p class="showEffect2 text-center">I have created totally custom made CMS</p>
            </header>

            <!--Left column-->
            <div class="col-lg-7  col-md-7 col-sm-12 col-xs-12   showEffect1 ">
                <h3>NormaL view</h3>
                <a href="https://github.com/georgetour/Custom-CMS-like-Wordpress"><img class="img-responsive borderPortfolio" src="images/portfolio/custom%20CMS.jpg" alt="Custom CMS like Wordpress"></a>
            </div>

            <!--Right Column-->
            <div class=" col-lg-2  col-md-2 col-sm-12 col-xs-12  showEffect2 ">
                <h3>Responsive</h3>
                <img class="img-responsive centerImg phonePortfolio" src="images/portfolio/custom-cms-trimmed.png" alt="Custom CMS like Wordpress at mobile">

            </div>


            <!--Right Column-->
            <div class=" col-lg-3  col-md-3 col-sm-12 col-xs-12   showEffect3 ">
                <h3>Description</h3>
                <div class="whiteBackPortfolio">
                    <h4 class="bold"><a href="https://github.com/georgetour/Custom-CMS-like-Wordpress">Custom CMS like Wordpress</a></h4>
                    <p> This is a custom made Content Management System like Wordpress but with more scalability.</p>
                    <p>You can add posts, comments, users, categories and edit everything as admin.
                    </p>
                    <p>It uses also google charts that show dynamically different info.</p>
                    <h4>Technologies used :</h4>
                    <p>HTML5/CSS3, Javascript/Jquery, PHP, MySql , Google Charts</p>
                </div>
            </div>

        </section>
        <!--Custom CMS Row end-->
    </article><!--End portfolio container main-->

<div style="color: white" class="alignCenter">Also you can check source code and projects <a href="https://github.com/georgetour" target="_blank">here in Github</a>
        or clicking the link below at footer.
    </div>

    <!--Footer-->
    <?php include "footer.php" ?>
</body>
</html>
