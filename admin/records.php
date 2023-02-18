<?php
require("../admin/includes/dbh.inc.php");



//Main action page for the admin activities
session_start();


//check if login is true

if ($_SESSION['logged_in'] != 1) {
	$_SESSION['message'] = "You must log in to upload content";
	header("Location: error.php");
	
	
}else{
	//sorting data for easy readability

				$user_uid = $_SESSION['u_uid'];
}


$sql_column1="SELECT * FROM i_column1";
$resultcolumn1=mysqli_query($conn, $sql_column1);
$resultcheckcolumn1=mysqli_num_rows($resultcolumn1);

if ($resultcheckcolumn1 > 0){
    while ($row=mysqli_fetch_assoc($resultcolumn1)){
        
        $column1_title = $row['i_column1_title'];
        $column1_text = $row['i_column1_text'];
        $column1_btn = $row['i_column1_btn'];

    }
}
$sql_column2a="SELECT * FROM i_column2a";
$resultcolumn2a=mysqli_query($conn, $sql_column2a);
$resultcheckcolumn2a=mysqli_num_rows($resultcolumn2a);

if ($resultcheckcolumn2a > 0){
    while ($row=mysqli_fetch_assoc($resultcolumn2a)){
        
        $column2a_title = $row['i_column2a_title'];
        $column2a_text = $row['i_column2a_text'];
        $column2a_btn = $row['i_column2a_btn'];

    }
}
$sql_column2b="SELECT * FROM i_column2b";
$resultcolumn2b=mysqli_query($conn, $sql_column2b);
$resultcheckcolumn2b=mysqli_num_rows($resultcolumn2b);

if ($resultcheckcolumn2b > 0){
    while ($row=mysqli_fetch_assoc($resultcolumn2b)){
        
        $column2b_title = $row['i_column2b_title'];
        $column2b_text = $row['i_column2b_text'];
        $column2b_btn = $row['i_column2b_btn'];

    }
}

$sql_about="SELECT * FROM about;";
$result_about=mysqli_query($conn, $sql_about);
$resultcheck_about=mysqli_num_rows($result_about);

if ($resultcheck_about > 0){
    while ($row=mysqli_fetch_assoc($result_about)){
        
        $about = $row['about_text'];

    }
}


?>



<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SLNCONLINE ADMIN</title>
        
        <!--CSS-->
        <link rel="stylesheet" href="css/extra.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../newVersion/css/resources.css">
        <link rel="stylesheet" href="css/preloader.css">


        <!--Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!--jquery-->
        <script src="js/jquery-3.4.0.js"></script>

        <!--Font Awesome icons-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

  <script src="js/extra.js"></script>
  <script src="js/preloader.js"></script>


<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">



    
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
	
	
	
	
	

	
	
<header>
    <a name="top"></a>
            <nav class="menu">
                <ul class="menu">
                    <li>
                        <a href="main.php">UPLOAD/UPDATE CONTENT</a>
                    </li>
                    <li>
                        <a href="records.php">VIEW DATABASE CONTENT</a>
                    </li>
                    <li>
                        <a href="../newVersion/index.php">BACK TO WEBSITE MAINPAGE</a>
                    </li>
                    
                    <li class="logout">
                        <a href="logout.php">LOG OUT</a>
                    </li>

                </ul>
                <a href="#" id="toggle-btn">SLNCONLINE</a>
            </nav>
</header>
<div class="section-upload">
            <div class="container">



            	
<h1>All Records Page</h1>
<p>Use the anchor link below to quickly navigate to the section you want to upload/update content</p>
<br>
<nav class="menu1">
                <ul class="menu1">
                    <li>
                        <a href="#blog">Blog Table</a> 
                    </li>
                    <li>
                        <a href="#index">Index Table</a>
                    </li>
                    <li>
                        <a href="#resources">Resources Table</a>
                    </li>
                    <li>
                        <a href="#store">Store Table</a>
                    </li>
                    <li>
                        <a href="#about">About Table</a>
                    </li>
                   

                </ul>
               
            </nav>


	<br>
	<br>
	<a name="index"><h2>Index Page Column 1</h2>

		<table border="1">
			<tr>
				<th>Column Title</th>
				<th>Column Text</th>
				<th>Column Button</th>
			</tr>
			<tr>
				<td><?php echo $column1_title; ?></td>
				<td><?php echo $column1_text; ?></td>
				<td><?php echo $column1_btn; ?></td>
				
			</tr>
		</table>
	<a href="#top">Go back Up</a>
	<br>
	<h2>Index Page Column 2A</h2>

		<table border="1">
			<tr>
				<th>Column Title</th>
				<th>Column Text</th>
				<th>Column Button</th>
			</tr>
			<tr>
				<td><?php echo $column2a_title; ?></td>
				<td><?php echo $column2a_text; ?></td>
				<td><?php echo $column2a_btn; ?></td>
				
			</tr>
		</table>
	<a href="#top">Go back Up</a>
<br>
	<h2>Index Page Column 2B</h2>

		<table border="1">
			<tr>
				<th>Column Title</th>
				<th>Column Text</th>
				<th>Column Button</th>
			</tr>
			<tr>
				<td><?php echo $column2b_title; ?></td>
				<td><?php echo $column2b_text; ?></td>
				<td><?php echo $column2b_btn; ?></td>
				
			</tr>
		</table>
	<a href="#top">Go back Up</a>

<a name="resources"></a>
<br>
	<h2>Ebook Resources Table</h2>
	<?php 

		$sql_ebook="SELECT * FROM ebook;";
