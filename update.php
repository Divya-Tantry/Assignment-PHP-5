<?php
include_once 'db.php';
//$result = mysqli_query($conn,"SELECT * FROM pass");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pass set id='" . $_POST['id'] . "', pno='" . $_POST['pno'] . "', fname='" . $_POST['fname'] . "', mname='" . $_POST['mname'] . "', lname='" . $_POST['lname'] . "', dob='" . $_POST['dob'] . "', nation='" . $_POST['nation'] . "' ,address='" . $_POST['address'] . "', image='" . $_POST['image'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM pass WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update  Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="sy.php">PASSPORT DETAILS</a>
</div>
PNO: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="pno"  value="<?php echo $row['pno']; ?>">
<br>
First Name: <br>
<input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
<br>
Middle Name :<br>
<input type="text" name="mname" class="txtField" value="<?php echo $row['mname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
<br>
DOB :<br>
<input type="date" name="dob" class="txtField" value="<?php echo $row['dob']; ?>">
<br>
Nationality:<br>
<input type="text" name="nation" class="txtField" value="<?php echo $row['nation']; ?>">
<br>
Address:<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>
<label>Select Your Photo</label>
            <br>
            <input class="w3-input" type="file" name="image" value="<?php echo $row['image']; ?>">
            <br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>