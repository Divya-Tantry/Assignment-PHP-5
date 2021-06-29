<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<div class="w3-container w3-half w3-margin-top">
		<form class="w3-container w3-card-4" method="POST" action="addrecord.php" >
			<center><h2>PASSPORT FORM</h2></center>
			<br>
			<label>Passport Number</label>
			<input class="w3-input" type="text" name="pno" placeholder="Enter Passport number" required>
			<br>
			<br>
			<label>First Name</label>
			<input class="w3-input" type="text" name="fname" placeholder="Enter First Name" required>
			<br>
			<label>Middle Name</label>
			<input class="w3-input" type="text" name="mname" placeholder="Enter Mid Name" required>
			<br>
			<label>Last Name</label>
			<input class="w3-input" type="text" name="lname" placeholder="Enter Last Name" required>
			<br>
			<br>
			<label>DOB</label>
			<input class="w3-input" type="date" name="dob" required>
			<br>
			<br>
			<label>Nationality</label>
			<input class="w3-input" type="text" name="nation" placeholder="Enter Nationality" required>
			<br>
			<br>
			<label>Address</label>
			<input class="w3-input" type="text" name="address" placeholder="Enter Address" required>
			<br>
			
			<label>Select Your Photo</label>
			<br>
			<input class="w3-input" type="file" name="image" >
			<br>
            <!-- <button  name="display" value="DISPLAY" href="Display.php" width=""></button> -->
			<input class="w3-button w3-blue w3-right" type="submit" name="form_submit">
			<a href="Displayy.php">Display</a>
			
			<br>
			<br>
		</form>
	</div>