<?php
$conn = new mysqli($server, $user, $pass);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error . "<br />");

$sql = "DROP DATABASE " . $dbname;
if ($conn->query($sql) === TRUE)
  echo "<div class=\"text\">Database " . $dbname . " deleted.<br /></div>";

$sql = "CREATE DATABASE " . $dbname;
if ($conn->query($sql) === TRUE)
  echo "<div class=\"text\">Database " . $dbname . " created.<br /></div>";
else
  echo $conn->error;

$conn->select_db($dbname);
$sql = "CREATE TABLE " . $table . " (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  document_uri VARCHAR(255) NOT NULL,
  blocked_host VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) 
  echo "<div class=\"text\">Table " . $table . " created.<br /></div>";
else 
  echo "<div class=\"text\">Error creating table: " . $conn->error . "<db /></div>";

$conn->close();
?> 
