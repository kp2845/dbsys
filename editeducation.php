<?php
include "dbconn.php";

$sql = "SELECT * FROM Education where education_id = ?";
$education_id = $_REQUEST["education_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$education_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updateeducation.php">
    <label for "Emp_ID">Education ID:</label><br>
    <input type="number" id="Emp_ID" name="Emp_ID" readonly=True value="<?php echo $row["Emp_ID"]?>"<br><br>

    <label for "assoc_score">Associate Score:</label><br>
    <input type="number" id="assoc_score" name="assoc_score" value="<?php echo $row["assoc_score"]?>"<br><br>

    <label for "leader_score">Leader Score:</label><br>
    <input type="number" id="leader_score" name="leader_score" value="<?php echo $row["leader_score"]?>"<br><br>

    <label for "univ_score">University Score:</label><br>
    <input type="text" id="univ_score" name="univ_score" value="<?php echo $row["univ_score"]?>"<br><br>

    <label for "education_id">Education ID:</label><br>
    <input type="text" id="education_id" name="education_id" readonly=True value="<?php echo $row["education_id"]?>"<br><br>

    <input type="hidden" id="education_id" name="education_id" value="<?php echo $row["education_id"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>