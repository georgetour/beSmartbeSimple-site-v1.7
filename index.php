<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I create the future websites. </title>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">   </script>
    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
          <a id="mainPage" class="navbar-brand" href="#mainPage"><img class="logo" src="images/whitelogo.png"></a>
       </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class=" nav navbar-nav">
                    <li><a id="services" href="#services">Services</a></li>
                    <li><a id="portfolio" href="#portfolio">Portfolio</a></li>
                    <li><a id="awards" href="#awards">Awards</a></li>
                    <li><a id="about" href="#about">About</a></li>
                    <li><a id="contactUs" href="#contactUs">Contact</a></li>
                </ul>
        </div>

</div>

</div><!--End Top menu bar-->



<div id="showMainPage"  >

<div class="iframeGrid alignCenter "><!--Grid for centering the iframe -->

    <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12 weCreate alignCenter">
    <h1  class="weCreate">I create the future web sites.</h1>
    </div>
    <div class="col-lg-6  col-md-6 col-sm-12  alignCenter everything">
        <div class="phoneDiv ">
        <img class="iphone" src="images/iphonewithImage2.png">

        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "></div>


</div><!--End Grid for centering the iframe -->

    <!--footer-->
    <?php include "footer.php" ?>
</div><!--End mainPage container fluid-->

<!--Services page-->
<div id="showServices" class=" textColor">

    <div class="servicesRow">
    <!--First row-->
    <div class=" alignCenter">
        <!--Column 1-->
        <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <h4 class="bold " >Services</h4>
        </div>

        <!--Column 2-->
        <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12  everything ">
            <h3 class="bold">I create the future web sites.</h3>

            <h4 class=" bold">Smart</h4>
        </div>
        <!--Column 3-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div></div>
        </div>
    </div>
    <!--End first row-->

    <!--Second row-->
    <div class="container-fluid alignCenter ">
        <!--Column 1-->
        <div   class=" pictures everything col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <p>Your site will look awesome in all devices and browsers.</p>
            <br>
            <div class=" "><img class="img-responsive picturesIcons" src="images/Responsive-Web-Design-compressor.png"></div>
        </div>

        <!--Column 2-->
        <div class="pictures col-lg-6  col-md-6 col-sm-12 col-xs-12  everything ">
            <p>It will be ultra fast since I use Cloud Private Servers.</p>
            <br>
            <div ><img class="img-responsive picturesIcons" src="images/Cloud_computing.png"></div>

        </div>
        <!--Column 3-->
        <div class="pictures col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <p>Search engines will find it.<br>
                People will find it.
            </p>
            <div ><img class="img-responsive picturesIcons2" src="images/Search_engine_optimization_copy-compressor.png"></div>
        </div>
    </div>
    <!--End second row-->


    <!--First row-->
    <div class="container-fluid alignCenter">
        <!--Column 1-->
        <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <h4 class="bold " ></h4>
        </div>

        <!--Column 2-->
        <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12  everything ">


            <h3 class=" bold">Simple</h3>
        </div>
        <!--Column 3-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div></div>
        </div>
    </div>
    <!--End first row-->

    <!--Second row-->
    <div class="container-fluid alignCenter ">
        <!--Column 1-->
        <div   class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <p class="imagesShadows">Your visitors don't like complicated things.They want to know what your site does
                and find it easily.
            </p>

        </div>

        <!--Column 2-->
        <div class=" col-lg-6  col-md-6 col-sm-12 col-xs-12   ">
            <h2 class="bold">Simple means Beautiful</h2>
            <h2 class="bold">Simple means Powerful</h2>
            <h2 class="bold">Simple means fast</h2>
            <br>


        </div>
        <!--Column 3-->
        <div class="imagesShadows col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <p>I keep everything simple as possible and with minor clicks people will navigate
                and enjoy your site.

            </p>
        </div>
    </div>
    <!--End second row-->
    </div>
    <!--footer-->
    <?php include "footerStatic.php" ?>

</div><!--End services page -->

<!--Awards page-->
<div id="showAwards"  class=" textColor">
    <div class="container-fluid">
        <!--First row-->
        <!--Column 1-->
        <div class="row alignCenter">
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
                <h4 class="bold " >Awards</h4>
            </div>

            <!--Column 2-->
            <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 alignCenter ">
                <h2 class="bold">Best Photoshop editing by IEK AKMI</h2>

            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->

        <div class="container-fluid awards alignCenter">
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">

            </div>
            <div style="margin-top: 10px" class="col-lg-6  col-md-6 col-sm-12 col-xs-12 ">
               <img class="img-responsive" src="images/awards/awardsPhotoshopEditing.jpg">
            </div>
            <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  "></div>
        </div>
    </div>
    <?php include "footerStatic.php" ?>
</div>
<!--End awards container fluid-->



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
                <a href="#">Find it here</a>
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

                <a href="#">Find it here</a>
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
            <h4 class="bold">Dungeon and Dragons characters in campaign application</h4>
            <p> This is an application for Dungeons and Dragons
                that shows live characters in campaign with info.
                Adding some features and soon will be published.


            </p>
            <img class="img-responsive imagesShadows phonePortfolio" src="images/portfolio/d_and_app_trimmed.png">
        </div>

    </div><!--Forth Row End-->
</div>
    <?php include "footerPortfolio.php" ?>


</div><!--End container portfolio page -->

<!--About-->
<div id="showAbout"  class=" textColor">
    <div class="container-fluid">
    <!--First row-->
        <!--Column 1-->
    <div class="row alignCenter">
        <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <h4 class="bold " >About</h4>
        </div>

        <!--Column 2-->
        <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 alignCenter ">
            <h2 class="bold">All websites must be smart and simple.</h2>

        </div>
        <!--Column 3-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div></div>
        </div>
</div>
    <!--End first row-->

    <div class="container-fluid aboutMain alignCenter">
        <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            <figure class="aboutImg">
                <img class="aboutImg img-responsive alignCenter" src="images/about/me_smiling-compressor.jpg" alt="George Tourtsinakis developer">
                <figcaption class="  alignCenter">George Tourtsinakis
                    <br>
                    Developer
                </figcaption>
            </figure>
        </div>
        <div style="margin-top: 10px" class="col-lg-6  col-md-6 col-sm-12 col-xs-12 ">
            <p>
                Hi,I'm George Tourtsinakis .
            </p>
            <p>
                I'am a web developer with many years
                of experience in IT industry and I love making sites.
            </p>

            <p>
                I believe internet sites must be smart and simple.That's why I have chosen
                this domain name.Smart means that sites must look nice in all devices,
                easily customizable ,scalable and finally
                search engine optimized.

            </p>

            <p>
                Users don't like complicated things neither do I.
                The visitor must understand what your site does and find it easily.
            </p>
            <p>
                Making a site simple means it will be Beautiful,Powerful and Fast.
            </p>

        </div>
        <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  "></div>
    </div>
    </div>
    <?php include "footerStatic.php" ?>
</div><!--End about container fluid-->


<!--Contact Page-->
<div id="showContactUs" class=" textColor">
    <div class="container-fluid">
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

    </div>
    <?php include "footerStatic.php" ?>

</div><!--End contact  container -->




</body>
</html>