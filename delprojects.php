<?php
include "dbconn.php";
$sql = "delete from projects where project_id=?";
$project_id = $_REQUEST["project_id"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $project_id);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'projects.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>