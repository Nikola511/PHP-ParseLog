<?php
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error . "<br />");

echo "<table>
  <tr><th>Order</th>
      <th>Property</th>
      <th>Count</th></tr>";

echo "<tr><th colspan=3>Group by document-uri</th></tr>";
$sql = "SELECT *, COUNT(*) FROM " . $table .
      " GROUP BY 2
        ORDER BY 4 DESC, 2 ASC
        LIMIT 10";
$rs = $conn->query($sql);
$count = 0; 
while($row = mysqli_fetch_array($rs))
  echo "<tr><td>". ++$count ."</td><td>". $row[1] ."</td><td>". $row[3] ."</td></tr>"; 

echo "<tr><th colspan=3>Group by blocked-host</th></tr>";
$sql = "SELECT *, COUNT(*) FROM " . $table .
      " GROUP BY 3
        ORDER BY 4 DESC, 3 ASC
        LIMIT 10";
$rs = $conn->query($sql);
$count = 0; 
while($row = mysqli_fetch_array($rs))
  echo "<tr><td>". ++$count ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>"; 

echo "</table>";
$conn->close();
?>
	