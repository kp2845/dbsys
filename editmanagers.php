<?php
include "dbconn.php";

$sql = "SELECT * FROM managers where team_name = ?";
$team_name = $_REQUEST["team_name"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$team_name);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updatemanagers.php">
    <label for "mgr_id">Manager ID:</label><br>
    <input type="number" id="mgr_id" name="mgr_id" readonly=True value="<?php echo $row["mgr_id"]?>"<br><br>

    <label for "Type">Budget:</label><br>
    <input type="number" id="budget" name="budget" value="<?php echo $row["budget"]?>"<br><br>

    <label for "direct_reports">Direct Reports:</label><br>
    <input type="number" id="direct_reports" name="direct_reports" value="<?php echo $row["direct_reports"]?>"<br><br>

    <label for "total_reports">Total Reports:</label><br>
    <input type="number" id="total_reports" name="total_reports" value="<?php echo $row["total_reports"]?>"<br><br>

    <label for "mentee">Mentee:</label><br>
    <input type="text" id="mentee" name="mentee" value="<?php echo $row["mentee"]?>"<br><br>

    <label for "departments_dept_id">Department ID:</label><br>
    <input type="text" id="departments_dept_id" name="departments_dept_id" readonly=True value="<?php echo $row["departments_dept_id"]?>"<br><br>

    <label for "team_name">Team Name:</label><br>
    <input type="text" id="team_name" name="team_name" value="<?php echo $row["team_name"]?>"<br><br>

    <input type="hidden" id="team_name" name="team_name" value="<?php echo $row["team_name"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>