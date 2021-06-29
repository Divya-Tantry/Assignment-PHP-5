<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM pass");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>PNO</td>
    <td>First Name</td>
    <td>Middle name</td>
    <td>Last name</td>
    <td>dob</td>
    <td>nation</td>
    <td>address</td>
    <td>image</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
     <td><?php echo $row["pno"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["mname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
     <td><?php echo $row["dob"]; ?></td>
      <td><?php echo $row["nation"]; ?></td>
      <td><?php echo $row["address"]; ?></td>
     <td ><img style="height: 100px; width: 200px;" src="images/<?php echo $row['image']; ?>"></td>
     <!-- <td><a href="update.php?id=<" OnClick="return confirm('are you sure')">update</a></td> -->
     <td><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>
     <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>