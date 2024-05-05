<?php
include "dbconn.php";

$sql = "SELECT * FROM projects where project_id = ?";
$project_id = $_REQUEST["project_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$project_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updateprojects.php">
    <label for "project_id">Project ID:</label><br>
    <input type="number" id="project_id" name="project_id" readonly=True value="<?php echo $row["project_id"]?>"<br><br>

    <label for "Associates_EMP_ID">Associate ID:</label><br>
    <input type="number" id="Associates_EMP_ID" name="Associates_EMP_ID" value="<?php echo $row["Associates_EMP_ID"]?>"<br><br>

    <label for "role">Role:</label><br>
    <input type="text" id="role" name="role" value="<?php echo $row["role"]?>"<br><br>

    <label for "stakeholder">Stakeholder:</label><br>
    <input type="text" id="stakeholder" name="stakeholder" value="<?php echo $row["stakeholder"]?>"<br><br>

    <label for "proj_budget">Project Budget:</label><br>
    <input type="number" id="proj_budget" name="proj_budget" value="<?php echo $row["proj_budget"]?>"<br><br>

    <label for "proj_status">Project Status:</label><br>
    <input type="text" id="proj_status" name="proj_status" value="<?php echo $row["proj_status"]?>"<br><br>

    <label for "method">Method:</label><br>
    <input type="text" id="method" name="method" value="<?php echo $row["method"]?>"<br><br>

    <label for "proj_start">Project Start:</label><br>
    <input type="date" id="proj_start" name="proj_start" value="<?php echo $row["proj_start"]?>"<br><br>

    <label for "proj_end">Project End:</label><br>
    <input type="date" id="proj_end" name="proj_end" value="<?php echo $row["proj_end"]?>"<br><br>

    <input type="hidden" id="project_id" name="project_id" value="<?php echo $row["project_id"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>