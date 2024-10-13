<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Set the correct content type for JSON
    header('Content-Type: application/json');

    // Check if 'kota_kab_id' is provided in the GET request
    if (!isset($_GET['kota_kab_id']) || empty($_GET['kota_kab_id'])) {
        echo json_encode(['error' => 'kota_kab_id parameter is required']);
        exit;
    }

    // Sanitize the kota_kab_id parameter to prevent SQL injection
    $kota_kab_id = intval($_GET['kota_kab_id']); // Cast to integer to ensure valid input

    // Include the database connection
    include("koneksi.php");

    // Check if the connection is successful
    if ($conn->connect_error) {
        echo json_encode(['error' => 'Database connection failed: ' . $conn->connect_error]);
        exit;
    }

    // Prepare the SQL query to select data from 'kecamatan' table
    $stmt = $conn->prepare("SELECT id, nama_kecamatan FROM tbl_kecamatan WHERE id_kota_kab = ?");
    $stmt->bind_param("i", $kota_kab_id);

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
