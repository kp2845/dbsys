<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into projects (project_id, Associates_EMP_ID, role, stakeholder, proj_budget, proj_status, method, proj_start, proj_end) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

//set parameters to form requst
$project_id = $_REQUEST["project_id"];
$Associates_EMP_ID = $_REQUEST["Associates_EMP_ID"];
$role = $_REQUEST["role"];
$stakeholder = $_REQUEST["stakeholder"];
$proj_budget = $_REQUEST["proj_budget"];
$proj_status = $_REQUEST["proj_status"];
$method = $_REQUEST["method"];
$proj_start = $_REQUEST["proj_start"];
$proj_end = $_REQUEST["proj_end"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("iissdssss", $project_id, $Associates_EMP_ID, $role, $stakeholder, $proj_budget, $proj_status, $method, $proj_start, $proj_end);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'projects.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>