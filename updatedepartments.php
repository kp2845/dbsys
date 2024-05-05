<?php
include "dbconn.php";

$sql = "update departments set division = ?, LOB = ? where dept_id = ?";

//set parameters to form requst
$dept_id = $_REQUEST["dept_id"];
$division = $_REQUEST["division"];
$LOB = $_REQUEST["LOB"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $division, $LOB, $dept_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'departments.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>