<?php
header("Cache-Control: no-cache");
$servername = "localhost";
$username = "kairipur_kairidb";
$password = "924Apple2!";
$dbname = "kairipur_dbprin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>   