<?php
// Make this scrpt run only if there is a page number posted to the script 
if(isset($_POST['pn'])){
	$page_rows_ebook = preg_replace('#[^0-9]#', '', $_POST['page_rows_ebook']);
	$last_ebook = preg_replace('#[^0-9]#', '', $_POST['last_ebook']);
	$pn = preg_replace('#[^0-9]#', '', $_POST['pn']);
	//This will make sure that the page number is not less than 1 or more than the last page 
	if ($pn < 1) {
		$pn = 1;
	}else if ($pn > $last_ebook){
		$pn = $last_ebook;
	}
	// connection to database 
	include_once("../admin/includes/dbh.inc.php");
	//This sets the range of rows to ask for per chosing page 
	$limit_ebook = 'LIMIT' .($pn - 1) * $page_rows_ebook .',' .$page_rows_ebook;
	// Using the limit set to fetch sql data
	$sql_ebook = "SELECT * FROM ebook ORDER BY ebook_id DESC $limit_ebook";
	$query_ebook = mysqli_query($conn, $sql_ebook);
	$dataString = '';
	while ($row_ebook = mysqli_fetch_array($query_ebook, MYSQLI_ASSOC)){
		$ebook_id = $row['ebook_id'];
		$ebook_title = $row['ebook_title'];
		$ebook_author = $row['ebook_author'];
		$ebook_category = $row['ebook_category'];
		$ebook_description = $row['ebook_description'];
		$ebook_link = $row['ebook_link'];
		$dataString .= $ebook_id.'|'.$ebook_title.'|'.$ebook_author.'|'.$ebook_category.'|'.$ebook_description.'|'.$ebook_link.'||';
	}
	// Close Database connection 
	mysqli_close($conn);
	//echo the result back to Ajax
	echo $dataString;
	exit();
}
?>