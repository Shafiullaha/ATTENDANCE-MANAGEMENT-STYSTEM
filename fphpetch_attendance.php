<html>
    <body>
<?php
$attendanceData = array(
    array("name" => "John Doe", "status" => "Present"),
    array("name" => "Jane Smith", "status" => "Absent"),
    array("name" => "Alice Johnson", "status" => "Present")
);
header('Content-Type: application/json');
echo json_encode($attendanceData);
?>
</body>
</html>
