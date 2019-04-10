<?php
    include "database.php";
session_start();
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
                    <h1>PROFILE</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="admin_view.php">Home</a></li>
                            <li>/</li>
                            <li>Profile</li>
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
                        <div class="col-sm-8">
                            <form method="POST" action="">
                            <table class="table table-bordered">
                                 <?php
                                    $mail=$_SESSION["email"];
                                    $query = "SELECT Name,Email,Contact,Country,Password FROM customer where Email='$mail'";
                                    $result = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        $name = $row[0];
                                        $email = $row[1];
                                        $contact = $row[2];
                                        $country = $row[3];
                                        $password = $row[4];
                                    }
                                        
                                      
                                ?>
                                    <tr>
                                    <td>Username</td><?php echo '<td>'.$name.'</td>'; ?>
                                    </tr>
                                    <tr>
                                        <td>Email</td><?php echo '<td>'.$email.'</td>'; ?>
                                    </tr>
                                    <tr>
                                        <td>Contact</td><?php echo '<td>'.$contact.'</td>'; ?>
                                    </tr>
                                    <tr>
                                         <td>Country</td><?php echo '<td>'.$country.'</td>'; ?>
                                    </tr>
                                    <tr>
                                        <td><label for="Password">Change your Password*:</label></td>
                                        <td><input id="Password"  name="pass" type="password" pattern=".{4,20}"   required title="4 to 20 charachters required" class="form-control" name="pass" placeholder="Create Password" required>    </td>
                                    
                                    </tr>
                                    <tr>
                                        <td><label for="Password">Confirm your Password*:</label></td>
                                        <td><input id="Password"  name="pass1" type="password" pattern=".{4,20}"   required title="4 to 20 charachters required" class="form-control" name="pass1" placeholder="Confirm Password" required></td>
                                    </tr>
                                    <tr>
                                        <!-- <td colspan="2" align="center"><button name="btnsubmit" class="btn btn-primary">Sign-Up</button></td> -->
                                        <td colspan="2" align="center"><input type="submit" name="submit" value="Change Password" name="btnsubmit" class="btn btn-primary"></td>

                                    </tr>
                                    
                                  
                                    
                                </tr>
                               
                            </table>
                            </form>
                          <?php  
                                   $mail=$_SESSION["email"];

                                    if(isset($_POST['submit']))
                                    {

                                        
                                        $password = $_POST['pass'];
                                        $password1=$_POST['pass1'];
                                       
                                        // echo $name;
                                        // echo $email;
                                        // echo $contact;
                                        // echo $country;
                                        // echo $password;
                                        // echo $password1;

                                        if($password!=$password1)
                                        {
                                            echo "<div role='alert'><font color='red' size='5px'>Password doesnt match during confiramation.....try again!!!</font></div>"; 
                                        }
                                        else
                                        {
                                        $query = "UPDATE customer SET Password='$password' where Email='$mail'";
                                        $result = mysqli_query($conn,$query);
                                        if($result)
                                        {
                                            echo "<div class='alert alert-success' role='alert'><font size='5px'>Password Changed successfully</font></div>";
                                           
                                        }
                                        else
                                        {
                                            echo "<div class='alert alert-danger' role='alert'><font size='5px'>Unsuccessful!</font></div>";
                                        }
                                        }
                                        
                                    }


                     ?>
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