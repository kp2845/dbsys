<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into Education (Emp_ID, assoc_score, leader_score, univ_score, education_id) VALUES (?, ?, ?, ?, ?)";

//set parameters to form requst
$Emp_ID = $_REQUEST["Emp_ID"];
$assoc_score = $_REQUEST["assoc_score"];
$leader_score = $_REQUEST["leader_score"];
$univ_score = $_REQUEST["univ_score"];
$education_id = $_REQUEST["education_id"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiiss", $Emp_ID, $assoc_score, $leader_score, $univ_score, $education_id);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'education.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>