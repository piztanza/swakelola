<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// use chillerlan\QRCode\QRCode;
// use chillerlan\QRCode\Output\QRImage;

// Check if the form is submitted
if (isset($_POST['register'])) {
    // echo dirname(__DIR__) . "/qr_codes";

//     $data = "https://pekanrisetsawit.id/qrscan.php?id=2&mail='apa@mail.com'"; // Replace with your own data
//     // Folder path to save the QR code image
//     $folderPath = 'qr_codes/'; // Create a 'qr_codes' folder in your project directory

//     // Create an instance of QRCode
//     $qrcode = new QRCode($data);

//     // Output the QR code as an image
//     $renderer = new QRImage($qrcode);
//     $image = $renderer->dump();

//     // Ensure the folder exists, or create it if necessary
//     if (!is_dir($folderPath)) {
//         mkdir($folderPath, 0755, true);
//     }

// // Generate a unique filename for the QR code (e.g., using timestamp)
// $filename = $folderPath . 'qr_code_' . time() . '.png';

// // Save the QR code image to the specified folder
// file_put_contents($filename, $image);
    // Include your database connection code here
    // Replace 'DB_HOST', 'DB_USER', 'DB_PASSWORD', and 'DB_NAME' with your actual database credentials
    include("koneksi.php");

    // Check if the connection was successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Get user input from the form
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $instansi = mysqli_real_escape_string($conn, $_POST['instansi']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $status = 'registered';
    $status_id = 0;
    
    $kode_verifikasi = str_pad(mt_rand(000000,999999), 6, '0', STR_PAD_LEFT);

    $dibuat = date('Y-m-d H:i:s');

    // handle empty data
    if(empty($fullname) || empty($instansi) || empty($email) || empty($phone)) {
        echo "
            <script>
                alert('the datas are empty');
                window.location.href = '../index.php';
            </script>
        ";
        exit;
    }

    // handle duplicate email
    $query_get_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($query_get_email) > 0) {
        echo "
            <script>
                alert('Email already exist !');
                window.location.href = '../index.php';
            </script>
        ";
        exit;
    }

    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    
    // include(str_replace("\\", "/",dirname(__FILE__)) . "/qrcode.php");
    require_once "../qrcode.php";
    $username = explode("@", $email);
    $username = $username[0];
    
    
    // Insert user data into the database
    $sql = "INSERT INTO users (created_at, updated_at, fullname, email, phone, role_id, instansi, status, status_id, vote_opportunity, kode_verifikasi, status_verifikasi) VALUES ('$dibuat', '$dibuat', '$fullname', '$email', '$phone', '3', '$instansi', '$status', '$status_id', 0, '$kode_verifikasi', 0)";
    // $sql = "INSERT INTO users (created_at, updated_at, fullname, email, phone, role_id, instansi, status, status_id, vote_opportunity, kode_verifikasi, status_verifikasi) VALUES ('$dibuat', '$dibuat', '$fullname', '$email', '$phone', '3', '$instansi', '$status', '$status_id', 1, '$kode_verifikasi', 0)";
    
    if (mysqli_query($conn, $sql)) {
        $qrCodeFilePath = 'https://pekanrisetsawit.id/qr_codes/' . $username . '_qrcode.png';
        // $qrCodeFilePath = '../qr_codes/' . $username . '_qrcode.png';
        
        $id = mysqli_insert_id($conn); // Mengambil ID terakhir yang di-generate
        
        // create code registration for handle in verify email
        $isiCard = "https://pekanrisetsawit.id/card-user.php?user_id=$id"; 
        // QR code configuration (size, error correction, etc.)
        $eccLevel2 = 'L'; // Error correction level (L, M, Q, H)
        $pixelSize2 = 10; // Pixel size
        $margin2 = 4; // Margin around the QR code


        // Path to save the QR code image
        // $filePath = "qr_codes/" . $email . "_qrcode.png"; // Relative path to your server's root directory
        $filePathCard = str_replace("\\", "/",dirname(__DIR__, 1)) . '/qr_codes/idcard/' . $username . '_qrcode.png';

        // Generate the QR code
        QRcode::png($isiCard, $filePathCard, $eccLevel2, $pixelSize2, $margin2);

        // Send the email with the QR code
        $mail = new PHPMailer(true);

        try {
            // Server settings
            // ...

            // $emailSubject = 'Registration Successful';
            // $emailBody = '
            // <!DOCTYPE html>
            // <html>
            // <head>
            //     <style>
            //         /* Add CSS styles for the email */
            //         body {
            //             font-family: Arial, sans-serif;
            //             padding: 20px;
            //             border: 2px solid #ddd;
            //             border-radius: 10px;
            //         }
            //         h1 {
            //             color: #333;
            //         }
            //         .qr-code {
            //             text-align: left;
            //             margin-top: 20px;
            //         }
            //         .qr-code img {
            //             max-width: 200px;
            //         }
            //     </style>
            // </head>
            // <body>
            //     <h1>Registration Successful</h1>
            //     <p>Kepada ' . $fullname . ',</p>
            //     <p>Selamat proses registrasi anda sebagai pengunjung Pekan Riset Sawit Indonesia Tahun 2024 telah berhasil.</p>
            //     <br />
            //     <p>Silahkan scan barcode dilokasi acara</p>
            //     <br />
            //     <p>Detail Registrasi:</p>
            //     <ul>
            //         <li><strong>Acara:</strong> Pekan Riset Sawit Indonesia Tahun 2024</li>
            //         <li><strong>Lokasi Acara:</strong> BNDCC Nusa Dua, Bali</li>
            //         <li><strong>Waktu:</strong> 3-4 Oktober 2024</li>
            //         <li><strong>Kode Registrasi:</strong> 737424' . $id . '</li>
            //         <li><strong>Nama:</strong> ' . $fullname . '</li>
            //         <li><strong>Barcode:</strong></li>

            //     </ul>
            //     <div class="qr-code">
            //     <img src="' . $qrCodeFilePath . '" alt="QR Code">
            //     <p>*jika barcode tidak muncul, silahkan klik <a href="https://pekanrisetsawit.id/home-barcode.php?id=' . $id . '&mail=' . $email . '&name=' . $fullname . '&instansi=' . $instansi . '">tautan ini</a></p>
            //     </div>
            // </body>
            // </html>
            // ';

            // handle verify email
            $emailSubject2 = 'Get Code Verification Email';
            $emailBody2 = '
            <!DOCTYPE html>
            <html>
                <head>
                <style>
                    /* Add CSS styles for the email */
                    body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                    border: 2px solid #ddd;
                    border-radius: 10px;
                    }
                    h1 {
                    color: #333;
                    }
                    .verify-email {
                    text-align: left;
                    margin-top: 20px;
                    }
                    .qr-code img {
                    max-width: 200px;
                    }
                </style>
                </head>
                <body>
                <h1>Kode Verifikasi Email</h1>
                <p>Kepada ' . $fullname . ',</p>
                <p>Selamat proses registrasi anda sebagai pengunjung Pekan Riset Sawit Indonesia Tahun 2024 telah berhasil.</p>
                <br />
                <p>Kode Verifikasi Email Anda adalah : <b>'.$kode_verifikasi.'</b></p>
                <br />
                <p>Silahkan untuk melakukan verifikasi Email anda terlebih dahulu dengan link dibawah ini</p>
                
                <div class="verify-email">
                    <a href="https://pekanrisetsawit.id/auto-verification.php?id='.$id.'" style="background-color: #005256; color: #fff; text-decoration: none; padding: 16px 24px; border: none; outline: none; box-shadow: 3px 7px 9px 0px #00000050; cursor: pointer;">
                    Verifikasi Email
                    </a>
                </div>
                </body>
            </html>
            ';

            // ...

            // Send the email
            $emailRecipient = $email; // Replace with the recipient's email address
            $headers = "From: registrasi@pekanrisetsawit.id\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            
            // Send the email using the mail function (you may need to configure your mail server)
            // mail($emailRecipient, $emailSubject, $emailBody, $headers);
            
            // Send the email using the mail function (you may need to configure your mail server)
            mail($emailRecipient, $emailSubject2, $emailBody2, $headers);

            echo "
                <script>
                    alert('Registrasi Berhasil !');
                    window.location.href = '../after-register.php';
                </script>
            ";
            // echo 'Message has been sent';
            // header("Location: ../after-register.php");
            exit;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
