<?php
include "dbconn.php";
$sql = "delete from Volunteering where volunteering_id=?";
$volunteering_id = $_REQUEST["volunteering_id"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $volunteering_id);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'volunteering.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>