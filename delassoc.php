<?php
include "dbconn.php";
$sql = "delete from Associates where EMP_ID=?";
$EMP_ID = $_REQUEST["EMP_ID"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $EMP_ID);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'associates.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>