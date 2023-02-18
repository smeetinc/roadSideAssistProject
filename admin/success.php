<?php
// Show all success messages
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SLNCONLINE-ADMIN</title>
        
        <!--CSS-->
        <link rel="stylesheet" href="../css/extra.css">
        <link rel="stylesheet" href="../css/style.css">


        <!--Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!--jquery-->
        <script src="../js/jquery-3.4.0.js"></script>

        <!--Font Awesome icons-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <script src="../js/extra.js"></script>


<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">



    
</head>
<body>
<header>
    <a name="top"></a>
            <nav class="menu">
                <ul class="menu">
                    <li>
                        <a href="../index.php">HOME</a>
                    </li>
                    <li>
                        <a href="../index.php?#abouts">ABOUT</a>
                    </li>
                    <li>
                        <a href="../index.php?#events">EVENTS</a>
                    </li>
                    <li>
                        <a href="../index.php?#photos">PHOTOS</a>
                    </li>
                     <li>
                        <a href="../index.php?#songs">SONGS</a>
                    </li>
                     <li>
                        <a href="../index.php?#contact">CONTACT AND BOOKING</a>
                    </li>
                </ul>
                <a href="#" id="toggle-btn">JULLY ARA</a>
            </nav>
</header>
<div class="section-upload">
            <div class="container">

                    <h1><?= 'Success'; ?></h1>
                    <p>
                    	<?php
                    	if(isset($_SESSION['message']) AND !empty($_SESSION['message']));
                    	echo $_SESSION['message'];
                        echo "<p><a href='index.php'><button>Login Here</button></a></p>";
                    else:
                    	header("Location: index.php");
                    endif;
                    	?>
                    </p>

                   
               
</div>
</div>
<footer>

        <div class="footer-contact">
            <div class="content-text">
                <img src="../img/jully.png" id="footer-img" alt="Jully Ara Logo">

            <span>

                Jully Ara Tungba Melody &copy; 2018 | All Rights Reserved
            <br>
                plot 1 - 2 Adeyemo Alakija, Victoria Island, Lagos.
            <br>
            No 15 Ajoke street, Iwaya Yaba Lagos.
                <br>EMAIL: <a href="mailto:info@jullyaratungbamelody.com.ng?Subject=Mail%20from%20the%20website" target="_top">info@jullyaratungba melody.com.ng</a>; <a href="mailto:jullyaraone@gmail.com?Subject=Mail%20from%20the%20website" target="_top">jullyaraone@gmail.com</a>
                <br>CALL: +2347062907180; +2347068556464
                <br>WHATSAPP: +2348026888893

            </span>
                </div>

        </div>

        <div class="footer-nav">
            
             <ul>
                <li><a href="https://www.facebook.com/niranadekanye" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/JullyAra1" target="_blank">Twitter</a> </li>
                <li>
                    <a href="https://www.instagram.com/jully_ara" target="_blank">Instagram</a>
                </li>
            </ul>
                
        </div>
        <div class="clear-float">
            <br>
            <br>
            site designed and developed by Smeet Tech Inc. >> +2347032700092 | EMAIL: bayodeoluseyi@gmail.com
        </div>



    </footer>
        <script src="../js/script.js"></script>
    </body>

</html>s