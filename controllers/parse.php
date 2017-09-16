<?php
ini_set('max_execution_time', '60');

$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error . "<br />");

$rgxDocumentUri = "/\'document-uri\' => \'(.+)?\'\,/";
$rgxBlockedHost = "/\'blocked-host\' => \'(.+)?\'\,/";
$document_uri = "";
$blocked_host = "";
$handle = fopen($file, 'r');

$sql = "INSERT INTO ". $dbname . "." . $table ." (document_uri, blocked_host) VALUES ";
while(!feof($handle)) {
  $line = fgets($handle);
  if(preg_match("/\'csp-report\' =>/", $line)) {
    $document_uri = "";
    $blocked_host = "";
  }
  else if(preg_match($rgxDocumentUri, $line, $matches)) {
    $document_uri = preg_replace($rgxDocumentUri, '$1', $matches[0]);
  }
  else if(preg_match($rgxBlockedHost, $line, $matches)) {
    $blocked_host = preg_replace($rgxBlockedHost, '$1', $matches[0]);
    $sql .= "('" . $document_uri . "', '" . $blocked_host . "'),";
  }  
}
$sql = preg_replace("/\,$/", ";", $sql);

if($conn->query($sql) === TRUE) {
  $sql = "SELECT COUNT(*) FROM " . $table;
  $rs = $conn->query($sql);
  while($row = mysqli_fetch_array($rs))
    echo "<div class=\"text\">Total inserted rows: " . $row[0] . "<br /></div>";
}
else
  echo "Error inserting data: " . $conn->error . "<br />";

fclose($handle);
$conn->close();
?>