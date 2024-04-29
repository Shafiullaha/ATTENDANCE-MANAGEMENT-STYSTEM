<?php
// Simulating some data retrieval process
$data = array(
    'message' => 'This is a sample response from example.php',
    'timestamp' => time()
);

// Setting response headers to indicate JSON content
header('Content-Type: application/json');

// Outputting the JSON response
echo json_encode($data);
?>