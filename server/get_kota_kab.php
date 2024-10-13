<?php
    // Enable error reporting (temporarily for debugging)
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header('Content-Type: application/json');

    // Include the database connection
    include("koneksi.php");

    // Check if the connection is successful
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Database connection failed: ' . $conn->connect_error]);
        exit;
    }

    // Run the query to get the city data
    $result = $conn->query("SELECT id, nama_kota_kab FROM tbl_kota_kab");

    if (!$result) {
        // Log the error and send a JSON error response
        error_log("Database query failed: " . $conn->error);
        echo json_encode(['error' => 'Error executing query']);
        exit;
    }

    // Fetch the data
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Output the JSON-encoded data
    echo json_encode($data);

    // Close the database connection
    $conn->close();
?>
