<?php
include "dbconn.php";
$sql = "delete from Clients where client_id=?";
$EMP_ID = $_REQUEST["client_id"];

//bind values to stop from malicious additions
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $client_id);

//check if function worked and then return to associates page
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'clients.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>