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


    <div class="section-title-detailed">

        <div id="single-carousel">
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t2.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t2.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t4.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t5.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t5.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t6.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t6.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t7.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t7.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t8.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t8.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/noth_india/t9.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/noth_india/t9.jpg" alt="" class="img-responsive">
            </div>
        </div>


        <div class="title-detailed">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="starts">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                        </ul>
                        <h2>Classic North India Mini Tour
                            <span></span>
                        </h2>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content-central">

        <div class="content_info">

            <div class="content_resalt paddings-mini tabs-detailed">
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#plan" data-toggle="tab"><i class="fa fa-bicycle"></i> TOUR PLAN</a>
                                </li>
                                <li>
                                    <a href="#destinations" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                        Destinations</a>
                                </li>
                                <li class="pull-right">
                                    <a href="bookTour.php?tour=Classic Mini Tour Package&type=CCT"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01 (Arrive Delhi)</h3>
                                            <p>Your North India Uncovered tour starts from the Capital, Delhi, an active city, with an ideal combination of the ancient and the contemporary era. Delhi has two visible parts:  New Delhi, the city created by the British, as the royal capital of India in 1911.  The Old Delhi which was considered as the Muslim capital of India between the 17th and the 19th century. There are at least eight cities on the location of modern Delhi among which Indraprastha is one of the first recognized settlements, highlighted in the epic Mahabharata over 3000 years ago. Nevertheless, Delhi has always been one of the major cities in the northern region of the subcontinent..</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (In Delhi)</h3>
                                            <p>After a relaxing breakfast, the tour guide will pick you up from the hotel and take you for a guided sightseeing of Old and New Delhi. The Tour includes the following places:</p>
                                            <p>Red Fort: The term Red Fort is taken from a Hindi word Lal, which means red and Quila which means fort</p>
                                            <p>Jama Masjid: Jama Masjid is one of the country’s major mosques where hundreds and thousands of Muslims offer their prayers even today.</p>
                                            <p>Chandni Chowk (Silver Street): Chandni Chowk is well-known for its colorful streets with the famous shopping spots of Old Delhi. It also has the country’s best known extensive market for textiles, electronic goods and watches.</p>
                                            <p>India Gate: India Gate is a free standing, 42 meter high arch. It was built in 1931 and was formerly called the All India War Memorial in the memory of the 90,000 soldiers of the Indian Army who died in World War I. </p>
                                            <p>Qutub Minar: This outstanding building in the Southern part of the capital was built by the Muslim King; Qutab–ud–din Aibak in 1199 A.D. The Minar (tower) is 72.5 meters tall and its base is a mosque.</p>
                                            <p>Return to the Hotel for dinner and over night stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (Delhi - Agra )</h3>
                                            <p>After breakfast at the hotel, you will be met by one of our representatives who will assist you with the check-out formalities. You will then start your trail to Agra, the next stop on your North India Uncovered tour programme. The drive from Delhi to Agra will be via the new Expressway, one of India’s finest highways.</p>
                                            <p>Agra is situated on the bank of Yamuna River. It is the dwelling place to India’s famous monument, the Taj Mahal. Agra was the capital of Mughal Empire in the 16th & 17th centuries.

                                            On your arrival at the Crystal Sarovar Premiere Hotel in Agra, you will again be met by our representative and will be assisted with check in formalities.</p>
                                            <p>Later in the afternoon, the tour guide will pick you up for the guided sightseeing trip of Taj Mahal and the Agra Fort.</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 (Agra – Gwalior)</h3>
                                            <p>Upon arrival in Gwalior, check in at Hotel Usha Kiran Palace.
                                            Usha Kiran Palace is a 05 star heritage hotel, a historical property of the Taj Hotels. Located on a lush 9-acre landscaped estate in Gwalior, beside Jai Vilas Palace</p>
                                            <p>
                                            Later in the afternoon, the tour guide will pick you up for the guided sightseeing tour of Gwalior.  The Tour includes visits to the following places:
                                        </p>
                                            <p>Gwalior Fort -  This is the most famous landmark of Gwalior , an imposing Fort rising 100 meters  above the town, housing the Man Singh Palace,  the Teli Temple; the Sas Bahu Temple; and Jain Sculptures. 
                                            </p>
                                            <p>
                                            Rani Laxmibai Memorial – An equestrian monument built to commemorate Rani Laxmibai , the heroine of India’s first war of independence, who was shot by a British soldier during 1858.</p>
                                        </li>
                                        <li>
                                            <h3>Day 05 (Gwalior – Orchha)</h3>
                                            <p>After a relaxing breakfast at the hotel, you will start your drive to Orchha, the next destination on your North India Uncovered tour programme..</p>
                                            <p>Afternoon, the tour guide will pick you up from your hotel for the guided sightseeing tour of Orchha.  
                                            The tour of Orchha takes you to the Jehangir Mahal, the largest of the palaces, the Raj Mahal with its murals and the Raj Praveen Mahal constructed near the garden. The Chatur bhuj temple and the Royal Chattris are by the Betwa River.
                                            </p>
                                        </li>
                                        <li>
                                            <h3>Day 06 (Orchha – Khajuraho )</h3>
                                            <p>After a relaxing breakfast, you will start your drive to Khajuraho, the next destination on your North India Uncovered tour programme..</p>
                                            <p>Afternoon, you will be picked up from your hotel and will be taken for a guided sightseeing tour of Khajuraho. Tour includes visits to the following places of interest :
                                            </p>
                                            <p>
                                            Eastern & Western Group Of Temples : The Eastern group of temples includes the Lakshmi and the Varaha Temple, the Lakshmana Temple, the KandariyaMahadev, the Mahadeva Temple, the Devi Jagadamba Temple, the Chitragupta Temple and the Vishwanath Temple. The Eastern Group of temples houses the Parasvanath Temple, the largest and finest Jain temple in the city as well as the Adinath Temple, the Shantinath Temple, the Ghantai Temple, the Javari Temple, the Vamana Temple and the Brahma and Hanuman Temple</p>
                                        </li>
                                        <li>
                                            <h3>Day 07 (Khajuraho - Allahabad)</h3>
                                            <p>After a relaxing breakfast, you will start your drive to Allahabad, the next destination on your North India Uncovered tour programme.</p>
                                            <p>On your arrival in Allahabad, check in at Hotel Kanha Shyam.
                                            Hotel Kanha Shyam is a decent 3 star centrally located hotel in Allahabad, located at a short distance from Sangam, the major tourist attraction.</p>
                                        </li>
                                        <li>
                                            <h3>Day 08 (Allahabad – Varanasi)</h3>
                                            <p>After a relaxing breakfast at the hotel, the tour guide will pick you up from the hotel for a guided sightseeing tour of Allahabad.  The tour includes the following places :
                                            </p>
                                            <p>

                                            The Allahabad Fort – Situated on the bank of the Yamuna near it’s confluence  with the River Ganges, the Allahabad Fort is said to be the largest fort built by Mughal emperor Akbar. 

                                        </p>
                                        <p>
                                            The Anand Bhavan – The former house of Moti Lal Nehru and Jawahar Lal Nehru (India’s first Prime Minister) , Anand Bhavan is now a Museum, and it also houses the Jawahar Planetarium.</p>
                                        </li>
                                        <li>
                                            <h3>Day 09 (Varanasi)</h3>
                                            <p>Breakfast at the hotel</p>
                                            <p>The day begins early with a Dawn Boat Ride on the holy river Ganges. The guide will pick you up from your hotel and will take you to the river Ganges. The City and the river Ganges come alive at dawn, when hundreds and thousands of devotees come to the river to worship the Sun God. The edge of the river looks amazing from a boat at sunrise and this sight is spiritually uplifting. Hinduism is deep and magical, it is everywhere; in the sight of a sparkling temple; in the sound of a sacred bell; in the prayer chants of the priests and in the smell of the flowers.</p>
                                            <p>In the afternoon, you will be picked up again from your hotel for the guided tour of Varanasi.</p>
                                        </li>
                                        <li>
                                            <h3>Day 10 (Varanasi-Delh)</h3>
                                            <p>After a relaxing breakfast at the hotel, you will be met by our representative and he will assist you with the check-out formalities. You will then be escorted to the airport en-route visiting the Sarnath..</p>
                                        </li>
                                    </ul>
                                </div>
                                 <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/hD37PBVb5by"><i
                                                            class="fa fa-check"></i>Delhi</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/XNxg5TyCEi62"><i
                                                            class="fa fa-check"></i>Agra</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/Q4n1sAGbFon"><i
                                                            class="fa fa-check"></i>Gwalior</a></li>

                                                            <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/dm6eW2eFJd72"><i
                                                            class="fa fa-check"></i>Orchha</a></li>
                                                            <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/Fsip8HpErBM2"><i
                                                            class="fa fa-check"></i>Khajuraho</a></li>
                                                            <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/UazEefKA3nK2"><i
                                                            class="fa fa-check"></i>Allahabad</a></li>
                                                            <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/tbcB5FknTXJ2"><i
                                                            class="fa fa-check"></i>Varanasi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                        
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

</body>
</html>
