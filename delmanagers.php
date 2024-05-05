<?php
include "dbconn.php";
$sql = "delete from managers where team_name=?";
$team_name = $_REQUEST["team_name"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $team_name);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'managers.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>