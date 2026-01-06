<?php
require_once 'includes/config.php';

// Redirect if already logged in
if (is_logged_in()) {
    redirect('dashboard.php');
}
$errors = [];
$username = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    // Validate inputs
    if (empty($username)) {
        $errors['username'] = 'Username is required';
    }
    
    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }
    
    // If no errors, check credentials
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();
            
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                redirect('dashboard.php');
            } else {
                $errors['login'] = 'Invalid username or password';
            }
        } else {
            $errors['login'] = 'Invalid username or password';
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Login to MyShop - Access your account to shop for the latest products.">
  <meta name="keywords" content="login, MyShop, online shopping, account">
  <title>Login - MyShop</title>
  <!-- Link to Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Link to CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <nav class="sticky-nav">
      <div class="logo">MyShop</div>
      <ul class="nav-links">
      <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact Us</a></li>
        <li><a href="faqs.php"><i class="fas fa-question-circle"></i> FAQs</a></li>
        <li><a href="signup.php"><i class="fas fa-user-plus"></i> signup</a></li>
        
        
      </ul>
      <div class="cart-icon">
        🛒 <span id="cart-count">0</span>
      </div>
    </nav>
  </header>
  
 <section class="login-section">

 <div class="login-container">
      <h2>Login to your Account</h2>
      
      <?php if (!empty($errors['login'])): ?>
        <div class="error" style="text-align: center; margin-bottom: 1rem;"><?= htmlspecialchars($errors['login']) ?></div>
      <?php endif; ?>
      
      <form method="post" action="login.php" id="login-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="<?= htmlspecialchars($username) ?>">
          <?php if (!empty($errors['username'])): ?>
            <span class="error"><?= htmlspecialchars($errors['username']) ?></span>
          <?php endif; ?>
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
          <?php if (!empty($errors['password'])): ?>
            <span class="error"><?= htmlspecialchars($errors['password']) ?></span>
          <?php endif; ?>
        </div>
        
        <button type="submit" class="login-button">Login</button>
      </form>
      <p class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
 </section>
    


  
  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <!-- Newsletter Subscription -->
      <div class="footer-section newsletter">
        <h3>Subscribe to Our Newsletter</h3>
        <form id="newsletter-form">
          <input type="email" placeholder="Enter your email" class="rounded-input" required>
          <button type="submit" class="subscribe-button">Subscribe</button>
        </form>
        <p>Get the latest updates on new products and exclusive offers!</p>
      </div>

     

    
    <!-- Legal Links and Copyright -->
    <div class="footer-bottom">
      <div class="legal-links">
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
      </div>
      <div class="copyright">
        <p>&copy; <span id="current-year"></span> MyShop. All rights reserved.</p>
      </div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" aria-label="Back to Top"><i class="fas fa-arrow-up"></i></button>
  </footer>

  <!-- Link to JavaScript -->
  <!-- <script src="script.js"></script> -->
</body>
</html>