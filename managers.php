<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Manager ID</th><th>Budget</th><th>Direct Reports</th><th>Total Reports</th><th>Mentee</th><th>Department ID</th><th>Team Name</th></tr>";
$sql = "select * from managers";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td><td>" . $row["mgr_id"] . "</td><td>" . $row["budget"] . "</td><td>"
            . $row["direct_reports"] . "</td><td>" . $row["total_reports"] . "</td><td>" . $row["mentee"] . "</td><td>"
            . $row["departments_dept_id"] . "</td><td>" . $row["team_name"]
            . "</td><td><a href='delmanagers.php?mgr_id=" . $row["team_name"] . "'>Delete Record</a>"
            . "</td><td><a href='editmanagers.php?mgr_id=" . $row["team_name"] . "'>Edit Record</a>"
            . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addmanagers.htm">Click Here to add a new Volunteering Event</a>