<?php
include "menu.php";
include "dbconn.php";
echo "<table border=1><border-color=#FE5302><tr><th>Employee ID</th><th>Associate Score</th><th>Leader Score</th><th>University Score</th><th>Education ID</th></tr>";
$sql = "select * from Education";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Emp_ID"] . "</td><td>" . $row["assoc_score"] . "</td><td>"
            . $row["leader_score"] . "</td><td>" . $row["univ_score"] . "</td><td>" . $row["education_id"]
            . "</td><td><a href='deleducation.php?education_id=" . $row["education_id"] . "'>Delete Record</a>"
            . "</td><td><a href='editeducation.php?volunteering_id=" . $row["education_id"] . "'>Edit Record</a>"
            . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addeducation.htm">Click Here to add a new Education Item</a>