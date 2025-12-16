<?php

require 'db.php';
if($_SERVER['REQUEST_METHOD'] !== 'POST'){ header('Location: ../index.html'); exit; }

$score = intval($_POST['score'] ?? 0);
$code = $_POST['code'] ?? null;
$email = $_POST['email'] ?? null;

$stmt = $pdo->prepare("INSERT INTO quiz_results (score,code,email,created_at) VALUES (?,?,?,NOW())");
$stmt->execute([$score,$code,$email]);

header('Location: ../index.html');
?>

