<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
        <meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        
        
    <meta name="description" content="RoadSideAssist is a website dedicated to providing any assistance for road users">
    <meta name="keywords" content="Road, road, assist, assistance, car, tyre, battery, fix, fix-your-car, car-maintenance, repair, car-repair">
    <meta name="author" content="www.roadsideassist.com.ng">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Contact | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist.com.ng/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    
    <link href="css/style.css"rel="stylesheet"type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/extra.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="css/main.css">
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

    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var contact_name = $("#contact_name").val();
                var contact_email = $("#contact_email").val();
                var contact_subject = $("#contact_subject").val();
                var contact_msg = $("#contact_msg").val();
                var submit = $("#submit").val();
                $(".form-message").load("includes/sent.inc.php", {
                    contact_name: contact_name,
                    contact_email: contact_email,
                    contact_subject: contact_subject,
                    contact_msg: contact_msg,
                    submit: submit
                });
            });
        });
    </script>
    
     <style>
        .form-message{
    font-family: Arial;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}
.formError{
    color: crimson;
    font-weight: bold;

}
.formSuccess{
    color: #003f54;
    font-weight: bold;
}
.input-error{
    box-shadow: 0 0 5px red;
}
        .link-title h4 a{
		color: #E09900;
		margin-bottom: 10px;
		text-decoration: none;
	}
	.link-title small a{
		font-size: 13px;
		color: #fff;
		text-decoration: none;
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
    <section id="body">
    <div class="contact-wrap">
            <div class="contact-in">
                <h1>Contact Info</h1>
                <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
                <p>+234-817-857-3884</p>
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
                <p>support@roadsideassist.com.ng, 3riplescoops@gmail.com</p>
                <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
                <p>16 Bariga Road, By Adeshina Bus stop, Lagos Nigeria</p>
                <ul>
                    <li><a href="https://www.instagram.com/_roadsideassist" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng" target="_blank"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=2348178573884&text=Hello%20I%20was%20redirected%20from%20your%20website,%20please%20I%20will%20like%20to...&app_absent=0" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="contact-in">
                <h1>Send a Message</h1>
                <form action="includes/sent.inc.php" method="GET">
                    <input type="text" id="contact_name" name="contact_name" placeholder="Full Name" class="contact-in-input">
                    <input type="text" id="contact_email" name="contact_email" placeholder="Email" class="contact-in-input">
                    <input type="text" id="contact_subject" name="contact_subject" placeholder="Subject" class="contact-in-input">
                    <textarea id="contact_msg" name="contact_msg" placeholder="Message" class="contact-in-textarea"></textarea>
                    <input type="submit" value="SUBMIT" id="submit" name="submit" class="contact-in-btn">
                    <p class="form-message"></p>
                </form>
            </div>
            <div class="contact-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9039413571127!2d3.3816844137584456!3d6.5338147952740915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d05faa018c5%3A0x57d4615d816b16d4!2sAdesina!5e0!3m2!1sen!2sng!4v1643884086393!5m2!1sen!2sng" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-------Footer------>
   <footer>
       <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h4><a href="index.php#pricing">Product</h4></a><br>
                    <small><a href="index.php#pricing">Our Plan</a></small>
                    
                </div>
                <div class="link-title">
                    <h4><a href="about.php">About Us</a></h4><br>
                    
                    <small><a href="index.php#faqs">FAQs</a></small>
                </div>
                <div class="link-title">
                    <h4><a href="mailto:support@roadsideassist.com.ng?subject=Mail from our Website - roadsideassist.com.ng" target="_blank">Support</h4></a><br>
                    
                    <small><a href="mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng" target="_blank">Contact Us</a></small>
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
                    <a href="index.php"><img src="img/logo1.png" alt="roadsideassist logo-footer"></a>
                    <br>
                    <img src="img/ng.png" alt="Nigerian flag">
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