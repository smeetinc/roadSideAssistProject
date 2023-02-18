<?php
include 'includes/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="RoadSideAssist is a website dedicated to providing any assistance for road users">
    <meta name="keywords" content="Road, road, assist, assistance, car, tyre, battery, fix, fix-your-car, car-maintenance, repair, car-repair">
    <meta name="author" content="www.roadsideassist.com.ng">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
       ABOUT-US | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/extra.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-TileColor" content="#c9cde3">
    <meta name="msapplication-config" content="img/browserconfig.xml">
    <meta name="theme-color" content="#ad5d5d">
    
    <script src="js/jquery-3.2.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');
*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.section{
    width: 100%;
    min-height: 180vh;
    background-color: #ddd;
}
.container{
    width: 80%;
    display: block;
    margin:auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}
.image-section{
    float: right;
    width: 40%;
}
.image-section img{
    margin-top: 40px;
    width: 100%;
    height: auto;
}
.content-section .title{
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3{
    margin-top: 20px;
    color:#5d5d5d;
    font-size: 21px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
    text-align: justify;
}
.content-section .content .button{
    margin-top: 30px;
}
.content-section .content .button a{
    
    
    text-decoration: none;
    
    font-size: 25px;
    
    outline: none;
    border: none;
    margin: 18px 0;
    padding: 20px 40px;
    background: #FFD152;
    font-family: Roboto;
    color:  #282627;
    letter-spacing: 2px;
    font-weight: 800;
    text-transform: uppercase;

}
.content-section .content .button a:hover{
    background-color: #a52a2a;
    color:#fff;
}
.content-section .social{
    margin: 40px 40px;
}
.content-section .social i{
    color:#a52a2a;
    font-size: 30px;
    padding:0px 10px;
}
.content-section .social i:hover{
    color:#3d3d3d;
}
@media screen and (max-width: 768px){
    .container{
    width: 80%;
    display: block;
    margin:auto;
    padding-top:50px;
}
.content-section{
    float:none;
    width:100%;
    display: block;
    margin:auto;
}
.image-section{
    float:none;
    width:100%;
    
}
.image-section img{
    width: 100%;
    height: auto;
    display: block;
    margin:auto;
}
.content-section .title{
    text-align: center;
    font-size: 19px;
}
.content-section .content .button{
    text-align: center;
}
.content-section .content .button a{
    padding:9px 30px;
}
.content-section .social{
    text-align: center;
}

}
</style>

      

   
</head>
<body>
    <section class="navigation">
        <nav>
            <a href="index.php"><img src="img/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#offers">OFFERS</a></li>
                    <li><a href="index.php#pricing">PRICING</a></li>
                    <li><a href="index.php#faqs">FAQs</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <!------------ Start Success Page Content---->
   <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>THE ROADSIDE ASSISTANCE MADE FOR YOU IN NIGERIA</h3>
                    <p>Roadsideassist Nigeria is a private company that offers emergency roadside assistance located in Lagos state. Think of any assistance you may need while driving, could it be that you run out of gas, or may be you have some issues with your tire, or it may even be your battery. Roadsideassist Nigeria got you covered because our mission is to provide assistance at a lightening speed and we key into the fact that time is precious.  Also, we ensure to deliver the best services that will leave our clients with smiles on their faces at the most affordable rate you can ever imagine.</p> 
                    <p>It's our utmost responsibility to answer and deliver our services calls in a swift and professional manner as all our staff are well trained and dedicated to giving our customers the best.</p>

                    <p>With Roadsideassist Nigeria, you can be sure of: <br>
                        &#10148;<strong> Fast Response :</strong>&nbsp; You can expect our team within 36-75 mins sometimes less.<br>
                        &#10148;<strong> Best Prices :</strong>&nbsp;  We allow you to choose whatever you want to pay.<br>
                        &#10148;<strong> Available from 6AM to 10PM :</strong>&nbsp;  Whenever you need road help we got you covered.<br>
                        &#10148;<strong> Complete and Experienced Team :</strong>&nbsp;  To guarantee you a friendly and professional service</p>

                    <div class="button">
                        <a href="https://www.roadsideassist.com.ng/register">Register Now</a>
                    </div>
                </div>
                <div class="social">
                    <a href="https://www.instagram.com/_roadsideassist" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng" target="_blank"><i class="fab fa-google"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=2348178573884&text=Hello%20I%20was%20redirected%20from%20your%20website,%20please%20I%20will%20like%20to...&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    
                </div>
            </div>
            <div class="image-section">
                <img src="img/12.jpg">
            </div>
        </div>
    </div>

    <!---------- End Success Page Content------>
    <!-------Footer------>
   <footer>
       <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h4>Product</h4><br>
                    <small>Our Plan</small>
                    <small>Free Trial</small>
                </div>
                <div class="link-title">
                    <h4>About Us</h4><br>
                    <small>Request Demo</small>
                    <small>FAQs</small>
                </div>
                <div class="link-title">
                    <h4>Support</h4><br>
                    <small>Features</small>
                    <small>Contact Us</small>
                </div>
               
            </div>
        </div>
        <div class="footer-right-col">
            <div class="footer-info">
                <div class="copyright-text">
                    <small>support@roadsideassist.com.ng</small>
                    <small>&copy; <?php echo date('Y'); ?> | RoadSideAssist</small>
                </div>
                <div class="footer-logo">
                    <img src="img/logo1.png">
                    <br>
                    <img src="img/ng.png">
                </div>
            </div>
        </div>
       </div>
   </footer>

<script src="js/faq.js"></script>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right="0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: false
    });

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        once: true,
    });
</script>


</body>
</html>