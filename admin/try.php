<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>JULLY ARA TUNGBA MELODY</title>
        
        <!--CSS-->
        <link rel="stylesheet" href="../css/extrda.css">
        <link rel="stylesheet" href="../css/stylce.css">


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
                        <a href="#home">HOME</a>
                    </li>
                    <li>
                        <a href="#abouts">ABOUT</a>
                    </li>
                    <li>
                        <a href="#events">EVENTS</a>
                    </li>
                    <li>
                        <a href="#photos">PHOTOS</a>
                    </li>
                     <li>
                        <a href="#songs">SONGS</a>
                    </li>
                     <li>
                        <a href="#contact">CONTACT AND BOOKING</a>
                    </li>
                </ul>
                <a href="#" id="toggle-btn">JULLY ARA</a>
            </nav>
</header>
<div class="section-hero">
            <div class="container">

            	
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<br>
	<input type="submit" value="Submit">
</form>
</div>
</div>

<?php
if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	print_r($file);
	die();
$name = $_FILES['file']['name'];
//$size= $_FILES['file']['size'];
//echo $type= $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

$error = $_FILES['file']['error'];

if(isset($name)){
	if(!empty($name)){
		$location ='../admin/uploads/';
		if (move_uploaded_file($tmp_name, $location.$name)){
			echo "uploaded";
		}else{
			echo "There was an error, try again!";
		}
	}else{
		echo 'Please choose a file';
	}
}
}

?>




</body>
</html>
