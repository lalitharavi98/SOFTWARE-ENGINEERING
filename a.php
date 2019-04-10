<?php
include "database.php";
include "head.php";

?>
<html lang="en">
<head>
    <script type="text/javascript">
          function startDictation() {

            if (window.hasOwnProperty('webkitSpeechRecognition')) {

              var recognition = new webkitSpeechRecognition();

              recognition.continuous = false;
              recognition.interimResults = false;

              recognition.lang = "en-US";
              recognition.start();

              recognition.onresult = function(e) {
                document.getElementById('transcript').value
                                         = e.results[0][0].transcript;
                recognition.stop();
                document.getElementById('labnol').submit();
              };

              recognition.onerror = function(e) {
                recognition.stop();
              }

            }
          }

          function surf(text){
           document.getElementById('screen').src="classic-tours.php";
          }

    </script>
    <style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0; background-color: black;}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px; color:grey;}
    </style>
<?php
        
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


   
</head>
<body>
    <header id="header" class="header-v1" style="background-color: black;">

        <nav class="flat-mega-menu" style="background-color: black;">

            <label for="mobile-button"> <i class="fa fa-bars"></i></label>
            <input id="mobile-button" type="checkbox">
            <ul class="collapse">
                <li class="title">
                    <a href="main.php"><span>C</span>orners <span>O</span>f <span>I</span>ndia<span>.</span></a>
                </li>
                <li class="title">VOICE MODE</li>
                <li>
                     <form id="labnol" method="get" action="b.php">
                          <div class="speech">
                            <input type="text" name="q" id="transcript" placeholder="Speak" />
                            <img onclick="startDictation()" src="speak.png" height="20px" width="20px" />
                          </div>
                    </form>
                </li>
                <li><a href="main.php">EXIT</a></li>
                      
            </ul>
        </nav>

    </header>
    <div class="preloader">
        <div class="status">&nbsp;</div>
    </div>
    <?php
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{} ?>

    <div class="viewscreen" ">

        
        <iframe id="screen" src="main.php" height="625" width="1500"></iframe>
        

    </div>

   
       


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.1.10.4.min.js"></script>

<script src="js/nav/jquery.sticky.js" type="text/javascript"></script>

<script type="text/javascript" src="js/totop/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/accordion/accordion.js"></script>

<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script src="js/maps/gmap3.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>

<script src="js/carousel/carousel.js"></script>

<script src="js/filters/jquery.isotope.js" type="text/javascript"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/flickr/jflickrfeed.min.js"></script>

<script type="text/javascript" src="js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script>

<script type="text/javascript" src="js/main.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 1170,
            startheight: 970,
            minHeight: 500,
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "preview1"
        });
    }); //ready
</script>

</body>
</html>