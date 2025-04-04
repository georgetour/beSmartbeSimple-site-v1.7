<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>George Tourtsinakis - Software Engineer & Architect</title>
    <meta name="description" content="George Tourtsinakis a web designer and developer with many years of experience in IT industry." >
    <meta name="keywords" content=" developer skills,web developer key skills,george tourtsinakis, designer skills,george tourtsinakis skills,responsive web design,fast sites,responsive,easy to navigate,responsive web design,responsive web developement,front end developer,full stack developer,front end skills,front end key skills,">
    <meta name="author" content="George Tourtsinakis">
    <link type="text/css" rel="stylesheet" href="stylesheets/aboutCSSAnimationMini.css">

    <?php include 'head.php'?>

    <script defer src="javascript/progressBar.js"></script>
    <?php include_once("analyticstracking.php") ?>
    <script>
        //Add footer id dynamic so it responds to page
        $(document).ready(function () {
            $('.footerContainer').attr('id','footerAbout');
        });
    </script>
    <style>.maxedSkill, .eightyPercent, .ninetyPercent, .seventyPercent, .eightyFivePercent{padding:5px;}</style>
</head>
<body >
<?php include 'navbar.php'?>

<!--About-->
<div id="showAbout"  class=" textColor">
    <div class="container-fluid ">
        <!--First row-->
        <!--Column 1-->
        <div class="row alignCenter">
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
                <h4 class="bold " >About</h4>
            </div>

            <!--Column 2-->
            <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 alignCenter  typeAnimation">
                <h3 class="bold ">Hi, I'm George Tourtsinakis <span> from Greece.</span> </h3>

            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->

        <div class="container-fluid aboutMain alignCenter showEffect6">
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
                <figure class="aboutImg">
                    <img class="aboutImg img-responsive alignCenter" src="images/about/me_smiling-compressor.jpg" alt="George Tourtsinakis developer">
                    <figcaption class="  alignCenter">George Tourtsinakis
                        <br>
                        Senior Software Engineer and Architect
                    </figcaption>
                </figure>
            </div>
            <div style="margin-top: 10px" class="col-lg-6  col-md-6 col-sm-12 col-xs-12 ">

                <p>
                    I' am a software engineer and architect with many years
                    of experience in IT industry.<br>I also have degrees in Website Development and
                    Software Engineering.

                </p>

                <p>
                    I believe websites and applications must be smart and simple. That's why I have chosen
                    this domain name. Smart means that either we have a website or an application it must be secure, look nice in all devices, easily customizable, scalable and fast.

                </p>

                <p>
                    Users don't like complicated things, neither do I. Users must find anything and do things easily. Either being a webisite either an application.
                </p>
                <p>
                    Simple == Beautiful, Powerful and Fast.
                </p>

            </div>
            <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  "></div>
        </div>
    </div>

 

    <div style="margin-top: 10px" class="container-fluid">
    <div class="findMeAlso alignCenter">Find me also at
        <a style="margin-right: 10px" href="https://gr.linkedin.com/in/george-tourtsinakis" target="_blank"><img src="images/about/linked-in-icon2.png" alt="Find me at linkedin"></a>
        <a  href="https://github.com/georgetour" target="_blank"><img src="images/about/GitHub-Mark.png" alt="Find me at github"></a>
    </div>
    </div>

    <?php include "footer.php" ?>

</div><!--End about container fluid-->



</body>
</html>




