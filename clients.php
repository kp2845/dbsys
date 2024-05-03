<?php
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Client Name</th><th>Region</th><th>Revenue</th><th>Representative</th></tr>";
$sql = "select * from clients";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["client_name"] . "</td><td>" . $row["client_region"] . "</td><td>" . $row["client_revenue"] . "</td><td>" . $row["client_rep"]
        . "</td><td><a href='delclients.php?client_id=" . $row["client_id"] . "'>Delete Record</a>"
        . "</td><td><a href='editclients.php?client_id=" . $row["client_id"] . "'>Edit Record</a>"
        . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addclients.htm">Click Here to add a new Client</a>