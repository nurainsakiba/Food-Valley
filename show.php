<!DOCTYPE html>
<html>
<head>
 <title>Item LIST</title>

</head>
<body>
 <table border="10" cellpadding = "15">
 <tr>
  <th>Name</th> 
  <th>Description</th>
  <th>Price</th>
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Name, Description, price FROM item";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    //echo "<tr><td>" . $row["Name"]. "</td><td>" .$row["price"]. "</td></tr>";
	
	?>
	<tr>
	<td> <?php echo $row["Name"];?></td>
	<td> <?php echo $row["Description"];?></td>
	<td> <?php echo $row["price"];?></td>
	<tr>
	<?php
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>