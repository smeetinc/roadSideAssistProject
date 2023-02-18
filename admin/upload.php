<?php
include '../includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119403554-1"></script><script>

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119403554-1');
</script>

    
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        UPLOAD-CONTENT | SLNCONLINE
    </title>
    <meta property="og:title" content="SLNCONLINE | UPLOAD-CONTENT PAGE"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://slnconline.com.ng/admin/upload.php"/>
    <meta property="og:image" content="http://slnconline.com.ng/images/slnc%20new%20logo.png"/>
    <meta property="og:description" content=""/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/blog.css">
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
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/boostrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/general.css">
</head>
<body>
	<header>
    <div id="headerPix"><a href="index.html"><img src="../images/02.png" width="150px;" alt="SLNC logo"></a></div>
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
                        <li><a href="index.html">HOME</a> </li>
                        <li><a href="about.html">ABOUT US</a> </li>
                        <li><a href="resources.html">RESOURCES</a> </li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="store.html">SLNC STORE</a></li>
                        <li><a href="contact.html">CONTACT US</a> </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>
	<h1>All Uploads Page</h1>
	<h2>Blog Page Upload</h2>
	<form>
		<label>Blog Image</label>
		<input type="file" name="a_img" placeholder="Blog Image">
		<br>
		<label>Blog Title</label>
		<input type="text" name="a_title" placeholder="Blog Title">
		<br>
		<label>Blog Author</label>
		<input type="text" name="a_author" placeholder="Blog Author">
		<br>
		<label>Blog Text</label>
		<input type="textarea" name="a_text" placeholder="Blog Text">
		<br>
		<label>Blog Time</label>
		<input type="datetime-local" name="a_time" placeholder="Blog Time">
		<br>
		<label>Blog Keywords</label>
		<input type="text" name="a_keywords" placeholder="Blog Keywords">
		<br>
		<button type="submit" name="submit">Post Blog</button>

	</form>
	<br>
	<br>
	<h2>Index Page Upload</h2>
	<h3>Column 1</h3>
	<form>
		<label>Column 1 Title</label>
		<input type="text" name="i_column1_title" placeholder="column one title">
		<br>
		<label>Column 1 Text</label>
		<input type="text" name="i_column1_text" placeholder="Column one text">
		<br>
		<label>Column 1 button text</label>
		<input type="text" name="i_column1_btn" placeholder="text to appear on button">
		<button type="submit" name="i_submit1">Index Column one text</button>

	</form>
	<h3>Column 2A</h3>
	<form>
		<label>Column 2A Title</label>
		<input type="text" name="i_column2a_title" placeholder="column two (A) title">
		<br>
		<label>Column 2A Text</label>
		<input type="text" name="i_column2a_text" placeholder="Column two (A) text">
		<br>
		<label>Column 2A button text</label>
		<input type="text" name="i_column2a_btn" placeholder="text to appear on button">
		<button type="submit" name="i_submit2a">Index Column two (A) text</button>

	</form>
	<h3>Column 2B</h3>
	<form>
		<label>Column 2B Title</label>
		<input type="text" name="i_column2b_title" placeholder="column two (B) title">
		<br>
		<label>Column 2B Text</label>
		<input type="text" name="i_column2b_text" placeholder="Column two (B) text">
		<br>
		<label>Column 2B button text</label>
		<input type="text" name="i_column2b_btn" placeholder="text to appear on button">
		<button type="submit" name="i_submit2b">Index Column two (B) text</button>

	</form>
	<br>
	<br>

	<h2>Resources Page</h2>
	<form>
		
		<h3>Ebook Catalogue</h3>
		<label>TITLE</label>
		<input type="text" name="ebook_title">
		<label>AUTHOR</label>
		<input type="text" name="ebook_author">
		<br>
		<label>CATEGORY</label>
		<input type="text" name="ebook_category">
		<br>
		<label>DESCRIPTION</label>
		<input type="text" name="ebook_description">
		<br>
		<label>DOWNLOAD LINK</label>
		<input type="text" name="ebook_link">
		<br>
	</form>
	<br>
	<br>
	<form>
		
		<h3>Audio Catalogue</h3>
		<label>TITLE</label>
		<input type="text" name="audio_title">
		<label>AUTHOR</label>
		<input type="text" name="audio_author">
		<br>
		<label>CATEGORY</label>
		<input type="text" name="audio_category">
		<br>
		<label>DESCRIPTION</label>
		<input type="text" name="audio_description">
		<br>
		<label>DOWNLOAD LINK</label>
		<input type="text" name="audio_link">
		<br>
	</form>
	<br>
	<br>
	<form>
		
		<h3>Video Catalogue</h3>
		<label>TITLE</label>
		<input type="text" name="video_title">
		
		<label>DESCRIPTION</label>
		<input type="text" name="video_description">
		<br>
		<label>EXTERNAL LINK</label>
		<input type="text" name="video_link">
		<br>
	</form>
	<br>
	<br>

	<form>
		
		<h3>Web Resources Catalogue</h3>
		<label>TITLE</label>
		<input type="text" name="web_title">
		
		<label>DESCRIPTION</label>
		<input type="text" name="web_description">
		<br>
		<label>EXTERNAL LINK</label>
		<input type="text" name="web_link">
		<br>
	</form>
	<br>
	<br>



	<?php
	$time = time();
		$actual_time = date("D M Y @ H:i:s", $time);
	
	
	 ?>
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
        }
        else{
            $('nav').removeClass('black');
        }
    })
</script>
</div>
</body>
</html>