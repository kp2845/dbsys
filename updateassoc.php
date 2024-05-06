<?php
include "dbconn.php";

$sql = "update Associates set Fname = ?, Lname = ?, Salary = ?, Bonus = ?, Email = ?, Mentor = ?, Assoc_Street = ?, Assoc_City = ?, Assoc_State = ?, Assoc_Zip = ? where EMP_ID = ?";

//set parameters to form requst
$EMP_ID = $_REQUEST["EMP_ID"];
$Fname = $_REQUEST["Fname"];
$Lname = $_REQUEST["Lname"];
$Salary = $_REQUEST["Salary"];
$Bonus = $_REQUEST["Bonus"];
$Email = $_REQUEST["Email"];
$Mentor = $_REQUEST["Mentor"];
$Assoc_Street = $_REQUEST["Assoc_Street"];
$Assoc_City = $_REQUEST["Assoc_City"];
$Assoc_State = $_REQUEST["Assoc_State"];
$Assoc_Zip = $_REQUEST["Assoc_Zip"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiisssssii", $Fname, $Lname, $Salary, $Bonus, $Email, $Mentor, $Assoc_Street, $Assoc_City, $Assoc_State, $Assoc_Zip, $EMP_ID);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'associates.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>