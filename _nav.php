<?php

session_start();
$loggedIn = isset($_SESSION['user_id']);
$userName = $_SESSION['user_name'] ?? '';
?>
<nav class="nav">
  <div class="nav-left">
    <a class="brand" href="index.php">
      <span class="shield">🔷</span> <span class="brand-text">CyberRiskSense</span>
    </a>
  </div>
  <div class="nav-right">
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="quiz.php">Security Quiz</a>
    <a href="contact.php">Contact Us</a>
    <?php if($loggedIn): ?>
      <span class="nav-user">Hi, <?=htmlspecialchars($userName)?></span>
      <a href="logout.php" class="btn-outline">Logout</a>
    <?php else: ?>
      <a href="login.php" class="btn-outline">Login</a>
      <a href="signup.php" class="btn-primary">Sign Up</a>
    <?php endif; ?>
  </div>
</nav>
