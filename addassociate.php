<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into Associates (Fname, Lname, Salary, Bonus, Email, Mentor, Assoc_Street, Assoc_City, Assoc_State, Assoc_Zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//set parameters to form requst
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
$stmt->bind_param("ssiisssssi", $Fname, $Lname, $Salary, $Bonus, $Email, $Mentor, $Assoc_Street, $Assoc_City, $Assoc_State, $Assoc_Zip);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'associates.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>