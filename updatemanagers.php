<?php
include "dbconn.php";

$sql = "update managers set mgr_id = ?, budget = ?, direct_reports = ?, total_reports = ?, mentee = ?, departments_dept_id = ?, team_name = ?,  where team_name = ?";

//set parameters to form requst
$team_name = $_REQUEST["team_name"];
$mgr_id = $_REQUEST["mgr_id"];
$budget = $_REQUEST["budget"];
$direct_reports = $_REQUEST["direct_reports"];
$total_reports = $_REQUEST["total_reports"];
$mentee = $_REQUEST["mentee"];
$departments_dept_id = $_REQUEST["departments_dept_id"];
$team_name = $_REQUEST["team_name"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("sidiiss", $team_name, $mgr_id, $budget, $direct_reports, $total_reports, $mentee, $departments_dept_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'managers.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>