<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into managers (mgr_id, budget, direct_reports, total_reports, mentee, departments_dept_id, team_name) VALUES (?, ?, ?, ?, ?, ?, ?)";

//set parameters to form requst
$mgr_id = $_REQUEST["mgr__id"];
$budget = $_REQUEST["budget"];
$direct_reports = $_REQUEST["direct_reports"];
$total_reports = $_REQUEST["total_reports"];
$mentee = $_REQUEST["mentee"];
$departments_dept_id = $_REQUEST["departments_dept_id"];
$team_name = $_REQUEST["team_name"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("idiisss", $mgr_id, $budget, $direct_reports, $total_reports, $mentee, $departments_dept_id, $team_name);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'managers.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>