<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'Alok4Jaiswal');
define('DB_PASS', '1234');
define('DB_NAME', 'cricket_playersDB');

// Enable mysqli exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset("utf8mb4"); // Set charset for better compatibility
} catch (mysqli_sql_exception $e) {
    die("Database connection failed: " . htmlspecialchars($e->getMessage()));
}
?>
