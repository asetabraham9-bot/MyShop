// script.js




// ====================
// 2. Carousel Functionality
// ====================
const carouselItems = document.querySelectorAll(".carousel-item");
const prevSlideButton = document.querySelector(".prev-slide");
const nextSlideButton = document.querySelector(".next-slide");
const carouselDots = document.querySelectorAll(".carousel-dots .dot");
let currentSlide = 0;

if (carouselItems.length > 0) {
  function showSlide(index) {
    carouselItems.forEach((item, i) => {
      item.classList.toggle("active", i === index);
    });
    carouselDots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });
  }

  prevSlideButton.addEventListener("click", () => {
    currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
    showSlide(currentSlide);
  });

  nextSlideButton.addEventListener("click", () => {
    currentSlide = (currentSlide + 1) % carouselItems.length;
    showSlide(currentSlide);
  });

  carouselDots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentSlide = index;
      showSlide(currentSlide);
    });
  });

  // Auto-play carousel (optional)
  setInterval(() => {
    currentSlide = (currentSlide + 1) % carouselItems.length;
    showSlide(currentSlide);
  }, 5000);
}

// ====================
// 3. Add to Cart Functionality
// ====================
const addToCartButtons = document.querySelectorAll(".add-to-cart");
const cartCount = document.getElementById("cart-count");
let cartItems = [];

if (addToCartButtons.length > 0) {
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const productId = button.getAttribute("data-id");
      cartItems.push(productId);
      cartCount.textContent = cartItems.length;
      alert(`Product ${productId} added to cart!`);
    });
  });
}

// ====================
// 4. Quick View Functionality
// ====================
const quickViewButtons = document.querySelectorAll(".quick-view");

if (quickViewButtons.length > 0) {
  quickViewButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const productId = button.getAttribute("data-id");
      alert(`Quick view for product ${productId}`);
      // You can open a modal here to display product details
    });
  });
}

// ====================

// 6. Testimonials Carousel (Optional)
// ====================
const testimonialCards = document.querySelectorAll(".testimonial-card");
let currentTestimonial = 0;

if (testimonialCards.length > 0) {
  function showTestimonial(index) {
    testimonialCards.forEach((card, i) => {
      card.style.display = i === index ? "block" : "none";
    });
  }

  setInterval(() => {
    currentTestimonial = (currentTestimonial + 1) % testimonialCards.length;
    showTestimonial(currentTestimonial);
  }, 5000);
}

// ====================
// 7. Newsletter Form Submission
// ====================
const newsletterForm = document.getElementById("newsletter-form");

if (newsletterForm) {
  newsletterForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = newsletterForm.querySelector("input[type='email']").value;
    alert(`Thank you for subscribing with ${email}!`);
    newsletterForm.reset();
  });
}

// ====================
// 8. Back to Top Button
// ====================
const backToTopButton = document.getElementById("back-to-top");

if (backToTopButton) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

// ====================
// 9. Update Current Year in Footer
// ====================
const currentYear = document.getElementById("current-year");
if (currentYear) {
  currentYear.textContent = new Date().getFullYear();
}
// ====================
// Login Form Submission
// ====================
const loginForm = document.getElementById("login-form");

if (loginForm) {
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Simulate login (replace with actual authentication logic)
    if (email && password) {
      alert(`Logged in as ${email}`);
      // Redirect to homepage or dashboard
      window.location.href = "index.html";
    } else {
      alert("Please fill in all fields.");
    }
  });
}
// ====================
// Sign Up Form Submission
// ====================
const signupForm = document.getElementById("signup-form");

if (signupForm) {
  signupForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    // Simulate signup (replace with actual signup logic)
    if (name && email && password && confirmPassword) {
      if (password === confirmPassword) {
        alert(`Account created for ${name} (${email})`);
        // Redirect to login page or dashboard
        window.location.href = "login.html";
      } else {
        alert("Passwords do not match.");
      }
    } else {
      alert("Please fill in all fields.");
    }
  });
}
// ====================
// Product Data
// ====================
const products = [
  {
    id: 1,
    name: "Men's T-Shirt",
    price: 19.99,
    image: "https://via.placeholder.com/300x300",
    rating: 4,
    reviews: 123,
  },
  {
    id: 2,
    name: "Women's Dress",
    price: 49.99,
    image: "https://via.placeholder.com/300x300",
    rating: 3,
    reviews: 45,
  },
  {
    id: 3,
    name: "Running Shoes",
    price: 79.99,
    image: "https://via.placeholder.com/300x300",
    rating: 5,
    reviews: 200,
  },
  {
    id: 4,
    name: "Leather Jacket",
    price: 99.99,
    image: "https://via.placeholder.com/300x300",
    rating: 4,
    reviews: 150,
  },
  {
    id: 5,
    name: "Handbag",
    price: 59.99,
    image: "https://via.placeholder.com/300x300",
    rating: 3,
    reviews: 75,
  },
  {
    id: 6,
    name: "Sunglasses",
    price: 29.99,
    image: "https://via.placeholder.com/300x300",
    rating: 4,
    reviews: 180,
  },
];

// ====================
// Cart Functionality
// ====================
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Function to update the cart count in the UI
function updateCartCount() {
  const cartCount = document.getElementById("cart-count");
  if (cartCount) {
    cartCount.textContent = cart.length;
  }
}

// Function to add a product to the cart
function addToCart(productId) {
  const product = products.find((p) => p.id === productId);
  if (product) {
    cart.push(product);
    localStorage.setItem("cart", JSON.stringify(cart)); // Save cart to localStorage
    updateCartCount();
    alert(`${product.name} added to cart!`);
  }
}

// Function to show the cart pop-up
function showCartPopup() {
  if (cart.length === 0) {
    alert("Your cart is empty. Add some items to proceed!");
  } else {
    alert(`You have ${cart.length} item(s) in your cart. Proceed to checkout?`);
  }
}

// Handle "Add to Cart" button clicks
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("add-to-cart")) {
    const productId = parseInt(e.target.getAttribute("data-id"));
    addToCart(productId);
  }
});

// Handle "Shop" button clicks
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("cta-button")) {
    showCartPopup();
  }
});

// Initialize cart count on page load
updateCartCount();

