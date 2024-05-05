<?php
include "dbconn.php";

$sql = "update Education set assoc_score = ?, leader_score = ?, univ_score = ?,  = ? where education_id = ?";

//set parameters to form requst
//$education_id = $_REQUEST["education_id"]; Not sure if this will be needed
$assoc_score = $_REQUEST["assoc_score"];
$leader_score = $_REQUEST["leader_score"];
$univ_score = $_REQUEST["univ_score"];
$education_id = $_REQUEST["education_id"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiss", $assoc_score, $leader_score, $univ_score,  $education_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'education.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>