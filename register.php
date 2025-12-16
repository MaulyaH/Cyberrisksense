<?php



include('../db_connect.php'); 
$pdo = $conn; 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
    header('Location: ../index.html'); 
    exit; 
}


$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


if (!$email || !$password) { 
    echo "Missing fields"; 
    exit; 
}


$hash = password_hash($password, PASSWORD_DEFAULT);


$stmt = $pdo->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())");

try {
    $stmt->execute([$name, $email, $hash]);
  
    header('Location: ../index.html');
    exit;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
