<?php
// server/db.php
// Edit these to match your local MySQL settings
$DB_HOST = '127.0.0.1';
$DB_NAME = 'cyberrisksense';
$DB_USER = 'root';
$DB_PASS = ''; // set your mysql root password

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo "DB Connection error: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
