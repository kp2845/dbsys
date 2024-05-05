<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into departments (dept_id, division, LOB) VALUES (?, ?, ?)";

//set parameters to form requst
$dept_id = $_REQUEST["dept_id"];
$division = $_REQUEST["division"];
$LOB = $_REQUEST["LOB"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $dept_id, $division, $LOB);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'departments.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>