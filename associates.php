<?php
include "menu.php";
include "dbconn.php";
echo "<p><h3>You are viewing the Audit Report</h3></p>";
echo "<table border=1><border-color=#FE5302><tr><th>First Name</th><th>Last Name</th><th>Salary</th><th>Bonus</th><th>Email</th><th>Mentor</th><th>Associate Street</th><th>Associate City</th><th>Associate State</th><th>Associate Zip</th></tr>";
$sql = "select * from Associates";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Fname"] . "</td><td>" . $row["Lname"] . "</td><td>" 
        . $row["Salary"] . "</td><td>" . $row["Bonus"] . "</td><td>" . $row["Email"] . "</td><td>"
            . $row["Mentor"] . "</td><td>" . $row["Assoc_Street"] . "</td><td>" . $row["Assoc_City"] . "</td><td>"
            . $row["Assoc_State"] . "</td><td>" . $row["Assoc_Zip"]
        . "</td><td><a href='delassoc.php?EMP_ID=" . $row["EMP_ID"] . "'>Delete Record</a>"
        . "</td><td><a href='editassoc.php?EMP_ID=" . $row["EMP_ID"] . "'>Edit Record</a>" 
        . "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addassociate.htm">Click Here to add a new Associate</a>