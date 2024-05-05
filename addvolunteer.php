<?php
include "dbconn.php";

//var_dump($_REQUEST);
$sql = "insert into Volunteering (volunteering_id, Type, Hours, Area, volunteer) VALUES (?, ?, ?, ?, ?)";

//set parameters to form requst
$volunteering_id = $_REQUEST["volunteering_id"];
$Type = $_REQUEST["Type"];
$Hours = $_REQUEST["Hours"];
$Area = $_REQUEST["Area"];
$volunteer = $_REQUEST["volunteer"];

//prepare and bind values
$stmt = $conn->prepare($sql);
$stmt->bind_param("isiss", $volunteering_id, $Type, $Hours, $Area, $volunteer);
echo "<b>Adding New Records......Please wait</b>";
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'volunteering.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>