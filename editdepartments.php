<?php
include "dbconn.php";

$sql = "SELECT * FROM departments where dept_id = ?";
$dept_id = $_REQUEST["dept_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$dept_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updatedepartments.php">
    <label for "dept_id">Department ID:</label><br>
    <input type="text" id="dept_id" name="dept_id" readonly=True value="<?php echo $row["dept_id"]?>"<br><br>

    <label for "division">Division:</label><br>
    <input type="text" id="division" name="division" value="<?php echo $row["division"]?>"<br><br>

    <label for "LOB">LOB:</label><br>
    <input type="text" id="LOB" name="LOB" value="<?php echo $row["LOB"]?>"<br><br>

    <input type="hidden" id="dept_id" name="dept_id" value="<?php echo $row["dept_id"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>