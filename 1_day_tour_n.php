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
                <div class="overlay"><a href="img/1_day_tours/n1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/n1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/kk2.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/n2.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/n3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/n3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/n4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/n4.jpg" alt="" class="img-responsive">
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
                        <h2>1 Day Tour - Nainital
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
                                    <a href="bookTour.php?tour=1 Day Tour - Sigiriya&type=1day"><i
                                            class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>1 day tour to Nainital</h3>
                                            <h5>"Misty lakes and mountains"</h5>
                                            <p>
                                                One of the most beautiful tourist destinations in Uttarakhand, Nainital, which is nestled amidst the Kumaon Hills, is a quaint hill station built around a uniquely shaped lake known as the 'Naini Lake' (thus contributing to its name Nainital). Also famously known as 'City of Lakes,' Nainital abounds in natural beauty, with its snow-capped hills and tranquil lakes lending it a nostalgic charm of its own. Situated at an altitude of 1938 km above sea level, Nainital has a pleasant climate all year round, and can rightfully be called a picturesque paradise for all travel lovers.
                                            </p>
                                            <p>
                                                Whether you're going for the weather, the lakes, the adventure, the food, or even the shopping, Nainital has something for every tourist.  The Naini Lake flows through the heart of the city and is a popular spot for various activities such as paddle boating and row boating. Other lakes that you can visit are the Sariyatal Lake, Bhimtal Lake, and Khurpatal Lake. Even if you don’t want to go on a boat ride, you can simply take a walk along the promenade on the banks, and you will still be able to enjoy the ethereal beauty of the lakes. Owing to its gorgeous landscape, Nainital has quite a few hilltops that offer extraordinary vistas of the city and its surrounding regions to visitors. These include Naina Peak, Tiffin Top, and Snow View Point, all of which are very popular tourist spots.
                                            </p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/pYVJY5dP63L2"><i
                                                            class="fa fa-check"></i>Nainital</a></li>
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
