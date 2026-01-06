<?php
require_once 'includes/config.php';

// Redirect to login if not logged in
if (!is_logged_in()) {
    redirect('login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore the latest electronics at MyShop - Mobile Phones, Laptops, Accessories, and more.">
  <meta name="keywords" content="electronics, mobile phones, laptops, accessories, online shopping, Ethiopia">
  <title>Electronics - MyShop</title>
  <!-- Link to Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Link to CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="sticky-nav">
      <div class="logo">MyShop</div>
      <ul class="nav-links">
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <!-- Remove the dropdown for Electronics and keep only the Electronics button -->
        <li><a href="electronics.php" class="active"><i class="fas fa-mobile-alt"></i> Electronics</a></li>
        <li><a href="fashion.php"><i class="fas fa-tshirt"></i> Fashion</a></li>
        <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact Us</a></li>
        <li><a href="faqs.php"><i class="fas fa-question-circle"></i> FAQs</a></li>
        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li><a href="signup.php"><i class="fas fa-user-plus"></i> signup</a></li>
      </ul>
      <a href="payment.php">
        <div class="cart-icon">
        🛒 <span id="cart-count">0</span>
      </div>
      </a>
    </nav>
  </header>

  <!-- Electronics Hero Section -->
  <section class="electronics-hero">
    <div class="hero-content">
      <h1>Explore the Latest Electronics</h1>
      <p>Discover cutting-edge technology with our wide range of mobile phones, laptops, and accessories.</p>
      <a href="#featured-products" class="cta-button">Shop Now</a>
    </div>
  </section>

   <!-- Featured Electronics Products -->
  <section id="featured-products" class="featured-products">
    <h2>Featured Electronics</h2>
    <div class="product-grid">
      <!-- Product 1 - Smartphone -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/smartphone-x.jpg" alt="Smartphone" class="product-image">
        <h3>Smartphone X</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(123)</span>
        </div>
        <p>$499.99</p>
        <button class="add-to-cart" data-id="1">Add to Cart</button>
        <button class="quick-view" data-id="1">Quick View</button>
      </div>

      <!-- Product 2 - Laptop -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/ultrabook-pro.webp" alt="Laptop" class="product-image">
        <h3>UltraBook Pro</h3>
        <div class="product-rating">
          ⭐⭐⭐☆☆ <span class="rating-count">(45)</span>
        </div>
        <p>$899.99</p>
        <button class="add-to-cart" data-id="2">Add to Cart</button>
        <button class="quick-view" data-id="2">Quick View</button>
      </div>

      <!-- Product 3 - Wireless Earbuds -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/wireless-earbuds.jpg" alt="Wireless Earbuds" class="product-image">
        <h3>Wireless Earbuds</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐⭐ <span class="rating-count">(200)</span>
        </div>
        <p>$99.99</p>
        <button class="add-to-cart" data-id="3">Add to Cart</button>
        <button class="quick-view" data-id="3">Quick View</button>
      </div>

      <!-- Product 4 - Smartwatch -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/smart-watch-2.0.jpg" alt="Smartwatch" class="product-image">
        <h3>Smartwatch 2.0</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(150)</span>
        </div>
        <p>$199.99</p>
        <button class="add-to-cart" data-id="4">Add to Cart</button>
        <button class="quick-view" data-id="4">Quick View</button>
      </div>

      <!-- Product 5 - Gaming Mouse -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/gaming-mouse.jfif" alt="Gaming Mouse" class="product-image">
        <h3>Gaming Mouse</h3>
        <div class="product-rating">
          ⭐⭐⭐☆☆ <span class="rating-count">(75)</span>
        </div>
        <p>$49.99</p>
        <button class="add-to-cart" data-id="5">Add to Cart</button>
        <button class="quick-view" data-id="5">Quick View</button>
      </div>

      <!-- Product 6 - Bluetooth Speaker -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/bloototh-speaker.jfif" alt="Bluetooth Speaker" class="product-image">
        <h3>Bluetooth Speaker</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(180)</span>
        </div>
        <p>$79.99</p>
        <button class="add-to-cart" data-id="6">Add to Cart</button>
        <button class="quick-view" data-id="6">Quick View</button>
      </div>
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

      <!-- Quick Links -->
                    <div class="footer-section quick-links">
                      <h3>Quick Links</h3>
                      <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="electronics.php">Electronics</a></li>
                        <li><a href="fashion.php">Fashion</a></li>
                        <li><a href="about.php">About Us</a></li>
                      </ul>
                    </div>

      <!-- Social Media Links -->
             <div class="social-media-container">
                  <div>
                    <h3>Follow Us</h3>
                  </div>
                  
                  <div class="social-medias">
                    <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://youtube.com"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
              </div>
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
  </footer>

  <!-- Link to JavaScript -->
  <script src="script.js"></script>
</body>
</html>