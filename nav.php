<?php
include "database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>
        <header id="header" class="header-v1">

        <nav class="flat-mega-menu">

            <label for="mobile-button"> <i class="fa fa-bars"></i></label>
            <input id="mobile-button" type="checkbox">
            <ul class="collapse">
                <li class="title">
                    <a href="main.php"><span>C</span>orners <span>O</span>f <span>I</span>ndia<span>.</span></a>
                </li>
                <li><a href="main.php">HOME</a></li>
                <li><a href="tour-list.php">TOURS</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="hiking-tours.php">Hiking tours</a></li>
                        <li><a href="classic-tours.php">Classic tours</a></li>
                        <li><a href="South_Sri_Lanka_Tour.php">South sri Lanka tour</a></li>
                        <li><a href="1-day-tours.php">1 day tours</a></li>
                        <li><a href="3_Day_tour.php">3 day tour</a></li>
                        <li><a href="4-day-tours.php">4 day tours</a></li>
                        <li><a href="7-day-tours.php">7 day tours</a></li>
                        <li><a href="10_Day_Tour.php">10 day tours</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>
                <li><a href="a.php">VCM</a></li>
                    <?php if(isset($_SESSION['email'])): ?>
                   <li> <a href="account.php">MY ACCOUNT</a> </li>
                   <li> <a  href="logout.php" >LOGOUT</a> </li>

                <?php else: ?>
                 <li> <a href="login.php" >LOGIN/SIGN-UP</a>  </li>
                <?php endif; ?>
                
                
                
            </ul>
        </nav>

    </header>

</body>
</html>