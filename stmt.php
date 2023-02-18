<?php 
	include_once 'includes/autoload.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$data = "basic";
		//Created a template
		$sql = "SELECT * FROM customer WHERE package_type=?;";
		//Create a prepared statement
		$stmt = mysqli_stmt_init($conn);
		//Prepare the prepared statement
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "SQL statement failed";
		}else{
			//bind parameters to the placeholder
			mysqli_stmt_bind_param($stmt,"s", $data);
			//Run parameters inside database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			while($row = mysqli_fetch_assoc($result)) {
			echo $row['package_type'];
		}
		}
		



		

	?>

</body>
</html>