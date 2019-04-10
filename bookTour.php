

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

<?php 


if(!isset($_SESSION['email']))
{
    echo("<script>location.href ='login.php';</script>");

}
if(!empty($_GET['tour']) and !empty($_GET['type']))
{
    $mail=$_SESSION["email"];
    $tour = $_GET['tour'];
    $type = $_GET['type'];
}
else
{
    $tour="";
    $type="";
}


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
                            <li><a href="account.php">My Account</a></li>
                            <li>/</li>
                            <li>Booking</li>
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
                            <h2>Design your own tour to India</h2>
                            <p>Design your own dream tour to India with Corners of India..!</p>
                            <p>Let us know what type of Holiday tour and accommodation you would prefer. Tell us</p>
                            <p>What you like to do, what you like to see during Your Holiday. Our Traval experts will
                                get back to you within 24 hours and help you to design you dream tour to India.</p>
                            <p>Fill The Below form and submit. Do provide maximum information which you are able to
                                provide.</p>
                            <form id="formBooking" class="form-theme" action="" method="post">
                                <h3>Tour Details</h3>
                                <label for="DateOfArrival">Date of Arrival*</label>
                                <input id="DateOfArrival" class="form-control" type="date" name="DateOfArrival"
                                       required>
                                <label for="DateOfDeparture">Date of Departure*</label>
                                <input class="form-control" type="date" name="DateOfDeparture" id="DateOfDeparture"
                                       required>
                                <h4>Number of guests</h4>
                                <label for="Adults">Adults*</label>
                                <input class="form-control" type="number" name="Adults" id="Adults" required>
                                <?php if ($type != 'honeymoon') { ?>
                                    <label for="Children612">Children (06 – 12 Years)</label>
                                    <input class="form-control" type="number" name="Children612" id="Children612">
                                    <label for="Children5">Children (below 05 Years)</label>
                                    <input class="form-control" type="number" name="Children5" id="Children5">
                                <?php } ?>
                                <label for="roomCount">Number of rooms required*</label>
                                <input class="form-control" type="number" name="roomCount" id="roomCount" required>
                                <hr>
                                <h4>To Design a tour</h4>
                                <label for="package">Please Enter Tour Package Name (optional)</label>
                                <input type="text" name="package" id="package" value="<?php echo $tour ?>">
                                <label for="kind">What kind of Holiday does You Prefer in Sri Lanka*</label>
                                <select class="form-control" required name="kind" id="kind">
                                    <option selected disabled></option>
                                    <option>Wild, Adventurous and Hiking</option>
                                    <option>Fun and Exciting</option>
                                    <option>Romantic and Sensuous</option>
                                    <option>Thought provoking and Peaceful</option>
                                    <option>Healthy and Rejuvenating</option>
                                </select><br>
                                <label for="see">What would you like to see in your Holiday?*</label>
                                <select class="form-control" required name="see" id="see">
                                    <option selected disabled></option>
                                    <option>Mountains & Waterfalls</option>
                                    <option>Beaches</option>
                                    <option>Archeological Sites</option>
                                    <option>Wildlife</option>
                                    <option>Flora and Fauna</option>
                                </select><br>
                                <label for="facility">What is the most important Facility which you hope?*</label>
                                <select class="form-control" required name="facility" id="facility">
                                    <option selected disabled></option>
                                    <option>Comfortable Accommodation Facility</option>
                                    <option>Communication</option>
                                    <option>Excellent Foods</option>
                                    <option>Transportation</option>
                                    <option>Guide Assistance</option>
                                </select><br>
                                <label for="accommodation">What Kind of Accommodation pleases you?*</label>
                                <select class="form-control" required name="accommodation" id="accommodation">
                                    <option selected disabled></option>
                                    <option>Budget Guesthouses</option>
                                    <option>2-3 Star hotels</option>
                                    <option>4-5 Star Hotels</option>
                                </select><br>
                                <label for="requests">If you have any Special Requests</label>
                                <textarea name="requests" id="requests"></textarea>
                                <hr>
                               
                                
                                <input type="submit" name="Submit" value="Send Tour Plan" class="btn btn-primary">
                            </form>

                            <?php
                                $mail=$_SESSION["email"];
                                if( !empty($_POST['DateOfArrival']) and !empty($_POST['DateOfDeparture']) and !empty($_POST['Adults']) and !empty($_POST['roomCount']) and !empty($_POST['kind']) and !empty($_POST['see'])
                                    and !empty($_POST['facility']) and !empty($_POST['accommodation']))
                                {
                                    $var = $_POST['DateOfArrival'];
                                    $date = str_replace('/', '-', $var);
                                    $DateOfArrival= date('Y-m-d', strtotime($date));

                                    $var1 = $_POST['DateOfDeparture'];
                                    $date1 = str_replace('/', '-', $var1);
                                    $DateOfDeparture= date('Y-m-d', strtotime($date1));

                                    // $DateOfArrival = $_POST['DateOfArrival'];
                                    // $DateOfDeparture = $_POST['DateOfDeparture'];
                                    $Adults = $_POST['Adults'];
                                    $Children612 = $_POST['Children612'];
                                    $Children5 = $_POST['Children5'];
                                    $roomCount = $_POST['roomCount'];
                                    $kind = $_POST['kind'];
                                    $see = $_POST['see'];
                                    $facility = $_POST['facility'];
                                    $accommodation = $_POST['accommodation'];
                                    $requests = $_POST['requests'];

                                    

                                     if(isset($_POST['Submit']))
                                     {

                                        $query="INSERT INTO package(Arraival,Departure,Adults,Children612,Children5,Roomcount,Kind,See,Facility,Accomodation,Requests,Email) VALUES('$DateOfArrival','$DateOfDeparture','$Adults','$Children612','$Children5','$roomCount','$kind',' $see','$facility','$accommodation','$requests','$mail')";
                                        $result = mysqli_query($conn,$query);
                                        if($result)
                                        {
                                            echo "<div class='alert alert-success' role='alert'><font size='5px'>Successfully Registered!!</font></div>";

                                        }
                                        else
                                        {
                                            echo "<div class='alert alert-danger' role='alert'><font size='5px'>Sorry Cannot Book The Requested Package!</font></div>";
                                        }
                                     }
                                }
                                
                                ?>


                            <div id="result">
                                <div id="booking_error" hidden class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> Tour Plan sending failed. Please try again.
                                </div>
                                <div id="booking_success" hidden class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Tour Plan was <strong>successfully</strong> sent. Our agent will contact you as
                                    soon as possible.
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
