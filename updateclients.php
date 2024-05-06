<?php
include "dbconn.php";

$sql = "update clients set client_name = ?, client_region = ?, client_revenue = ?, client_rep = ? where client_id = ?";

//set parameters to form requst
$client_id = $_REQUEST["client_id"];
$client_name = $_REQUEST["client_name"];
$client_region = $_REQUEST["client_region"];
$client_revenue = $_REQUEST["client_revenue"];
$client_rep = $_REQUEST["client_rep"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisi", $client_name, $client_region, $client_revenue, $client_rep, $client_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'clients.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>