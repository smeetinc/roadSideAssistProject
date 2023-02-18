<?php
	include 'admin/includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119403554-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119403554-1');
</script>

    
    <meta name="description" content="special programs and services for handicaps and persons with disabilities. you will get all you need to live a fulfilled life here.">
<meta name="keywords" content="rehabilitation centre, computer training, resources, special school, special training, web design, vocational training, assistive technology, special materials, in nigeria">
<meta name="author" content="slnconline.com.ng">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        SLNCONLINE | SEARCH
    </title>
    
    <meta property="og:title" content="SLNCONLINE | HOME"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://slnconline.com.ng/index"/>
    <meta property="og:image" content="http://slnconline.com.ng/images/slnc%20new%20logo.png"/>
    <meta property="og:description" content=""/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
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
    <script type="text/javascript" src="javascript/slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   
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
                        <li><a href="index.php" id="index">HOME</a> </li>
                        <li><a href="about.php">ABOUT US</a> </li>
                        <li><a href="resources.php">RESOURCES</a> </li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="store.php">SLNC STORE</a></li>
                        <li><a href="contact.php">CONTACT US</a> </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>


    <h1>Search Result(s)</h1>

    <div class="article-container">

    	<?php

    		if(isset($_POST['submit-search'])){
    			$search = mysqli_real_escape_string($conn, $_POST['search']);

    			$sql ="SELECT * FROM blog WHERE blog_title LIKE '%$search%' OR blog_text LIKE '%$search%' OR blog_author LIKE '%$search%' OR blog_time LIKE '%search%'";

    			$result = mysqli_query($conn, $sql);
    			$queryResult = mysqli_num_rows($result);

    			echo "There are ".$queryResult." result(s)";



    			if ($queryResult > 0){

    				while ($row = mysqli_fetch_assoc($result)){
    					echo "<a href='article.php?title=".$row['blog_title']."&time=".$row['blog_time']."'><div class='article-box'>
            					<img src=".$row['blog_img'].">
            					<h3>".$row['blog_title']."</h3>
            					<p>".$row['blog_text']."</p>
            					
            					<p>".$row['blog_time']."</p>
            					<p>".$row['blog_author']."</p>

            				</div></a>";
            				echo "<br>Ok<br>";



    				}

    			}else{
    				echo "There are no result(s) matching your search ";
    			}

    		}else if (isset($_POST['search_ebook'])) {

                $search_ebook = mysqli_real_escape_string($conn, $_POST['ebook']);

                $sql_ebook ="SELECT * FROM ebook WHERE ebook_title LIKE '%$search_ebook%' OR ebook_author LIKE '%$search_ebook%' OR ebook_category LIKE '%$search_ebook%' OR ebook_description LIKE '%search_ebook%'";

                $result_ebook = mysqli_query($conn, $sql_ebook);
                $queryResult_ebook = mysqli_num_rows($result_ebook);

                echo "There are ".$queryResult_ebook." result(s)";

            
            
echo "
<div class='table'>
                <table class='table'>
    <tr>
        <th align='center'>S/N</th>
        <th align='center'>Title</th>
        <th align='center'>Author</th>
        <th align='center'>Category</th>
        <th align='center'>Description</th>
        <th align='center'>Download</th>
    </tr>";
    

                if ($queryResult_ebook > 0){

                    while ($row_ebook = mysqli_fetch_assoc($result_ebook)){
                        echo "
            

                    
     
    <tr>
        <td align='left'>".$row_ebook['ebook_id']."</td>
        <td align='left'>".$row_ebook['ebook_title']."</td>
        <td align='left'>".$row_ebook['ebook_author']."</td>
        <td align='left'>".$row_ebook['ebook_category']."</td>
        <td align='left'>".$row_ebook['ebook_description']."</td>
        <td align='left'><a href=".$row_ebook['ebook_link'].">Download</a></td>
    </tr>";

    
    }
}else{
    echo "Nothing to display";
}

echo "</table></div>";

                    
            }else if (isset($_POST['search_audio'])) {

                $search_audio = mysqli_real_escape_string($conn, $_POST['audio']);

                $sql_audio ="SELECT * FROM audio WHERE audio_title LIKE '%$search_audio%' OR audio_author LIKE '%$search_audio%' OR audio_category LIKE '%$search_audio%' OR audio_description LIKE '%search_audio%'";

                $result_audio = mysqli_query($conn, $sql_audio);
                $queryResult_audio = mysqli_num_rows($result_audio);

                echo "There are ".$queryResult_audio." result(s)";

            
            
echo "
<div class='table'>
                <table class='table'>
    <tr>
        <th align='center'>S/N</th>
        <th align='center'>Title</th>
        <th align='center'>Author</th>
        <th align='center'>Category</th>
        <th align='center'>Description</th>
        <th align='center'>Download</th>
    </tr>";
    

                if ($queryResult_audio > 0){

                    while ($row_audio = mysqli_fetch_assoc($result_audio)){
                        echo "
            

                    
     
    <tr>
        <td align='left'>".$row_audio['audio_id']."</td>
        <td align='left'>".$row_audio['audio_title']."</td>
        <td align='left'>".$row_audio['audio_author']."</td>
        <td align='left'>".$row_audio['audio_category']."</td>
        <td align='left'>".$row_audio['audio_description']."</td>
        <td align='left'><a href=".$row_audio['audio_link'].">Download</a></td>
    </tr>";

    
    }
}else{
    echo "Nothing to display";
}

echo "</table></div>";

                    }else if (isset($_POST['search_video'])) {

                $search_video = mysqli_real_escape_string($conn, $_POST['video']);

                $sql_video ="SELECT * FROM video WHERE video_title LIKE '%$search_video%' OR video_description LIKE '%search_video%'";

                $result_video = mysqli_query($conn, $sql_video);
                $queryResult_video = mysqli_num_rows($result_video);

                echo "There are ".$queryResult_video." result(s)";

            
            
echo "
<div class='table'>
                <table class='table'>
    <tr>
        <th align='center'>S/N</th>
        <th align='center'>Title</th>
        <th align='center'>Author</th>
        <th align='center'>Category</th>
        <th align='center'>Description</th>
        <th align='center'>Download</th>
    </tr>";
    

                if ($queryResult_video > 0){

                    while ($row_video = mysqli_fetch_assoc($result_video)){
                        echo "
            

                    
     
    <tr>
        <td align='left'>".$row_video['video_id']."</td>
        <td align='left'>".$row_video['video_title']."</td>
        <td align='left'>".$row_video['video_description']."</td>
        <td align='left'><a href=".$row_video['video_link'].">Click Here</a></td>
    </tr>";

    
    }
}else{
    echo "Nothing to display";
}

echo "</table></div>";

                    }else if (isset($_POST['search_web'])) {

                $search_web = mysqli_real_escape_string($conn, $_POST['web']);

                $sql_web ="SELECT * FROM web WHERE web_title LIKE '%$search_web%' OR web_description LIKE '%search_web%'";

                $result_web = mysqli_query($conn, $sql_web);
                $queryResult_web = mysqli_num_rows($result_web);

                echo "There are ".$queryResult_web." result(s)";

            
            
echo "
<div class='table'>
                <table class='table'>
    <tr>
        <th align='center'>S/N</th>
        <th align='center'>Title</th>
        <th align='center'>Author</th>
        <th align='center'>Category</th>
        <th align='center'>Description</th>
        <th align='center'>Download</th>
    </tr>";
    

                if ($queryResult_web > 0){

                    while ($row_web = mysqli_fetch_assoc($result_web)){
                        echo "
            

                    
     
    <tr>
        <td align='left'>".$row_web['web_id']."</td>
        <td align='left'>".$row_web['web_title']."</td>
        <td align='left'>".$row_web['web_description']."</td>
        <td align='left'><a href=".$row_web['web_link'].">Click Here</a></td>
    </tr>";

    
    }
}else{
    echo "Nothing to display";
}

echo "</table></div>";

                    }else{
                        echo "No search query found... Nothing to display";
                    }
            
    	?>

    </div>



</body>
</html>