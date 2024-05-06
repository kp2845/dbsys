<?php
include "menu.php";
include "dbconn.php";
echo "<p><h3>You are viewing the Audit Report</h3></p>";
echo "<table border=1><border-color=#FE5302><tr><th>Old id</th><th>Old First Name</th><th>Old Last Name</th><th>Old Email</th></tr>";
$sql = "select * from Associates_Audit";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["old_first_name"] . "</td><td>"
            . $row["old_last_name"] . "</td><td>" . $row["old_email"]  . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>