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
                            <li><a href="admin_view.php">View Bookings</a></li>
                            <li>/</li>
                            <li>Date</li>
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
                            <form id="formBooking" class="form-theme" action="admin_view_pbooking.php" method="POST">
                              
								<table border=0 align="center">
                                    <tr>
                                         <label for="DateOfArrival">Date of Arrival*</label>
                                        <input id="DateOfArrival" class="form-control" type="date" name="DateOfArrival" placeholder="Date Of Arrival"
                                       required>
                                    </tr>
                                   
									<tr>
										<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" name="btnsubmit" class="btn btn-primary"></td>

									</tr>
								</table>
	
                            </form>
                            
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
