<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Set the correct content type for JSON
    header('Content-Type: application/json');

    // Check if 'kecamatan_id' is provided in the GET request
    if (!isset($_GET['kecamatan_id']) || empty($_GET['kecamatan_id'])) {
        echo json_encode(['error' => 'kecamatan_id parameter is required']);
        exit;
    }

    // Sanitize the kecamatan_id parameter to prevent SQL injection
    $kecamatan_id = intval($_GET['kecamatan_id']); // Cast to integer to ensure valid input

    // Include the database connection
    include("koneksi.php");

    // Check if the connection is successful
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Database connection failed: ' . $conn->connect_error]);
        exit;
    }

    // Prepare the SQL query to select data from 'kelurahan_desa' table
    $stmt = $conn->prepare("SELECT id, nama_kelurahan FROM tbl_kelurahan WHERE id_kecamatan = ?");
    $stmt->bind_param("i", $kecamatan_id);

    // Execute the query
    if (!$stmt->execute()) {
        echo json_encode(['error' => 'Error executing query: ' . $stmt->error]);
        $stmt->close();
        $conn->close();
        exit;
    }

    // Fetch the results and output them as JSON
    $result = $stmt->get_result();
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Output the JSON-encoded data
    echo json_encode($data);

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
?>
