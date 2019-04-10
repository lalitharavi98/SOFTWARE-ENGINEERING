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
                    <h1>VIEW BOOKINGS</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>View Bookings</li>
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

                        <div class="col-md-3"></div>

                        <div class="col-md-8">
                             <div class="row">

                            

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Packages<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>View Bookings Based On Package</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="admin_view_p.php" class="btn btn-primary">PACKAGES</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Date<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>View All booking based on Date</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="admin_view_d.php" class="btn btn-primary">DATE</a></div>
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
