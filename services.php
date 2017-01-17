<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>beSmartbeSimple - Web Design and Development  </title>
        <meta name="description" content="I built smart websites with beautiful simple design.Contact me for a free quote." >
        <meta name="keywords" content="besmarbesimple,be smart be simple,web design,web designer,web developer,web page design,web design services,smart website,simple designs,creative web design,affordable web design,
        search engine optimizaion,user friendly sites,wordpress websites,fast site,responsive,easy to navigate,responsive web design,responsive web development,simple website">
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

<body>

  <?php include 'navbar.php'?>

<!--Services page-->
<div id="showServices" class=" textColor">

    <div class="servicesRow showEffect1">
        <!--First row-->
        <div class=" alignCenter container-fluid">
            <!--Column 1-->
            <div   class="everything col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
                <h4 class="bold " >Services</h4>
            </div>

            <!--Column 2-->
            <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12  everything ">
                <h3 class="bold">I can make small to medium websites for you or your company.
                </h3>

                <h4 class="yourSiteWillBe bold">Your site will be :</h4>
            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">

            </div>
            
        </div>
        <!--End first row-->




        <!--Second row-->
        <div class="container  showEffect2  ">

            <div class="text-center servicesTags">Responsive , Ultra Fast</div>
            <div class="text-center servicesTags">Search Engine Optimized , Easy to Navigate</div>
            <div class="text-center servicesTags">Customizable</div>

            <!--Speed Row-->
            <div class="row imageRowServices alignCenter ">

                <div class=" col-lg-12  col-md-12  col-sm-12 col-xs-12  borderTest">
                    <h3>Speed, Speed, Speed ! </h3>
                    <div class=""> <img alt="Compass" class="img-responsive  " src="images/services/speed-babe-compressor.jpg">  </div>
                    <h4 class="bold"><a href="http://www.bitcatcha.com/my-report/?r=MTIwMjQyMzg=" target="_blank">Numbers don't lie</a></h4>
                    <p>You will have  one of the worlds fastest sites. Google wants that, your visitors want that, YOU want that. I use the best
                        techniques and technologies available to make that possible.
                    </p>

                </div>
            </div><!--End speed row-->

            <div class="row imageRowServices alignCenter ">
                <!--Left column-->
                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12  borderTest outsideHeight">
                    <h3>It will look awesome in all devices and browsers</h3>
                    <div class=""><img alt="Responsive Web Design Picture"  class="img-responsive picturesIcons "  src="images/Responsive-Web-Design-compressor.png">  </div>
                <h4 class="bold">Using Twitter Bootstrap</h4>
                <p>One of the most popular tools used by thousands  developers
                    so you can make responsive websites .As more and more people use internet
                    from their mobiles your site must work flawlessly  everywhere.
                </p>
                </div>

                <!--Middle Column-->
                <div class=" col-lg-4  col-md-4 col-sm-12 col-xs-12  borderTest outsideHeight">
                    <h3>Simple navigation.No need for compass </h3>
                    <div class=""> <img alt="Compass" class="img-responsive picturesIcons " src="images/old_compass2.png">  </div>

                    <h4 class="bold">User friendly priority</h4>
                    <p>Your visitors don't like complicated things.
                        They want to know what your site does and find it easily.
                        I keep everything simple as possible. With minor clicks people will explore
                        and enjoy your site.
                    </p>

                </div>
                
                <!--Right Column-->
                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12  borderTest outsideHeight">
                    <h3>Google will find it, people will find it.</h3>
                    <div class=""><img alt="Search Engine Optimization"  class="img-responsive picturesIcons "  src="images/Search_engine_optimization_copy-compressor.png">  </div>
                    <h4 class="bold">SEO</h4>
                    <p>If you want your website to rank as  high as possible to search engines for future visitors or customers,
                        then you need Search Engine Optimization.A lot of factors take place
                        and we will have really good results .
                    </p>
                </div>
            </div>

        </div><!--End second row-->
        <!--Third row-->
            <div class="container showEffect3" >
                <div class="row imageRowServices alignCenter ">

                    <!--Left column-->
                    <div class="col-lg-6 col-md-6  col-md-12 col-sm-12 col-xs-12 borderTest outsideHeight ">
                        <h3>Custom Wordpress themes</h3>
                        <div class=""><img alt="Wordpress logo" class="img-responsive picturesIcons " src="images/wordpressLogo.png">  </div>
                        <h4 class="bold">1/3 of world sites use Wordpress</h4>
                        <p>Wordpress is a very powerful Custom Management System that will give you the ability
                            to dynamically add content to your site and update it without any programming.


                        </p>
                    </div>

                    <!--Right Column-->
                    <div class="col-lg-6 col-md-6  col-md-12 col-sm-12 col-xs-12 borderTest outsideHeight">
                        <h3>High uptime with Cloud Private Hosting </h3>
                        <div class=""><img alt="Cloud Computing"  class="img-responsive picturesIcons " src="images/Cloud_computing.png">  </div>
                        <h4 class="bold">Cloud Virtual Private Server</h4>
                        <p>The power of a cloud Virtual Private Server will host your site.
                            That means that your site will NOT drop or disappoint anyone with its speed and availability.

                        </p><br>
                    </div>
                </div>

            </div>
       
  </div>
</div>

    <!--footer-->
    <?php include "footer.php" ?>
    

</body>
</html>
