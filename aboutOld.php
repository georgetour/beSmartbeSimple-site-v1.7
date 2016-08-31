<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>George Tourtsinakis - Web Designer & Developer</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/aboutCSSAnimationMini.css">
    <link type="text/css" rel="stylesheet" href="stylesheets/customStyle.css">

    <?php include 'head.php' ?>

    <script src="javascript/progressBar.js"></script>

</head>
<body>
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
                <h3 class="bold ">Hi,I'm George Tourtsinakis <span> from Greece.</span> </h3>

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
                        Wed Designer & Developer
                    </figcaption>
                </figure>
            </div>
            <div style="margin-top: 10px" class="col-lg-6  col-md-6 col-sm-12 col-xs-12 ">

                <p>
                    I' am a web designer and developer with many years
                    of experience in IT industry.<br>I also have degrees in Website Development and
                    Information Technology.

                </p>

                <p>
                    I believe websites must be smart and simple.That's why I have chosen
                    this domain name.Smart means that sites must look nice in all devices,
                    easily customizable,scalable and finally
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

    <div class="container "><!--Skill row 3x3-->
    <h3 class="alignCenter bold showEffect7">Some of my key skills include :</h3>

        <!--Left column-->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>

        <!--Middle column-->
        <div class=" col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class=" myProgress floatLeft">
                    <div class=" maxedSkill">HTML5/CSS3</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="eightyPercent">Javascript/jQuery</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="eightyPercent">PHP/MySQL</div>
                </div>



                <div class="myProgress floatLeft">
                    <div class="maxedSkill ">Responsive Web Design</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="eightyPercent">SEO/Adwords/Analytics</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="seventyPercent">Wordpress</div>
                </div>




                <div class="myProgress floatLeft">
                    <div class="eightyPercent">Adobe Photoshop</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="seventyPercent">C#</div>
                </div>
                <div class="myProgress floatLeft">
                    <div class="eightyPercent">Meteor js</div>
                </div>

        </div>

        <!--Right column-->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>


    </div>

    <div class="container alignCenter"><!--Skill row 2x1-->
        <!--Left column-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="myProgress floatLeft" >
            <div class="ninetyPercent">Git</div>
        </div>


        <div class="myProgress floatLeft">
            <div class="maxedSkill">Sass</div>
        </div>
        </div>
        <!--Middle column-->
        <div class="container-fluid col-lg-6 col-md-6 col-sm-12 col-xs-12">


                <div class="myProgress floatLeft" >
                <div class="ninetyPercent">Git</div>
                </div>


                <div class="myProgress floatLeft">
                    <div class="maxedSkill">Sass</div>
                </div>



        </div>

        <!--Right column-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

    </div><!--Skill row 2x1 End -->

    <?php include "footerStatic.php" ?>
</div><!--End about container fluid-->

<script>
    function move() {
        var elem = document.getElementById("myBar");
        var width = 0.8;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
            } else {

            }
        }
    }

    move();

    $('#myBar').animate({width: "90%"}, {queue: false, duration: 3000});




</script>


</body>
</html>




