<?php
header("Cache-Control: no-cache");
/*header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
*/
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