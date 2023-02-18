<?php
	include_once 'includes/autoload.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="RoadSideAssist is a website dedicated to providing any assistance for road users">
    <meta name="keywords" content="Road, road, assist, assistance, car, tyre, battery, fix, fix-your-car, car-maintenance, repair, car-repair">
    <meta name="author" content="www.roadsideassist.com.ng">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Register | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" href="css/main.css">
    
		
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
    
    <script src="javascript/jquery-3.2.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>
	<div id="body">
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
	<div id="container">
		<!--<h1>REGISTER WITH US</h1>-->
		<?php 
			$sql = "SELECT * FROM customer;";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo $row['customer_name'];
				}
			}
		?>
		<form method="POST" action="">
		<form id="form1">
			<h3> THE CAR</h3>
			<input type="text" name="car_make" placeholder="Make of car" required>
			<input type="text" name="car_year" placeholder="Year" required>
			<input type="text" name="car_model" placeholder="Model" required>
			<input type="text" name="car_transmission" placeholder="Transmission type" required>
			<label for="bodyType">Body type:</label>
			<select id="bodyType" name="car_body" required>
				<option value="wagon">Wagon</option>
				<option value="suv">SUV</option>
				<option value="sedan">Sedan</option>
				<option value="bus">Bus</option>
			</select>
			<label for="use">Main use for?:</label>
			<select id="use" name="car_use" required>
				<option value="private and commuting">Private and commuting</option>
				<option value="commercial">Commercial</option>
				<option value="private and sometimes commercial">Private and sometimes commercial</option>
			</select>
			<label for="kilometre">How many Kilometre:</label>
			<select id="kilometre" name="car_distance" required>
				<option value="Under 200k">Under 200K</option>
				<option value="Over 200k">Over 200K</option>
			</select>
			<input type="text" name="car_address" placeholder="Current overnight address" required>
			<input type="text" name="car_registration" placeholder="Registration number" required>
			<div class="btn-box">
				<button type="button" id="Next1">Next</button>
			</div>

		</form>
	


		
		<form id="form2">
			<h3>The Owner</h3>
			<input type="text" name="customer_title" placeholder="Title (Mr./ Mrs./ Miss ...)" required>
			<input type="text" name="customer_name" placeholder="Full name" required>
			<input type="text" name="customer_birthdate" placeholder="Date of Birth (dd/mm/yy)" required>
			<input type="text" name="customer_phone" placeholder="Phone number" required>
			<input type="text" name="customer_occupation" placeholder="Occupation" required>
			<div class="btn-box">
				<button type="button" id="Back1">Back</button>
				<button type="button" id="Next2">Next</button>
			</div>

		</form>
	

		<form id="form3">
			<h3>Payment</h3>
			<label for="package">Select Package:</label>
			<select id="package" name="package_type" required>
				<option value="basic">Basic</option>
				<option value="advance">Advance</option>
				<option value="premium">Premium</option>
			</select>
				<div class="btn-box">
				<button type="button" id="Back2">Back</button>
				<button type="button" name="submit1">Submit</button>
			</div>

		</form>
	</form>

		<?php
		echo $_POST['customer_name'];
		?>
	

		<div class="step-row">
			<div id="progress"></div>
			<div class="step-col"><small>Step 1</small></div>
			<div class="step-col"><small>Step 2</small></div>
			<div class="step-col"><small>Step 3</small></div>
		</div>


	</div>
</div>

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
                    <small>&copy; 2021 | RoadSideAssist</small>
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
<script>
	var form1= document.getElementById("form1");
	var form2= document.getElementById("form2");
	var form3= document.getElementById("form3");


	var Next1= document.getElementById("Next1");
	var Next2= document.getElementById("Next2");
	var Back1= document.getElementById("Back1");
	var Back2= document.getElementById("Back2");

	var progress = document.getElementById("progress");

	var container = document.getElementById("container");

	Next1.addEventListener("click", () => {
		form1.style.left ="-450px";
		form2.style.left ="40px";
		progress.style.width ="240px"
		container.style.height="600px"
	})
	

	Back1.addEventListener("click", () => {
		form1.style.left ="40px";
		form2.style.left ="-450px";
		progress.style.width ="120px"
		container.style.height="800px"
	})
	
	Next2.addEventListener("click", () => {
		form2.style.left ="-450px";
		form3.style.left ="40px";
		progress.style.width ="360px"
		container.style.height="400px"
	})
	Back2.addEventListener("click", () => {
		form2.style.left ="40px";
		form3.style.left ="450px";
		progress.style.width ="240px"
		container.style.height="600px"
	})

</script>




</body>
</html>