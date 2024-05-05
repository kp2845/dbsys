<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into locations (location_id, location_type, location_status, location_tax, location_capacity) VALUES (?, ?, ?, ?, ?)";

//set parameters to form requst
$location_id = $_REQUEST["location_id"];
$location_type = $_REQUEST["location_type"];
$location_status = $_REQUEST["location_status"];
$location_tax = $_REQUEST["location_tax"];
$location_capacity = $_REQUEST["location_capacity"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $location_id, $location_type, $location_status, $location_tax, $location_capacity);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'locations.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>