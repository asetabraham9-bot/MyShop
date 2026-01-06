<?php
require_once 'includes/config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="MyShop - Your one-stop online shopping platform">
  <meta name="keywords" content="online shopping, electronics, fashion, health, home">
  <title>MyShop - Online Shopping</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
  <!-- Header with Logout Button -->
  <header>
    <nav class="sticky-nav">
      <div class="logo">MyShop</div>
      <div class="hamburger" aria-label="Toggle Menu">
        <i class="fas fa-bars"></i>
      </div>
      <ul class="nav-links">
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="electronics.php"><i class="fas fa-mobile-alt"></i> Electronics </a></li>
        <li><a href="fashion.php"><i class="fas fa-tshirt"></i> Fashion </a></li>
        <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact Us</a></li>
        <li><a href="faqs.php"><i class="fas fa-question-circle"></i> FAQs</a></li>
        
        <?php if(is_logged_in()): ?>
            <!-- Show when logged in -->
            <li class="user-welcome">
                <span>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></span>
                <a href="logout.php" class="logout-btn">Logout</a>
            </li>
        <?php else: ?>
            <!-- Show when logged out -->
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="signup.php"><i class="fas fa-user-plus"></i> signup</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

<!-- Carousel Banner -->
  <section class="carousel">
    <div class="carousel-item active">
      <img src="images/watch-home.jpg" alt="Featured Product 1 - Electronics Sale">
      <div class="carousel-text">
        <h2>Featured Product 1</h2>
        <p>Get 20% off on all electronics!</p>
        <button class="cta-button">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/handbag-home.jpg" alt="Featured Product 2 - Fashion Sale">
      <div class="carousel-text">
        <h2>Featured Product 2</h2>
        <p>Trendy fashion items now available!</p>
        <button class="cta-button">Shop Now</button>
      </div>
    </div>
    <!-- Add more carousel items here -->
    <div class="carousel-controls">
      <button class="prev-slide" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
      <button class="next-slide" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="carousel-dots">
      <span class="dot active" aria-label="Slide 1"></span>
      <span class="dot" aria-label="Slide 2"></span>
      <!-- Add more dots here -->
    </div>
  </section>

  <!-- Featured Products -->
  <section class="featured-products">
    <h2>Featured Products</h2>
    <div class="product-grid">
      <!-- Product 1 - Wireless Earbuds -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/True-Wireless-Earbuds.jpg" alt="Product 1 - Wireless Earbuds" class="product-image">
        <h3>Wireless Earbuds</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(123)</span>
        </div>
        <p>$19.99</p>
        <button class="add-to-cart" data-id="1">Add to Cart</button>
        <button class="quick-view" data-id="1">Quick View</button>
      </div>

      <!-- Product 2 - Smartwatch -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/smartwatch.avif" alt="Product 2 - Smartwatch" class="product-image">
        <h3>Smartwatch</h3>
        <div class="product-rating">
          ⭐⭐⭐☆☆ <span class="rating-count">(45)</span>
        </div>
        <p>$29.99</p>
        <button class="add-to-cart" data-id="2">Add to Cart</button>
        <button class="quick-view" data-id="2">Quick View</button>
      </div>

      <!-- Product 3 - Running Shoes -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/runningshoes.jfif" alt="Product 3 - Running Shoes" class="product-image">
        <h3>Running Shoes</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐⭐ <span class="rating-count">(200)</span>
        </div>
        <p>$49.99</p>
        <button class="add-to-cart" data-id="3">Add to Cart</button>
        <button class="quick-view" data-id="3">Quick View</button>
      </div>

      <!-- Product 4 - Leather Jacket -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/Leather Jacket.jfif" alt="Product 4 - Leather Jacket" class="product-image">
        <h3>Leather Jacket</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(150)</span>
        </div>
        <p>$99.99</p>
        <button class="add-to-cart" data-id="4">Add to Cart</button>
        <button class="quick-view" data-id="4">Quick View</button>
      </div>

      <!-- Product 5 - Yoga Mat -->
      <div class="product-card">
        <div class="product-badge">New</div>
        <img src="images/yoga-mat.avif" alt="Product 5 - Yoga Mat" class="product-image">
        <h3>Yoga Mat</h3>
        <div class="product-rating">
          ⭐⭐⭐☆☆ <span class="rating-count">(75)</span>
        </div>
        <p>$24.99</p>
        <button class="add-to-cart" data-id="5">Add to Cart</button>
        <button class="quick-view" data-id="5">Quick View</button>
      </div>

      <!-- Product 6 - Coffee Maker -->
      <div class="product-card">
        <div class="product-badge">Discounted</div>
        <img src="images/coffee-maker.jfif" alt="Product 6 - Coffee Maker" class="product-image">
        <h3>Coffee Maker</h3>
        <div class="product-rating">
          ⭐⭐⭐⭐☆ <span class="rating-count">(180)</span>
        </div>
        <p>$59.99</p>
        <button class="add-to-cart" data-id="6">Add to Cart</button>
        <button class="quick-view" data-id="6">Quick View</button>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <p>"Great products and fast delivery! Highly recommended."</p>
        <span>- Customer 1</span>
      </div>
      <div class="testimonial-card">
        <p>"Excellent customer service and quality products."</p>
        <span>- Customer 2</span>
      </div>
      <!-- Add more testimonials here -->
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
      <p >Get the latest updates on new products 
        and exclusive offers!</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-links-payment">
      <div>
        Quick Links
      </div>
      
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="login.php">login</a></li>
      </ul>
    </div>

    <!-- Payment Methods  -->
      <div class="footer-links-payment">
        <div>
          We Accept
        </div>
          <ul>

            <li>
              <a href="payment.php">
              Tele birr
              </a>
            </li>
            <li>
              <a href="payment.php">
              CBE
              </a>
            </li>
            <li><a href="payment.php">
              MasterCard
            </a>
          </li>
            <li>
              <a href="payment.php">
                Amazon Pay
            </a>
          </li>
            <li>
              <a href="payment.php">
              Other Banks
            </a>
          </li>

          </ul>
          
    
        
      </div>
      </div>
    <!-- </div> -->

    
<!-- follow us -->
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



    <!-- Legal Links and Copyright -->
    <div class="footer-bottom">
      <div class="legal-links">
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
      </div>
      <div class="copyright">
        <p>copyright &copy; <span id="current-year">2025</span> MyShop. All rights reserved.</p>
      </div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" aria-label="Back to Top"><i class="fas fa-arrow-up"></i></button>
  </footer>

  <!-- Link to JavaScript -->
  <script src="script.js"></script>
</body>
</html>