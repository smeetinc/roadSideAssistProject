<!DOCTYPE html>
<html>
<head>
	<title>CODING ATTACK</title>

	<!--meta tags-->
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<!--Linking CSS Files -->
	<link rel="stylesheet" type="text/css" href="css/register2.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	


	<!--JS CDNs-->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</head>
<body>

	<div class="row">
		<div class="col-md-12 col-md-offset-3">
			<form id="form">

				<ul id="progressbar">
					<li class="active">Personal Details</li>
					<li>Contact Details</li>
					<li>Address</li>
				</ul>

				<fieldset>
					<h2 class="title">The Car</h2>
					<input type="text" name="" placeholder="Make of car" required>
			<input type="text" name="" placeholder="Year" required>
			<input type="text" name="" placeholder="Model" required>
			<input type="text" name="" placeholder="Transmission type" required>
			<label for="bodyType">Body type:</label>
			<select id="bodyType" required>
				<option value="volvo">Wagon</option>
				<option value="volvo">SUV</option>
				<option value="volvo">Sedan</option>
				<option value="volvo">Bus</option>
			</select>
			<label for="use">Main use for?:</label>
			<select id="use" required>
				<option value="volvo">Private and commuting</option>
				<option value="volvo">Commercial</option>
				<option value="volvo">Private and sometimes commercial</option>
			</select>
			<label for="kilometre">How many Kilometre:</label>
			<select id="kilometre" required>
				<option value="volvo">Under 200K</option>
				<option value="volvo">Over 200K</option>
			</select>
			<input type="text" name="" placeholder="Current overnight address" required>
			<input type="text" name="" placeholder="Registration number" required>

					<input type="button" name="next" class="next action-button" value="next">
				</fieldset>
				<fieldset>
					<h2 class="title">Contact Details</h2>
					<input type="text" name="Mobile" placeholder="Mobile Number">
					<input type="text" name="Email" placeholder="Email">

					<input type="button" name="previous" class="previous action-button-previous" value="Previous">


					<input type="button" name="next" class="next action-button" value="next">
				</fieldset>
				<fieldset>
					<h2 class="title">Address</h2>
					<input type="text" name="Street" placeholder="Street">
					<input type="text" name="City" placeholder="City">

					<input type="button" name="previous" class="previous action-button-previous" value="Previous">


					<input type="submit" name="submit" class="submit action-button" value="submit">
				</fieldset>
				
			</form>
			
		</div>
		
	</div>

	

	<!-- Linking JS Files -->
	<script type="text/javascript" src="js/index.js"></script>

</body>
</html>
