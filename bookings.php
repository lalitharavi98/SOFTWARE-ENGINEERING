    <?php
    include "database.php";


?>


<html lang="en">
<head>

    <?php
        include "head.php";
       
    ?>
    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even){background-color: #cce5ff}

        th {
          background-color: #004080;
          color: white;
        }
        </style>

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
                    <h1>TOTAL BOOKINGS</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="admin_view.php">Home</a></li>
                            <li>/</li>
                            <li>Bookings</li>
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
                            <table class="table table-bordered">
                                <tr>
                                  
                                    <th>Date Of Arrival</th>
                                    <th>Date Of Departure</th>
                                    <th>Package</th>
                                    <th>RoomCount</th>
                                    <th>Tour Type</th>
                                    <th>Kind Of Places Seen</th>
                                    <th>Facility</th>
                                    <th>Accomodation</th>
                                  
                                    
                                </tr>
                                <?php
                                $mail=$_SESSION['email'];
                                    $query = "SELECT Arraival,Departure,pack,Roomcount,Kind,See,Facility,Accomodation from package  where Email='$mail'";
                                    $result = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        
                                        $arrival = $row[0];
                                        $departure = $row[1];
                                        $pack = $row[2];
                                        $roomcount = $row[3];
                                        $kind = $row[4];
                                        $see = $row[5];
                                        $facility = $row[6];
                                        $accomodation = $row[7];
                                        echo '<tr>';
                                        echo '<td>'.$arrival.'</td>';
                                        echo '<td>'.$departure.'</td>';
                                        echo '<td>'.$pack.'</td>';
                                        echo '<td>'.$roomcount.'</td>';
                                        echo '<td>'.$kind.'</td>';
                                        echo '<td>'.$see.'</td>';
                                        echo '<td>'.$facility.'</td>';
                                        echo '<td>'.$accomodation.'</td>';
                                        echo '</tr>';
                                    }
                                ?>
                            </table>
                            
                </div>
             </div>
         </div>



    <?php
        include "footer.php";
       
    ?>

</div>



</body>
</html>
