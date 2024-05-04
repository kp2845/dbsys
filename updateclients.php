<?php
include "dbconn.php";

$sql = "update clients set client_name = ?, client_region = ?, client_revenue = ?, client_rep = ? where EMP_ID = ?";

//set parameters to form requst
$client_id = $_REQUEST["client_id"];
$client_name = $_REQUEST["client_name"];
$client_region = $_REQUEST["Lname"];
$client_revenue = $_REQUEST["Salary"];
$client_rep = $_REQUEST["Bonus"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiisi", $client_name, $client_region, $client_revenue, $client_rep, $client_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'clients.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>