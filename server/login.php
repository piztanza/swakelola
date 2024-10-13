<?php
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Include your database connection code here
    // Replace 'DB_HOST', 'DB_USER', 'DB_PASSWORD', and 'DB_NAME' with your actual database credentials
    include("koneksi.php");

    // Check if the connection was successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Get user input from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $password = $_POST['password'];

    // Query the database to retrieve the user with the given email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            // Password is correct; login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['instansi'] = $user['instansi'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['status_verifikasi'] = $user['status_verifikasi'];
            
            header("Location: ../home.php"); // Redirect to a dashboard or protected page
        } else {
            // Invalid credentials; display an error message
            echo "
                <script>
                    alert('Invalid Email !');
                    window.location.href = '../index.php';
                </script>
            ";
        exit;
        }
    } else {
        echo "
            <script>
                alert('Email doesn\'t exist !');
                window.location.href = '../index.php';
            </script>
        ";
        exit;
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
