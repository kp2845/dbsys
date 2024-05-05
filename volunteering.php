<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Volunteering ID</th><th>Type</th><th>Hours</th><th>Area</th><th>Volunteer</th></tr>";
$sql = "select * from Volunteering";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["volunteering_id"] . "</td><td>" . $row["Type"] . "</td><td>" 
        . $row["Hours"] . "</td><td>" . $row["Area"] . "</td><td>" . $row["volunteer"] 
        . "</td><td><a href='delvolunteer.php?volunteering_id=" . $row["volunteering_id"] . "'>Delete Record</a>" 
        . "</td><td><a href='editvolunteer.php?volunteering_id=" . $row["volunteering_id"] . "'>Edit Record</a>" 
        . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addvolunteer.htm">Click Here to add a new Volunteering Event</a>