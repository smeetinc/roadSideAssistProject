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
       SUCCESS | Road Side Assist Nigeria
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
    min-height: 100vh;
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
}
.content-section .content .button{
    margin-top: 30px;
}
.content-section .content .button a{
    background-color: #3d3d3d;
    padding:12px 40px;
    text-decoration: none;
    color:#fff;
    font-size: 25px;
    letter-spacing: 1.5px;
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
                    <li><a href="#">HOME</a></li>
                    <li><a href="#offers">OFFERS</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#faqs">FAQs</a></li>
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
                    <h1>404 - Page Not Found!</h1>
                </div>
                <div class="content">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
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