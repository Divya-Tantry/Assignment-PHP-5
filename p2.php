<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<title>FLIGHT INFORMATION</title>
</head>
<body>
<div class="w3-container w3-half w3-margin-top">
		<form class="w3-container w3-card-4" method="POST" action="submit.php">
			<center><h2>Flight details</h2></center>
			<br>
			<label>Name</label>
			<input class="w3-input" type="text" name="first_name" placeholder="Enter First Name" required>
			<br>
			<label>Seat selection</label>
			<br>
			<input class="w3-radio" type="radio" name="seat" value="aside" required>
			<label>Aside</label>
			<input class="w3-radio" type="radio" name="seat" value="window" required>
			<label>Window</label>
			<input class="w3-radio" type="radio" name="seat" value="center" required>
			<label>Center</label>
			<br>
			<label>Meal selection</label>
			<br>
			<input class="w3-radio" type="radio" name="meal" value="veg" required>
			<label>Vegtarian</label>
			<input class="w3-radio" type="radio" name="meal" value="nonveg" required>
			<label>Non-vegtarian</label>
			<input class="w3-radio" type="radio" name="meal" value="dia" required>
			<label>Diabetic</label>
			<input class="w3-radio" type="radio" name="meal" value="chid" required>
			<label>Chidren</label>
			<br>
			<input class="w3-button w3-blue w3-right" type="submit" name="form_submit" action="submit.php">
		</form>
	</div>
	
</body>
</html>
