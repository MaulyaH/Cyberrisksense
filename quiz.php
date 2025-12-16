<?php
include '_nav.php';
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Security Quiz — CyberRiskSense</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<?php include '_nav.php'; ?>

<section class="container quiz-hero">
  <h1>Security Assessment</h1>
  <p class="lead">Answer the following questions — it will take ~3–5 minutes. Your responses are private (unless you sign up).</p>

  <form id="quizForm" method="post" action="../server/actions/process_quiz.php">
    <ol class="quiz-list">
      <li>
        <h4>Do you have centralized user authentication (e.g., SSO/Active Directory)?</h4>
        <label><input type="radio" name="q1" value="2" required> Yes</label>
        <label><input type="radio" name="q1" value="0"> No</label>
      </li>

      <li>
        <h4>Do you enforce multi-factor authentication (MFA) for all privileged accounts?</h4>
        <label><input type="radio" name="q2" value="3" required> Yes, enforced</label>
        <label><input type="radio" name="q2" value="1"> Partially</label>
        <label><input type="radio" name="q2" value="0"> No</label>
      </li>

      <li>
        <h4>Do you regularly back up critical data and test restores?</h4>
        <label><input type="radio" name="q3" value="3" required> Yes, weekly/monthly</label>
        <label><input type="radio" name="q3" value="1"> Occasionally</label>
        <label><input type="radio" name="q3" value="0"> No</label>
      </li>

      <li>
        <h4>Are software & firmware updates applied promptly (within a policy-defined window)?</h4>
        <label><input type="radio" name="q4" value="3" required> Yes</label>
        <label><input type="radio" name="q4" value="0"> No</label>
      </li>

      <li>
        <h4>Do you have endpoint detection and response (EDR) or equivalent monitoring?</h4>
        <label><input type="radio" name="q5" value="3" required> Yes</label>
        <label><input type="radio" name="q5" value="0"> No</label>
      </li>
    </ol>

    <div class="form-row">
      <button class="btn-primary" type="submit">Get My Result</button>
    </div>
  </form>
</section>

<footer class="footer">
  <div class="container">&copy; <?=date('Y')?> CyberRiskSense</div>
</footer>

<script src="../assets/js/script.js"></script>
</body>
</html>
