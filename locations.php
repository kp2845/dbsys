<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Location ID</th><th>Location Type</th><th>Location Status</th><th>Location Tax</th><th>Location Capacity</th></tr>";

$sql = "select * from locations";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["location_id"] . "</td><td>" . $row["location_type"] . "</td><td>"
        . $row["location_status"] . "</td><td>" . $row["location_Tax"] . "</td><td>" . $row["location_capacity"]
        . "</td><td><a href='dellocations.php?location_id=" . $row["location_id"] . "'>Delete Record</a>"
        . "</td><td><a href='editlocations.php?location_id=" . $row["location_id"] . "'>Edit Record</a>"
        . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addvolunteer.htm">Click Here to add a new Location</a>