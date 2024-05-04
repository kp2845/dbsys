<?php
include "dbconn.php";

$sql = "SELECT * FROM clients where client_id = ?";
$EMP_ID = $_REQUEST["client_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$client_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
}

?>
<form action="updateclients.php">
    <label for "client_name">Client name:</label><br>
    <input type="text" id="client_name" name="client_name" value="<?php echo $row["client_name"]?>"<br><br>

    <label for "client_region"Client Region:</label><br>
    <input type="text" id="client_region" name="client_region" value="<?php echo $row["client_region"]?>"<br><br>

    <label for "client_revenue">Client Revenue:</label><br>
    <input type="number" id="client_revenue" name="client_revenue" value="<?php echo $row["client_revenue"]?>"<br><br>

    <label for "client_rep">Client Representative:</label><br>
    <input type="text" id="client_rep" name="client_rep" value="<?php echo $row["client_rep"]?>"<br><br>

    <input type="hidden" id="client_id" name="client_id" value="<?php echo $row["client_id"]?>"<br><br>

    <input type="submit" value="Click here to Submit">
</form>