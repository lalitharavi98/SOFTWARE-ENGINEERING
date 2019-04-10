    <?php
    include "database.php";
?>

<html>
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
                    <h1>Register</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>Register</li>
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
                            <form id="formBooking" class="form-theme" method="post" action="">
                              
								<table border=0 align="center">
                                    <tr>
                                        <label for="Name">NAME*</label>
                                        <input id="Name" class="form-control" type="text" name="name" pattern=".{3,20}"   required title="3 to 20 charachters required" placeholder="User Name" required>
                                    </tr>
									<tr>
										<label for="Email">Email*</label>
                               			<input id="Email" class="form-control" type="email" name="email" placeholder="Email Address" required>
									</tr>
                                    <tr>
                                        <label for="contact">Contact Number*</label>
                                        <input id="contact" class="form-control" type="tel" name="contact"  placeholder="Contact Number" required>
                                    </tr>
                                     <tr>
                                        <label for="country">Country*</label>
                                        <input id="country" class="form-control" type="text" name="country"  placeholder="Country Name" required>
                                    </tr>
									<tr>
										<label for="Password">Create your Password*:</label>
										<input id="Password"  name="pass" type="password" pattern=".{4,20}"   required title="4 to 20 charachters required" class="form-control" name="pass" placeholder="Create Password" required></td>
									</tr>
                                    <tr>
                                        <label for="Password">Confirm your Password*:</label>
                                        <input id="Password"  name="pass1" type="password" pattern=".{4,20}"   required title="4 to 20 charachters required" class="form-control" name="pass1" placeholder="Confirm Password" required></td>
                                    </tr>
									<tr>
                                        <!-- <td colspan="2" align="center"><button name="btnsubmit" class="btn btn-primary">Sign-Up</button></td> -->
										<td colspan="2" align="center"><input type="submit" name="Signup" value="Sign-Up" name="btnsubmit" class="btn btn-primary"></td>

									</tr>
									
								</table>
	
                            </form>
                            <?php 
                                    include "database.php";   
                                    if(!empty($_POST['name']))
                                    {

                                        
                                        if(isset($_POST['Signup']))
                                        {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $contact=$_POST['contact'];
                                        $password = $_POST['pass'];
                                        $password1=$_POST['pass1'];
                                        $country=$_POST['country'];
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
                                        $query = "INSERT INTO customer(Name,Email,Contact,Country,Password) VALUES('$name','$email','$contact','$country','$password')";
                                        $result = mysqli_query($conn,$query);
                                        if($result)
                                        {
                                            echo "<div class='alert alert-success' role='alert'><font size='5px'>Sign up successful</font></div>";
                                            session_start();
                                            $_SESSION["email"]=$_POST['email'];
                                            echo("<script>location.href = 'tour-list.php';</script>");


                                        }
                                        else
                                        {
                                            echo "<div class='alert alert-danger' role='alert'><font size='5px'>Username or Email already registered</font></div>";
                                        }
                                        }
                                        }
                                    }


                     ?>

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
