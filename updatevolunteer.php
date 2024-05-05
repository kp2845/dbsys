<?php
include "dbconn.php";

$sql = "update Volunteering set Type = ?, Area = ?, Hours = ?, volunteer = ? where volunteering_id = ?";

//set parameters to form requst
$volunteering_id = $_REQUEST["volunteering_id"];
$Type = $_REQUEST["Type"];
$Area = $_REQUEST["Area"];
$Hours = $_REQUEST["Hours"];
$volunteer = $_REQUEST["volunteer"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisi", $Type, $Area, $Hours, $volunteer, $volunteering_id);
echo "<b>Adding New Records......Please wait</b><br>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'volunteering.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>