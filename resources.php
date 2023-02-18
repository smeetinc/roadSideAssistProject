<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119403554-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119403554-1');
</script>

    
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        SLNCONLINE | RESOURCES
    </title>
    <meta property="og:title" content="SLNCONLINE | RESOURCES"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://slnconline.com.ng/resources"/>
    <meta property="og:image" content="http://slnconline.com.ng/images/slnc%20new%20logo.png"/>
    <meta property="og:description" content=""/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/resources.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="msapplication-TileColor" content="#c9cde3">
<meta name="msapplication-config" content="images/browserconfig.xml">
<meta name="theme-color" content="#ad5d5d">
    
    <script src="javascript/jquery-3.2.1.js"></script>
</head>
<body>
<header>
    <div id="headerPix"><a href="index.php"><img src="images/02.png" width="150px;" alt="SLNC logo"></a></div>
    <div id="special">
        <b>SPECIAL LEARNING NEEDS CONSULTANT</b>
        <br>
        <span>...Making learning and technology easy, accessible, affordable and available for everyone</span>
    </div>
</header>

<section class="wrapper">
    <header>

        <nav>
            <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a> </li>
                    <li><a href="about.php">ABOUT US</a> </li>
                    <li><a href="resources.php" id="resources">RESOURCES</a> </li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="store.php">SLNC STORE</a></li>
                    <li><a href="contact.php">CONTACT US</a> </li>
                </ul>
            </div>
        </nav>
    </header>
</section>
<section class="content-text">
<div class="margin">
    <p>Use the anchor link below to quickly navigate to the Resource section you want </p>
<br>
<a name="top"></a>
    <nav class="nav">
        
            <div class="menu1">
                <ul>
                    <li>
                        <a href="#ebook">Ebook</a> 
                    </li>
                    <li>
                        <a href="#audio">Audio</a>
                    </li>
                    <li>
                        <a href="#video">Video</a>
                    </li>
                    <li>
                        <a href="#web">Web</a>
                    </li>
                    

                </ul>
            </div>
               
            </nav>


<br>
   <p>Enjoy various accessible materials in education, finance, technology, entertainment, career,
       self-development and more from our archives to tackle any challenge in your everyday life.
    </p>
<br>
    <div  class="table">
        <div id="container">
        <div id="inner-container">

            <div id="results"></div>
            
            <div id="loader"></div>
            

        </div>
    </div>


    <script type="text/javascript">
    function showRecords(perPageCount, pageNumber) {
        $.ajax({
            type: "GET",
            url: "getPageData.php",
            data: "pageNumber=" + pageNumber,
            cache: false,
            beforeSend: function() {
                $('#loader').html('<img src="loader.png" alt="loading" width="20" height="20" style="margin-top:10px;">');
                
            },
            success: function(html) {
                $("#results").html(html);
                $('#loader').html(''); 
            }
        });
    }
    
    $(document).ready(function() {
        showRecords(10, 1);
    });
</script>


        
</div>

</section>


<footer>

    <div class="footer-contact">
        <div class="content-text">
            <img src="images/02.png" width="70px" height="60px" alt="SLNC logo">

        <span>
                SPECIAL LEARNING NEEDS CONSULTANT &copy; 2018 | All Rights Reserved
                <br>22, Okeoluwatedo street, Oke-aro, Akure, Ondo State. Nigeria
                <br>EMAIL: support@slnconline.com.ng
            <br>+2348181801444; +2348055717197
            </span>
            </div>
    </div>

    <div class="footer-nav">
        <ul>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT US</a> </li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Site-map</a></li>
        </ul>

        <br>
        <ul style="text-align: center; font-weight: bold">
            <li><a href="https://facebook.com/slnconline" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/@SLNCnigeria" target="_blank">Twitter</a> </li>
            <li><a href="https://www.youtube.com/channel/UCn0NZ8V1zSNXEJnV97nVrlA?guided_help_flow=3" target="_blank">Youtube</a></li>
            <li><a href="https://plus.google.com/b/112754569236720940147/112754569236720940147" target="_blank">Google+</a></li>
            <li><a href="https://www.linkedin.com/company/special-learning-needs-consultant" target="_blank">Linkedin</a></li>
        </ul>
    </div>

    <div class="clear-float">
        <br>
        <br>
        site designed and developed by Smeet Tech Inc. >> +2347032700092 | EMAIL: bayodeoluseyi@gmail.com
    </div>



</footer>
<div>
<script src="javascript/vendor/jquery.js"></script>
<script type="text/javascript">

    //Menu toggle-button

    $(document).ready(function(){
        $(".menu-icon").on("click", function () {
            $("nav ul").toggleClass("showing");

        })
    });

    //scrolling Effect

    $(window).on("scroll",function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
            $('.nav').addClass('grey');
        }
        else{
            $('nav').removeClass('black');
            $('.nav').addClass('grey');
        }
    })

</script>
</div>

</body>
</html>