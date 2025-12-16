<?php
include('db_connect.php');
$pdo = $conn; 
include('backend/_nav.php'); 
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>CyberRiskSense — Protect Your Digital Assets</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php include('backend/_nav.php'); ?>

<header class="hero">
  <div class="container">
    <div class="hero-badge">Enterprise-Grade Security Assessment</div>
    <h1 class="hero-title">Protect Your Digital Assets <span class="gradient">with AI-Powered Insights</span></h1>
    <p class="hero-sub">Discover vulnerabilities, assess your security posture, and receive personalized AI recommendations to fortify your organization's defenses.</p>
    <div class="hero-cta">
      <a class="btn-primary large" href="quiz.php">Start Security Assessment</a>
      <a class="btn-outline large" href="about.php">Learn More</a>
    </div>
  </div>
</header>

<section class="why container">
  <h2>Why Choose <span class="accent">CyberRiskSense</span></h2>
  <p class="lead">Advanced, easy-to-understand security assessments designed for modern enterprises.</p>

  <div class="cards">
    <div class="card">
      <h3>Fast Assessment</h3>
      <p>Answer a short set of questions and receive a clear rating and recommended actions.</p>
    </div>
    <div class="card">
      <h3>Actionable Results</h3>
      <p>Receive prioritized recommendations and a unique result code for internal tracking.</p>
    </div>
    <div class="card">
      <h3>AI-Enhanced Insights</h3>
      <p>We analyze your responses to detect high-risk configurations and missing controls.</p>
    </div>
  </div>
</section>

<section class="features dark-section">
  <div class="container grid-2">
    <div>
      <h2>How it Works</h2>
      <ol class="howlist">
        <li>Sign up / login to save results.</li>
        <li>Complete the security questionnaire.</li>
        <li>Get a score, rating, and a unique result code you can share with consultants.</li>
      </ol>
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop&crop=faces" alt="security" style="width:100%;border-radius:12px;">
    </div>
  </div>
</section>

<section class="container footer-cta">
  <div class="box">
    <h3>Ready to begin?</h3>
    <p>Run an assessment now and get an immediate security rating.</p>
    <a class="btn-primary" href="quiz.php">Start Assessment</a>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> CyberRiskSense — Built with care.</p>
  </div>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
