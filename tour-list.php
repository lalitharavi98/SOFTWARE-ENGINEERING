<?php 
include "database.php";?>
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

        <div class="bg_parallax image_05_parallax"></div>


        <div class="opacy_bg_02">
            <div class="container">
                <h1>Tours</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="main.php">Home</a></li>
                        <li>/</li>
                        <li>Tours</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <div class="content-central">

        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>


        <div class="content_info">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <div class="title-results">
                            <h3></h3>
                        </div>


                        <div class="row">

                            

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/h.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        Hiking in India<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>India is blessed with various terrains and a lot of them let you take a hike..</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="hiking-tours.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/c.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        Classic Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Situated in South Asia, India is a country with deep cultural roots and a rich heritage. </p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="classic-tours.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/1d.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        1 Day Tours<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Short and Sweet one day tours.</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="1-day-tours.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" padding="200">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/3d.jpg" height="5" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        3 Day Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Perfect tours for a perfect weekend.</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="3_Day_tour.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/nit.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        North India Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>North India has hept the footprints of its past intact.</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="North-india-tour.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>

                            </div>
                             <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/7d.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        7 Day Tour <br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Perfect tours for a week get-away with family.</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="7-day-tours.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                           

                             <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                    <img src="img/hotel_list/10d.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        10 Day Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>10 day tours for a memorable holiday.</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="10_Day_Tour.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                           

                             <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="img-hover">
                                </div>
                                <div class="info-gallery">
                                    <hr class="separator">
                                    <br><hr class="separator">
                                    <div class="price"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

 <?php
        include "head.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


</div>
 <?php
        include "footer.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>

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