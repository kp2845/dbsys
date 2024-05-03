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
$sql = "SELECT EMP_ID, Fname, Lname, Salary, Bonus, Email From Associates";
$result = $conn->query($sql);
//echo var_dump($result) . "<br>";

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "EMP_ID: " . $row["EMP_ID"]. " - Name: " . $row["Fname"]. " " . $row["Lname"]. "<br>" . "- Salary: " . $row["Salary"]. " " . "- Bonus: " . $row["Bonus"]. "<br>";
    }
} else {
    echo "0 results";
}
//echo "Connected successfully";
?>   