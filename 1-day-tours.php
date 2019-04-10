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
                        <li>1 Day Tour</li>
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
                                <div class="info-gallery" >
                                    <h3>
                                        1 Day Tour - Mcleodganj<br>
                                    </h3>
                                    <hr class="separator">
                                    <div class="content-btn"><a href="1_day_tour_m.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        1 Day Tour - Kodaikanal<br>
                                    </h3>
                                    <hr class="separator">
                                    <div class="content-btn"><a href="1_day_tour_kk.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        1 Day Tour - Nainital<br>
                                    </h3>
                                    <hr class="separator">
                                    <div class="content-btn"><a href="1_day_tour_n.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        1 Day Tour - Munnar<br>
                                    </h3>
                                    <hr class="separator">
                                    <div class="content-btn"><a href="1_day_tour_mcl.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        1 Day Tour - Ooty<br>
                                    </h3>
                                    <hr class="separator">
                                    <div class="content-btn"><a href="1_day_tour_o.php" class="btn btn-primary">View Details</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                        </div>

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
