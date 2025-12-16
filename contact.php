<?php
include '_nav.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us — CyberRiskSense</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<?php include '_nav.php'; ?>

<section class="container contact-hero">
  <h1>Contact Us</h1>
  <p class="lead">Questions about the assessment? Want enterprise support? Send us a message.</p>

  <form class="contact-form" method="post" action="../server/actions/contact_action.php">
    <label>Name
      <input type="text" name="name" required>
    </label>
    <label>Email
      <input type="email" name="email" required>
    </label>
    <label>Message
      <textarea name="message" rows="6" required></textarea>
    </label>
    <div class="form-row">
      <button class="btn-primary" type="submit">Send Message</button>
    </div>
  </form>
</section>

<footer class="footer">
  <div class="container">
    <p>&copy; <?=date('Y')?> CyberRiskSense</p>
  </div>
</footer>
<script src="../assets/js/script.js"></script>
</body>
</html>
