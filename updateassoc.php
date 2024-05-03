<?php
include "dbconn.php";

$sql = "update Associates set Fname = ?, Lname = ?, Salary = ?, Bonus = ?, Email = ? where EMP_ID = ?";

//set parameters to form requst
$EMP_ID = $_REQUEST["EMP_ID"];
$Fname = $_REQUEST["Fname"];
$Lname = $_REQUEST["Lname"];
$Salary = $_REQUEST["Salary"];
$Bonus = $_REQUEST["Bonus"];
$Email = $_REQUEST["Email"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiisi", $Fname, $Lname, $Salary, $Bonus, $Email, $EMP_ID);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'associates.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>