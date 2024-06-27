<?php
// Get the posted data
$data = json_decode(file_get_contents('php://input'), true);

// File path (adjust as needed)
$filePath = 'port.txt';

// Write the new text to the file
file_put_contents($filePath, $data['text']);

// Return a success message
echo "Changes saved successfully.";
?>
