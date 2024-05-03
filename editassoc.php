<?php
include "dbconn.php";

$sql = "SELECT * FROM Associates where EMP_ID = ?";
$EMP_ID = $_REQUEST["EMP_ID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$EMP_ID);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updateassoc.php">
    <label for "Fname">First name:</label><br>
    <input type="text" id="Fname" name="Fname" value="<?php echo $row["Fname"]?>"<br><br>
    
    <label for "Lname">Last name:</label><br>
    <input type="text" id="Lname" name="Lname" value="<?php echo $row["Lname"]?>"<br><br>
    
    <label for "Salary">Salary:</label><br>
    <input type="number" id="Salary" name="Salary" value="<?php echo $row["Salary"]?>"<br><br>
    
    <label for "Bonus">Bonus:</label><br>
    <input type="number" id="Bonus" name="Bonus" value="<?php echo $row["Bonus"]?>"<br><br>
    
    <label for "Email">Email:</label><br>
    <input type="Email" id="Email" name="Email" value="<?php echo $row["Email"]?>"<br><br>
    
    <input type="hidden" id="EMP_ID" name="EMP_ID" value="<?php echo $row["EMP_ID"]?>"<br><br>
    
    <input type="submit" value="Click here to Submit">
</form>