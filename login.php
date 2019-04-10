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
                    <h1>Login</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>Login</li>
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
                                        LOGIN<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Already have an account??</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="log.php" class="btn btn-primary">LOGIN</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        Sign-up<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>New here!! Click to sign up... </p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="reg.php" class="btn btn-primary">SIGN UP</a></div>
                                    <div class="price"></div>
                                </div>
                            </div>

                             <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info-gallery">
                                    <h3>
                                        LOGIN as ADMIN<br>
                                    </h3>
                                    <hr class="separator">
                                    <p>Login as Admin</p>
                                    <br><hr class="separator">
                                    <div class="content-btn"><a href="admin/login.php" class="btn btn-primary">LOGIN</a></div>
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
