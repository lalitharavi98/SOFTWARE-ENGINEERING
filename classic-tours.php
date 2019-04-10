<?php
include "database.php";
?>
 
<html lang="en">
<head>

  <?php
        include "head.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


</head>
<body>

<div id="layout">

     <?php
        include "nav.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


    <div class="section-title-01">

        <div class="bg_parallax image_06_parallax"></div>


        <div class="opacy_bg_02">
            <div class="container">
                <h1>Tours</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="main.php">Home</a></li>
                        <li>/</li>
                        <li><a href="tour-list.php">Tours</a></li>
                        <li>/</li>
                        <li>Classic Tour</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <div class="content-central">
        <div class="content_info">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <div class="title-results">
                            <h3></h3>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Splendors of North East<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Brimming with surreal beauty of nature, northeast Indian states draw nature lovers from all over the blue planet to relish its innate beauty in the midst of fascinating tranquility. </p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="Classic_ne_tour.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Classic North India Mini Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>North India is packed full of culture, adventure, history and legend and is a great place for family travel.  .</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="Classic_Mini_Tour.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                        </div>


                        <!--<ul class="pagination">-->
                        <!--<li><a href="#">«</a></li>-->
                        <!--<li class="active"><a href="#">1</a></li>-->
                        <!--<li><a href="#">2</a></li>-->
                        <!--<li><a href="#">3</a></li>-->
                        <!--<li><a href="#">4</a></li>-->
                        <!--<li><a href="#">5</a></li>-->
                        <!--<li><a href="#">»</a></li>-->
                        <!--</ul>-->

                    </div>

                </div>
            </div>
        </div>

    </div>

 <?php
        include "footer.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


</div>


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.1.10.4.min.js"></script>

<script src="js/nav/jquery.sticky.js" type="text/javascript"></script>

<script type="text/javascript" src="js/totop/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/accordion/accordion.js"></script>

<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script src="js/maps/gmap3.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>

<script src="js/carousel/carousel.js"></script>

<script src="js/filters/jquery.isotope.js" type="text/javascript"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/flickr/jflickrfeed.min.js"></script>

<script type="text/javascript" src="js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script>

<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
