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

    <label for "Mentor">Mentor:</label><br>
    <input type="text" id="Mentor" name="Mentor" value="<?php echo $row["Mentor"]?>"<br><br>

    <label for "Assoc_Street">Associate Street:</label><br>
    <input type="text" id="Assoc_Street" name="Assoc_Street" value="<?php echo $row["Assoc_Street"]?>"<br><br>

    <label for "Assoc_City">Associate City:</label><br>
    <input type="text" id="Assoc_City" name="Assoc_City" value="<?php echo $row["Assoc_City"]?>"<br><br>

    <label for "Assoc_State">Associate State:</label><br>
    <input type="text" id="Assoc_State" name="Assoc_State" value="<?php echo $row["Assoc_State"]?>"<br><br>

    <label for "Assoc_Zip">Associate Zip:</label><br>
    <input type="number" id="Assoc_Zip" name="Assoc_Zip" value="<?php echo $row["Assoc_Zip"]?>"<br><br>

    <input type="hidden" id="EMP_ID" name="EMP_ID" value="<?php echo $row["EMP_ID"]?>"<br><br>
    
    <input type="submit" value="Click here to Submit">
</form>