<?php
include '_nav.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login — CyberRiskSense</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<?php include '_nav.php'; ?>

<section class="container auth">
  <div class="auth-box">
    <h2>Welcome back</h2>
    <form method="post" action="../server/actions/login_action.php">
      <label>Email<input type="email" name="email" required></label>
      <label>Password<input type="password" name="password" required></label>
      <button class="btn-primary" type="submit">Login</button>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
  </div>
</section>

<footer class="footer">
  <div class="container">&copy; <?=date('Y')?> CyberRiskSense</div>
</footer>
</body>
</html>