$result_ebook=mysqli_query($conn, $sql_ebook);
$resultcheck_ebook=mysqli_num_rows($result_ebook);
echo "<table border='1'>
			<tr>
				<th>S/N</th>
				<th>Title</th>
				<th>Author</th>
				<th>Category</th>
				<th>Description</th>
				<th>Link</th>
				
			</tr>";

if ($resultcheck_ebook > 0){
    while ($row=mysqli_fetch_assoc($result_ebook)){
        
        $ebook_id = $row['ebook_id'];
        $ebook_title = $row['ebook_title'];
        $ebook_author = $row['ebook_author'];
        $ebook_category = $row['ebook_category'];
        $ebook_description = $row['ebook_description'];
        $ebook_link = $row['ebook_link'];

        echo "<tr>
				<td>".$ebook_id."</td>
				<td>".$ebook_title."</td>
				<td>".$ebook_author."</td>
				<td>".$ebook_category."</td>
				<td>".$ebook_description."</td>
				<td>".$ebook_link."</td>
				
				
			</tr>";

    }
}
echo "</table>";

	?>	
		
	<a href="#top">Go back Up</a>

	<br>

	<h2>Audio Resources Table</h2>
	<?php 

		$sql_audio="SELECT * FROM audio;";
$result_audio=mysqli_query($conn, $sql_audio);
$resultcheck_audio=mysqli_num_rows($result_audio);
echo "<table border='1' class='table'>
			<tr>
				<th>S/N</th>
				<th>Title</th>
				<th>Author</th>
				<th>Category</th>
				<th>Description</th>
				<th>Link</th>
				
			</tr>";

if ($resultcheck_audio > 0){
    while ($row=mysqli_fetch_assoc($result_audio)){
        
        $audio_id = $row['audio_id'];
        $audio_title = $row['audio_title'];
        $audio_author = $row['audio_author'];
        $audio_category = $row['audio_category'];
        $audio_description = $row['audio_description'];
        $audio_link = $row['audio_link'];

        echo "<tr>
				<td>".$audio_id."</td>
				<td>".$audio_title."</td>
				<td>".$audio_author."</td>
				<td>".$audio_category."</td>
				<td>".$audio_description."</td>
				<td>".$audio_link."</td>
				
				
			</tr>";

    }
}
echo "</table>";

	?>	
		
	<a href="#top">Go back Up</a>

	<br>
	<h2>Video Resources Table</h2>
	<?php 

		$sql_video="SELECT * FROM video;";
$result_video=mysqli_query($conn, $sql_video);
$resultcheck_video=mysqli_num_rows($result_video);
echo "<table border='1' class='table'>
			<tr>
				<th>S/N</th>
				<th>Title</th>
				<th>Description</th>
				<th>Link</th>
				
			</tr>";

if ($resultcheck_video > 0){
    while ($row=mysqli_fetch_assoc($result_video)){
        
        $video_id = $row['video_id'];
        $video_title = $row['video_title'];
        $video_description = $row['video_description'];
        $video_link = $row['video_link'];

        echo "<tr>
				<td>".$video_id."</td>
				<td>".$video_title."</td>
				<td>".$video_description."</td>
				<td>".$video_link."</td>
				
				
			</tr>";

    }
}
echo "</table>";

	?>	
		
	<a href="#top">Go back Up</a>

	<br>
	<h2>Web Resources Table</h2>
	<?php 

		$sql_web="SELECT * FROM web;";
$result_web=mysqli_query($conn, $sql_web);
$resultcheck_web=mysqli_num_rows($result_web);
echo "<table border='1' class='table'>
			<tr>
				<th>S/N</th>
				<th>Title</th>
				<th>Description</th>
				<th>Link</th>
				
			</tr>";

if ($resultcheck_web > 0){
    while ($row=mysqli_fetch_assoc($result_web)){
        
        $web_id = $row['web_id'];
        $web_title = $row['web_title'];
        $web_description = $row['web_description'];
        $web_link = $row['web_link'];

        echo "<tr>
				<td>".$web_id."</td>
				<td>".$web_title."</td>
				<td>".$web_description."</td>
				<td>".$web_link."</td>
				
				
			</tr>";

    }
}
echo "</table>";

	?>	
		
	<a href="#top">Go back Up</a>

	<br>

<a name="blog"></a>

<h2>Blog Content Table Table</h2>
	<?php 

		$sql_blog="SELECT * FROM blog;";
$result_blog=mysqli_query($conn, $sql_blog);
$resultcheck_blog=mysqli_num_rows($result_blog);
echo "<table border='1' class='table'>
			<tr>
				<th>S/N</th>
				<th>Title</th>
				<th>Image</th>
				<th>Author</th>
				<th>Text</th>
				<th>Time</th>
				<th>Keywords</th>
				
			</tr>";

if ($resultcheck_blog > 0){
    while ($row=mysqli_fetch_assoc($result_blog)){
        
        $blog_id = $row['blog_id'];
        $blog_title = $row['blog_title'];
        $blog_img = $row['blog_img'];
        $blog_author = $row['blog_author'];
        $blog_text = $row['blog_text'];
        $blog_time = $row['blog_time'];
        $blog_keywords = $row['blog_keywords'];

        echo "<tr>
        		<td>".$blog_id."</td>
        		<td>".$blog_title."</td>
        		<td>".$blog_img."</td>
        		<td>".$blog_author."</td>
        		<td>".$blog_text."</td>
        		<td>".$blog_time."</td>
				<td>".$blog_keywords."</td>
				
				
				
			</tr>";

    }
}
echo "</table>";

	?>	
		
	<a href="#top">Go back Up</a>

	<br>
	

</body>
</html>



		
				