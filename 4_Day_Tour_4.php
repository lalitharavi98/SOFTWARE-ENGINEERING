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
        include "head.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


    <div class="section-title-detailed">

        <div id="single-carousel">
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/1g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/1g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/2g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/2g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/3g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/3g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/4g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/4g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/5g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/5g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/6g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/6g.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/7g.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/7g.jpeg" alt="" class="img-responsive">
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
                        <h2>4 Days Tour #4
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
                                    <a href="bookTour.php?tour=4 Day Tour Package&type=4day"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01(Goa - Arrival)</h3>
                                            <p>As you arrive at Dabolim Airport, Goa our tour representative will assist you in smoother way to the beach resort. Afterwards, you can enjoy adventurous Boat Cruise rise on the turquoise Mandovi River.</p>
                                            <P>Get back to the hotel for dinner and overnight stay at hotel</P>
                                            <p>Relax by the beach</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (North Goa)</h3>
                                            <p>As day starts, get ready. You will be provided with delicious breakfast in the morning. Later, drive towards North Goa. Visit the popular beaches covering Calungate, Dona Paula, Miramar and the Baga Beach. In the end, pay a visit to the historical Fort Aguada and world-class Old Goa Churches.</p>
                                            <p>Overnight stay at Hotel</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 ( South Goa)</h3>
                                            <p>After finishing up breakfast, start your journey towards the idyllic South Goa beaches from North Goa covering Colva Beach. Additionally, you can visit charming Mangeshi and Santa Durga Temples to take blessings.
                                            Return back to hotel for dinner and overnight stay..</p>
                                        </li>
                                        <li>
                                            <h3>Day 04(Goa)</h3>
                                            <p>After breakfast in the morning. Check out from hotel and transferred to International Airport for onward destination with cherished memories of Goa.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/3NV8DhorvrP2"><i
                                                            class="fa fa-check"></i>Goa</a></li>
                                               
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
