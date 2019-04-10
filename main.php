<?php  ?>
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

<div class="preloader">
    <div class="status">&nbsp;</div>
</div>

<div id="layout">

    <?php
        include "nav.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


    <section class="tp-banner-container">

        <div class="tp-banner">

            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_12.jpg" alt="fullslide1" data-bgposition="left center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_13.jpg" alt="fullslide1" data-bgposition="center center"
                         data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_14.jpg" alt="fullslide1" data-bgposition="top center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_15.jpg" alt="fullslide1" data-bgposition="right center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_16.jpg" alt="fullslide1" data-bgposition="left center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_1.jpg" alt="fullslide1" data-bgposition="center center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_2.JPG" alt="fullslide1" data-bgposition="top center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_3.jpg" alt="fullslide1" data-bgposition="right center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_4.jpg" alt="fullslide1" data-bgposition="left center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_5.jpg" alt="fullslide1" data-bgposition="center center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_6.jpg" alt="fullslide1" data-bgposition="top center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_7.jpg" alt="fullslide1" data-bgposition="right center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_8.jpg" alt="fullslide1" data-bgposition="left center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_9.jpg" alt="fullslide1" data-bgposition="center center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_10.jpg" alt="fullslide1" data-bgposition="top center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">

                    <img src="img/bg/image_11.jpg" alt="fullslide1" data-bgposition="right center" data-kenburns="on"
                         data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                         data-bgpositionend="right center">

                </li>

                
            </ul>

            <div class="tp-bannertimer"></div>
        </div>


        <div class="filter-title top-40">

            <div class="title-header">
                <h1>Travel With Your Dreams</h1>
                <p class="lead">We are Corners Of India. We provide you best travel agency service in India.<br>
                    <strong>Let's travel with us</strong></p>
            </div>

        </div>

    </section>


    <section class="content-central">

        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>

        <!--About-->
        <div class="content_info">
            <div class="content_resalt">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>
                                    WELCOME TO <br> CORNERS OF INDIA
                                </h2>
                                <p>Corners of India is a professional tour operator in the magical paradise India and
                                    this is your one stop travel shop to find, choose and book the best travel packages
                                    India has to offer. If you were looking for a holiday in India, Actually we
                                    have the perfect agenda for you. We will present you with your dream tour package to meet
                                    your budget and expectations.</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <img src="img/slide/ab.jpg" align="center">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Why us-->
        <div class="content_info">

            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>¿</span>Why you should select <span>us </span>as the <span>traveling partner </span>
                            of you <span>?</span></h2>
                        <i class="fa fa-globe"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-thumbs-o-up left-icon"></i>
                                    <i class="fa fa-heart right-icon"></i>
                                </div>
                                <br>
                                <span>Our main objective is making our customers happy and satisfies</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-thumbs-o-up left-icon"></i>
                                    <i class="fa fa-heart right-icon"></i>
                                </div>
                                <br>
                                <span>We provide very friendly customer service</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-info left-icon"></i>
                                    <i class="fa fa-asterisk right-icon"></i>
                                </div>
                                <br>
                                <span>You have the opportunity to have good knowledge about every place which you visit from our members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-calendar-o left-icon"></i>
                                    <i class="fa fa-clock-o right-icon"></i>
                                </div>
                                <br>
                                <span>The time which you hope to spend at the place which you visit depend on your interest. Not on the tour schedules</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-smile-o left-icon"></i>
                                    <i class="fa fa-heart right-icon"></i>
                                </div>
                                <br>
                                <span>We will try our best to give you a marvelous traveling experience in India</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-suitcase left-icon"></i>
                                    <i class="fa fa-bed right-icon"></i>
                                </div>
                                <br>
                                <span>We plan the tour schedules according to your interest and ensure about the safety and convenience of yours</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-smile-o left-icon"></i>
                                    <i class="fa fa-smile-o right-icon"></i>
                                </div>
                                <br>
                                <span>We provide best service to the customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="item-feature text-center">
                            <div class="head-feature">
                                <div class="title-feature">
                                    <i class="fa fa-thumbs-o-up left-icon"></i>
                                    <i class="fa fa-smile-o right-icon"></i>
                                </div>
                                <br>
                                <span>We give adorable traveling experience to you</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content_info">

            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2>The <span>Popular</span> Tours </h2>
                        <i class="fa fa-bicycle"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>


            <div class="content-boxes">

                
                <div class="item-boxed">
                    <div class="image-boxed">
                        <span class="overlay"></span>
                        <img src="img/hotel_list/h.jpg" alt="Hiking Sri Lanka"
                             style="cursor: default;">
                    </div>
                    <div class="info-boxed boxed-top">
                        <h3>
                            Hiking<br>
                            <hr class="separator">
                            <span>India is blessed with various terrains and a lot of them let you take a hike..</span>
                        </h3>
                    </div>
                </div>



                <div class="item-boxed">
                    <div class="image-boxed">
                        <span class="overlay"></span>
                        <img src="img/hotel_list/nit.jpg" alt="North India Tour"
                             style="cursor: default;">
                    </div>
                    <div class="info-boxed boxed-top">
                        <h3>
                            North India Tour<br>
                            <hr class="separator">
                            <span>North India has hept the footprints of its past intact.</span>
                        </h3>
                    </div>
                </div>

                <div class="item-boxed">
                    <div class="info-boxed boxed-bottom">
                        <h3>
                            Classic Mini tour<br>
                            <hr class="separator">
                            <span>Situated in South Asia, India is a country with deep cultural roots and a rich heritage.</span>
                        </h3>
                    </div>
                    <div class="image-boxed image-bottom">
                        <span class="overlay"></span>
                        <img src="img/hotel_list/c.jpg" alt="Classic Mini Tour"
                             style="cursor: default;">
                    </div>
                </div>


                <div class="item-boxed">
                    <div class="info-boxed boxed-bottom">
                        <h3>
                            7 Days Tours<br>
                            <hr class="separator">
                            <span>Perfect tours for a week get-away with family</span>
                        </h3>
                    </div>
                    <div class="image-boxed image-bottom">
                        <span class="overlay"></span>
                        <img src="img/hotel_list/7d.jpg" alt="7 Days Tours"
                             style="cursor: default;">
                    </div>
                </div>


                




                


            </div>

        </div>


    </section>

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


<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 1170,
            startheight: 970,
            minHeight: 500,
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "preview1"
        });
    }); //ready
</script>

</body>
</html>