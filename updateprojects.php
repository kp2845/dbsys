<?php
include "dbconn.php";

$sql = "update projects set Associates_EMP_ID = ?, role = ?, stakeholder = ?, proj_budget = ?, proj_status = ?, method = ?, proj_start = ?, proj_end = ? where project_id = ?";

//set parameters to form requst
$Associates_EMP_ID = $_REQUEST["Associates_EMP_ID"];
$role = $_REQUEST["role"];
$stakeholder = $_REQUEST["stakeholder"];
$proj_budget = $_REQUEST["proj_budget"];
$proj_status = $_REQUEST["proj_status"];
$method = $_REQUEST["method"];
$proj_start = $_REQUEST["proj_start"];
$proj_end = $_REQUEST["proj_end"];
$project_id = $_REQUEST["project_id"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("issdssssi", $Associates_EMP_ID, $role, $stakeholder, $proj_budget, $proj_status, $method, $proj_start, $proj_end, $project_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'projects.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>