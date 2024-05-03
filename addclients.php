<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into clients (client_name, client_region, client_revenue, client_rep) VALUES (?, ?, ?, ?)";

//set parameters to form requst
$client_name = $_REQUEST["client_name"];
$client_region = $_REQUEST["client_region"];
$client_revenue = $_REQUEST["client_revenue"];
$client_rep = $_REQUEST["client_rep"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssis", $client_name, $client_region, $client_revenue, $client_rep);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'clients.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>