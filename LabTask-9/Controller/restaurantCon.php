<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

include '../Model/model.php';

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM restaurantdata WHERE Id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Restaurant Name</th>
<th>Owner Name</th>
<th>Category</th>
<th>Location</th>
<th>Mobile</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['OwnerName'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Mobile'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>