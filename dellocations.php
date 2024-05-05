<?php
include "dbconn.php";
$sql = "delete from locations where location_id=?";
$location_id = $_REQUEST["location_id"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $location_id);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'locations.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>