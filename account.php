    <?php
    include "database.php";
?>

<html lang="en">
<head>

    <?php
        include "head.php";
       
    ?>

</head>
<body>

<div id="layout">

  <?php
        include "nav.php";
        
    ?>



    <div class="section-title-02">
        <div class="bg_parallax image_05_parallax"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>My Account</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-central">

        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>


        <!--<div id="map"></div>-->


        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">

                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                             <div class="row">

                            

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        My Profile<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>View Profile</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="profile.php" class="btn btn-primary">PROFILE</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        My Bookings<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>View your recent bookings</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="bookings.php" class="btn btn-primary">BOOKINGS</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Design your Tour<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Tell us your preferences and we'll design a dream tour for you</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="bookTour.php" class="btn btn-primary">DESIGN A TOUR</a></div>
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
       
    ?>

</div>



</body>
</html>
