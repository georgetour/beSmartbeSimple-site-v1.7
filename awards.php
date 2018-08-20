<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>beSmartbeSimple - Awards </title>
    <meta name="description" content="George Tourtsinakis awards" >
    <meta name="keywords" content=" best photoshop editing, george tourtsinakis awards,web designer photoshop,photoshop award">
    <meta name="author" content="George Tourtsinakis">
    <style>
      .atlassian-award {
        margin-bottom: 40px;
      }
      .atlassian-award img {
        width: 300px;
      }
      @media and screen(min-width: 480px) {
        .atlassian-award img {
          width:400px;
        }
      }
      .atlassian-award p {
        padding: 20px;
      }
    </style>
    <?php include 'head.php' ?>
    <?php include_once("analyticstracking.php") ?>

    <script>
        //Add footer id dynamic so it responds to page
        $(document).ready(function () {
            $('.footerContainer').attr('id','footerAwards');
        });
    </script>
</head>
<body>

<?php include 'navbar.php'?>

<!--Awards page-->
<div id="showAwards"  class=" textColor">
    <div class="container-fluid">
        <!--First row-->
        <!--Column 1-->
        <div class="row alignCenter showEffect1">
            <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <h4 class="bold">Awards</h4>
            </div>
            <!--Column 2-->
            <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 alignCenter ">
                <h2 class="bold awardsTitle">Atlassian sponsorship</h2>
            </div>
            <!--Column 3-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div></div>
            </div>
        </div>
        <!--End first row-->
        <div class="container-fluid alignCenter atlassian-award showEffect3">
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
            </div>
            <div style="margin-top: 10px" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 alignCenter ">
               <div><img class="img-responsive centerImg" src="images/awards/atlassian-logo-correct.png" alt="Atlassian sponsorship for studies"></div>
               <p style="font-size:1.5em;">I was awarded a sponsorship from Atlassian for my last two months in University for Responsive Website Development and Design Specialization. This sponsorship
                was given only to a few students that had high grades.
               </p>
            </div>
            <div   class=" col-lg-3 col-md-3 col-sm-12 col-xs-12  "></div>
        </div>

        <!--AKMI education photoshop award -->
        <div class="row alignCenter showEffect1">
          <h2 class="bold awardsTitle">Best Photoshop editing by AKMI education</h2>
        </div>
        <!--End first row-->
        <div class="container-fluid awards alignCenter showEffect4">
            <div   class=" col-lg-2 col-md-2 col-sm-12 col-xs-12  ">
            </div>
            <div style="margin-top: 10px" class="col-lg-8  col-md-8 col-sm-12 col-xs-12 alignCenter ">
               <div><img class="img-responsive centerImg" src="images/awards/awardsPhotoshopEditing.jpg" alt="Picture edited with photoshop and awarded"></div>
            </div>
            <div   class=" col-lg-2 col-md-2 col-sm-12 col-xs-12  "></div>
        </div>
        <!--End AKMI education photoshop award -->
    </div>
</div>

<div >
<?php include "footer.php" ?>
</div>
<!--End awards container fluid-->




</body>
</html>
