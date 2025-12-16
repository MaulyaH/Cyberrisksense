<?php
include('db_connect.php');

try {
    echo "✅ Connected successfully to database: $dbname";
} catch(PDOException $e) {
    echo "❌ DB connection failed: " . $e->getMessage();
}
?>
