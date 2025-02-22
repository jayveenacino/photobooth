<?php
session_start();

// Get the JSON data sent by the AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Save the photos to the session
if (isset($data['photos'])) {
    $_SESSION['photos'] = $data['photos']; // Store photos in session
}

// Return a success response
echo json_encode(['status' => 'success']);
?>
