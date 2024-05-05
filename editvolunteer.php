<?php
include "dbconn.php";

$sql = "SELECT * FROM Volunteering where volunteering_id = ?";
$volunteering_id = $_REQUEST["volunteering_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$volunteering_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updatevolunteer.php">
    <label for "volunteering_id">Volunteering ID:</label><br>
    <input type="number" id="volunteering_id" name="volunteering_id" readonly=True value="<?php echo $row["volunteering_id"]?>"<br><br>
    
    <label for "Type">Type:</label><br>
    <input type="text" id="Type" name="Type" value="<?php echo $row["Type"]?>"<br><br>
    
    <label for "Hours">Hours:</label><br>
    <input type="number" id="Hours" name="Hours" value="<?php echo $row["Hours"]?>"<br><br>
    
    <label for "Area">Area:</label><br>
    <input type="text" id="Area" name="Area" value="<?php echo $row["Area"]?>"<br><br>
    
    <label for "volunteer">Volunteer:</label><br>
    <input type="text" id="volunteer" name="volunteer" value="<?php echo $row["volunteer"]?>"<br><br>
    
    <input type="hidden" id="volunteering_id" name="volunteering_id" value="<?php echo $row["volunteering_id"]?>"<br><br>
    
    <input type="submit" value="Click here to Submit">
</form>