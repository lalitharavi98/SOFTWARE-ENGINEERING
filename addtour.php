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



    <div class="section-title-02">
         <div class="bg_parallax image_05_parallax"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Booking</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>Add Packages</li>
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
                            <h1 style="color: #0056b3;">Design A New Travel Package..</h1>
                            <form id="formBooking" class="form-theme" action="" method="post">
                
                                <label for="package">Please Enter Tour Package Name</label>
                                 <select class="form-control" required name="pack" id="pack">
                                    <option selected disabled></option>
                                    <option>Hiking in India</option>
                                    <option>Classic Tour</option>
                                    <option>1 Day Tours</option>
                                    <option>7 Day Tour</option>
                                    <option>3 Day Tour</option>
                                     <option>10 Day Tour</option>
                                      <option>North India Tour</option>
                                </select><br> 
                                <label for="Location">Enter the Location Name:</label>
                                <input type="text" name="location" required> 
                                
                                <input type="submit" name="submit" value="Send Tour Plan" class="btn btn-primary">
                            </form>

                            <?php
                                $mail=$_SESSION["email"];
                                if(isset($_POST["submit"]))
                                {
                                     echo "<div class='alert alert-success' role='alert'><font size='5px'>Request Sent to Developer</font></div>";
                                   
                                }
                                
                                ?>


                            <div id="result">
                                <div id="booking_error" hidden class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> Tour Plan sending failed. Please try again.
                                </div>
                                <div id="booking_success" hidden class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Tour Plan was successfully sent to the designer...
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



</body>
</html>
