<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into Associates (Fname, Lname, Salary, Bonus, Email) VALUES (?, ?, ?, ?, ?)";

//set parameters to form requst
$Fname = $_REQUEST["Fname"];
$Lname = $_REQUEST["Lname"];
$Salary = $_REQUEST["Salary"];
$Bonus = $_REQUEST["Bonus"];
$Email = $_REQUEST["Email"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiis", $Fname, $Lname, $Salary, $Bonus, $Email);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'associates.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>