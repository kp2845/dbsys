<?php
include "dbconn.php";

$sql = "SELECT * FROM locations where location_id = ?";
$location_id = $_REQUEST["location_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$location_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updatelocations.php">
    <label for "location_id">Location ID:</label><br>
    <input type="text" id="location_id" name="location_id" readonly=True value="<?php echo $row["location_id"]?>"<br><br>

    <label for "location_type">Location Type:</label><br>
    <input type="text" id="location_type" name="location_type" value="<?php echo $row["location_type"]?>"<br><br>

    <label for "location_status">Location Status:</label><br>
    <input type="text" id="location_status" name="location_status" value="<?php echo $row["location_status"]?>"<br><br>

    <label for "location_tax">Location_tax:</label><br>
    <input type="location_tax" id="location_tax" name="location_tax" value="<?php echo $row["location_tax"]?>"<br><br>

    <label for "location_capacity">Location Capacity:</label><br>
    <input type="number" id="location_capacity" name="location_capacity" value="<?php echo $row["location_capacity"]?>"<br><br>

    <input type="hidden" id="location_id" name="location_id" value="<?php echo $row["location_id"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>