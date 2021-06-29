<?php
include_once 'db.php';
  $pno=$_POST['pno'];
   $fname=$_POST['fname'];
   $mname=$_POST['mname'];
   $lname=$_POST['lname'];
   $dob=$_POST['dob'];
   $nation=$_POST['nation'];
   $address=$_POST['address'];
   $target_dir="../uploads/";
   $image =$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
 
     $sql = "INSERT INTO pass (pno,fname,mname,lname,dob,nation,address,image)
     VALUES ('$pno','$fname','$mname','$lname','$dob','$nation','$address','$image')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
 
?>
