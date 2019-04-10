    <?php
    include "database.php";

if(isset($_POST["pack"]))
{
    $pack=$_POST["pack"];

}
?>

<html lang="en">
<head>

    <?php
        include "head.php"; ?>
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
                 <?php  echo"<h1>".$pack;"</h1>" ?>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li><a href="admin_view.php">View Bookings</a></li>
                            <li>/</li>
                            <li>Packages</li>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Country</th>
                                    <th>Date Of Arrival</th>
                                    <th>Date Of Departure</th>
                                    <th>RoomCount</th>
                                  
                                    
                                </tr>

                                <?php
                                    $query = "SELECT customer.Name,package.Email,customer.Contact,customer.Country,package.Arraival,package.Departure,package.Roomcount from package INNER JOIN customer on package.Email=customer.Email where package.pack='$pack' ";
                                    $result = mysqli_query($conn,$query);
                                    if(!$result)
                                        echo "";
                                    else
                                    {
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        $name = $row[0];
                                        $email = $row[1];
                                        $contact = $row[2];
                                        $country = $row[3];
                                        $arrival = $row[4];
                                        $departure = $row[5];
                                        $roomcount = $row[6];
                                        echo '<tr>';
                                        echo '<td>'.$name.'</td>';
                                        echo '<td>'.$email.'</td>';
                                        echo '<td>'.$contact.'</td>';
                                        echo '<td>'.$country.'</td>';
                                        echo '<td>'.$arrival.'</td>';
                                        echo '<td>'.$departure.'</td>';
                                        echo '<td>'.$roomcount.'</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </table>
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
