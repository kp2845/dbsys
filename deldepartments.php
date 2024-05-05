<?php
include "dbconn.php";
$sql = "delete from departments where dept_id=?";
$dept_id = $_REQUEST["dept_id"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $dept_id);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'departments.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>