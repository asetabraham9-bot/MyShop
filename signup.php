<?php
require_once 'includes/session.inc.php';
require_once 'includes/signup_view.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="signup-section">
    <div class="signup-container">
      <h2>Create an Account</h2>
      <form action="includes/signup.inc.php" method="post" id="signup-form">
        
        
        <div class="form-group">
          <label for="name">User Name</label>
          <input  type="text" id="name" name="username" placeholder="Enter your User name" required>
        </div>
       
       
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
       
       
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="pwd" placeholder="Enter your password" required>
        </div>
       
       
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirmpwd" placeholder="Confirm your password" required>
        </div>


        <button type="submit" class="signup-button">Sign Up</button>
      </form>
<?php  
 check_errors();
?>

      <div class="login-link">
        Already have an account? <a href="login.php">Log in</a>
      </div>
    </div>
  </section>
  <script src="script.js"></script>
</body>
</html>