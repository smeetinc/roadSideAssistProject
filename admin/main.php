<?php
require("../admin/includes/dbh.inc.php");



//Main action page for the admin activities
session_start();


//check if login is true

if ($_SESSION['logged_in'] != 1) {
	$_SESSION['message'] = "You must log in to view content";
	header("Location: error.php");
	
	
}else{
	//sorting data for easy readability

				$user_uid = $_SESSION['u_uid'];
}


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
       ADMIN-LOGIN | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="../fonts/fonts.css">
    
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="css/resources.css">
    
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/extra.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="msapplication-TileColor" content="#c9cde3">
    <meta name="msapplication-config" content="images/browserconfig.xml">
    <meta name="theme-color" content="#ad5d5d">
    
    <script src="../js/jquery-3.2.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <style>
    	#logout{
	padding: 20px;
	color: blue;
	font-weight: 800;
	border: 2px solid red;
}

</style>

     
      

   
</head>

   
<body id="body">
	
		<div id="preloader">
			<div id="loader">
				<div class="barBox">
					<div class="bars"></div>
					<div class="bars"></div>
					<div class="bars"></div>
				</div>
			</div>
		</div>
	
	
	 <section class="navigation">
        <nav>
            <a href="index.php"><img src="../img/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../index.php#offers">OFFERS</a></li>
                    <li><a href="../index.php#pricing">PRICING</a></li>
                    <li><a href="../index.php#faqs">FAQs</a></li>
                    <li>
                        <a href="logout.php" id="logout">LOG OUT</a>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <!------------ Start Success Page Content---->
    <section class="section">

    	<div  class="table">
        <div id="container">
       

            <div id="results"></div>
            
            <div id="loader"></div>
            

       
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
                    <img src="../img/logo1.png">
                    <br>
                    <img src="../img/ng.png">
                </div>
            </div>
        </div>
       </div>
   </footer>


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



