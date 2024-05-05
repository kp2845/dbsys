<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Department ID</th><th>Division</th><th>Line of Business</th></tr>";
$sql = "select * from departments";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["dept_id"] . "</td><td>" . $row["division"] . "</td><td>"
            . $row["LOB"]
            . "</td><td><a href='deldepartments.php?dept_id=" . $row["dept_id"] . "'>Delete Record</a>"
            . "</td><td><a href='editdepartments.php?dept_id=" . $row["dept_id"] . "'>Edit Record</a>"
            . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="adddepartments.htm">Click Here to add a new Department</a>