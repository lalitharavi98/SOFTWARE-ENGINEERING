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



    <div class="section-title-detailed">

        <div id="single-carousel">
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour2/image1.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour2/image1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour2/image13.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour2/image13.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour2/image5.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour2/image5.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour2/image16.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour2/image16.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour2/image9.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour2/image9.jpeg" alt="" class="img-responsive">
            </div>
        </div>


        <div class="title-detailed">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="starts">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                        </ul>
                        <h2>Talley Valley Trekking
                            <span></span>
                        </h2>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content-central">

        <div class="content_info">

            <div class="content_resalt paddings-mini tabs-detailed">
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#plan" data-toggle="tab"><i class="fa fa-bicycle"></i> TOUR PLAN</a>
                                </li>
                                <li>
                                    <a href="#destinations" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                        Destinations</a>
                                </li>
                                <li class="pull-right">
                                    <a href="bookTour.php?tour=Hiking Sri Lanka Knuckles Package&type=HSL"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Delhi – Tezpur</h3>
                                            <p>Start from Delhi and upon reaching Guwahati, meet our representative who’ll arrange a smooth transfer for you to Tezpur .Spend overnight at the hotel in Tezpur.</p>
                                        </li>
                                        <li>
                                            <h3>Tezpur – ziro</h3>
                                            <p>Next morning start for Ziro . Stop midway to visit Itanagar, the capital of the Arunachal Pradesh. Visit the major tourist attractions of the city including gonpa, museum and some other historical place. After lunch resume your drive to  Ziro. Spend night relaxing at a hotel in Ziro.</p>
                                        </li>
                                        <li>
                                            <h3>Daporijo – Along</h3>
                                            <p>Take an early breakfast, before leaving for Along. On the way visit  Adi tribal village and Tagin tribal village. Explore the houses built by them on the stone without using the nail. Halt for the night at the hotel in Along..</p>
                                            <ul>
                                                <li>Lunch at the camp</li>
                                                <li>Evening game drive</li>
                                                <li>BBQ Dinner and overnight stay at the camp</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h3> Dibrugarh – Delhi</h3>
                                            <p>After breakfast , transfer to Airport to catch a flight towards Delhi for your onward destination.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/hD37PBVb5by"><i
                                                            class="fa fa-check"></i>Delhi</a></li>
                                            </ul>
                                        </div>                                    </div>
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
