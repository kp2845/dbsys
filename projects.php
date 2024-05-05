<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Project ID</th><th>Associate ID</th><th>Role</th><th>Stakeholder</th><th>Project Budget</th><th>Project _Status</th><th>Method</th><th>Start Date</th><th>End Date</th></tr>";
$sql = "select * from projects";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["project_id"] . "</td><td>" . $row["Associates_EMP_ID"] . "</td><td>"
            . $row["role"] . "</td><td>" . $row["stakeholder"] . "</td><td>" . $row["proj_budget"] . "</td><td>"
            . $row["proj_status"] . "</td><td>" . $row["method"] . "</td><td>" . $row["proj_start"] . "</td><td>"
            . $row["proj_end"]
            . "</td><td><a href='delprojects.php?project_id=" . $row["project_id"] . "'>Delete Record</a>"
            . "</td><td><a href='editprojects.php?project_id=" . $row["project_id"] . "'>Edit Record</a>"
            . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addprojects.htm">Click Here to add a new Project</a>