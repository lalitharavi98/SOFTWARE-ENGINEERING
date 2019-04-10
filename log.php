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

                            
                        <div id="login">

                            <form id="formBooking" class="form-theme" action="" method="POST">
                              
								<table border=0 align="center">
									<tr>
										<label for="Email">Email*</label>
                               			<input id="Email" class="form-control" type="email" name="email" placeholder="Email Address" required>
									</tr>
									<tr>
										<label for="Password">Enter your Password*:</label>
										<input id="Password"  name="pass" type="password" pattern=".{4,20}"   required title="4 to 20 charachters required" class="form-control" name="pass" placeholder="Password" required></td>
									</tr>
									<tr>
										<td colspan="2" align="center"><input type="submit" name="Login" value="Login" name="btnsubmit" class="btn btn-primary"></td>

									</tr>
									<tr>
										<td colspan="2" align="center"><a href="reg.php" class="btn btn-primary">New To The Website?---Create Account!</a></td>
										
									</tr>
								</table>
	                   </div>
                            </form>
                            <?php
								if(!empty($_POST['email'])&&!empty($_POST['pass']))
								{
                                    $_SESSION["email"]=$_POST['email'];
									if(isset($_POST['Login']))
									{
										$email = $_POST["email"]; 
                                        $_SESSION["email"]=$_POST['email'];
							            $password = $_POST["pass"]; 
										$query = "SELECT * FROM customer WHERE Email='$email' and Password='$password'";
										$result = mysqli_query($conn,$query);
										$count = mysqli_num_rows($result);
										if($count==1)
										{
											session_start();
											//session_id("my_session");
											$_SESSION["email"]=$_POST['email'];
                                            
											//header("location:user/index.php");
											echo("<script>location.href = 'main.php';</script>");
										}
										else
										{
											echo "<div class='alert alert-danger' role='alert'>Username or password is incorrect..Try again</div>";
										}
									}
								}?>
                            
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
