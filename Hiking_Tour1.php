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
                <div class="overlay"><a href="img/Hiking_Tour1/image1.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image3.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image3.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image5.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image5.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image6.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image6.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image9.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image9.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image11.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image11.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image12.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image12.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Hiking_Tour1/image14.jpeg" class="fancybox" rel="gallery"></a>
                </div>
                <img src="img/Hiking_Tour1/image14.jpeg" alt="" class="img-responsive">
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
                        <h2>Hampta Pass with Chandratal Trek
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
                                    <a href="bookTour.php?tour=Hiking Sri Lanka Tour Package&type=HSL"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Overview</h3>
                                            <p>Among the list of treks that Himachal Pradesh takes pride in, Hampta Pass somehow seizes the limelight. Sitting at an altitude of 4270 m, this pass on the Pir Panjal range gives its travelers just the right mix of wooded stretches, alpine meadows, shimmering streams, and glaciers. Hampta pass is generally known as a small corridor between Lahaul's Chandra Valley and lush Kullu valley of Himachal Pradesh. The trek is moderate in nature and can be enjoyed by beginners who are looking for a quick getaway.</p>
                                        </li>
                                        <li>
                                            <h3>Manali to Jobri to Chikka (3,140m)</h3>
                                            <p>Upon your arrival at Manali, our tour guide will meet you at the bus stand and escort you to the hotel. Here you can freshen up and relish your morning meal. After that, you will be leaving for Jobri nullah by taxi. The actual trek will begin from Alain Duhangan Hydel Power Project site. Lunch is planned on the way. After walking for a while you will cross a wooden bridge towards the night camping site at Chikka and will sight the Rani nullah. The camping site is set amid the scenic beauty of alpine meadow.</p>
                                        </li>
                                        <li>
                                            <h3>Shea Goru to Chhatru</h3>
                                            <p>On day 4, you will be crossing the river to turn right and continue your journey. You have to cross the river to arrive at the left bank of River Chandra which springs from the Bara Shigri glacier. From the left embankment, the way to Chhatru is straight walk on flatland. On your way, relish the beauty of nature and in no time you will reach Chhatru. From here we will be taking a taxi to Chandratal (2-3 hours), the moon shaped lake close to the quaint town of Batal. After spending some time here, we will be leaving for Chhatru.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/brrpdmif2mH2"><i
                                                            class="fa fa-check"></i>Manali</a></li>
                                            </ul>
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
