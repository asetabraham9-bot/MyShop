<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <div id="cart-items"></div>
    <p>Total: $<span id="total">0.00</span></p>
    <button onclick="checkout()">Checkout</button>

    <script>
        let cart = JSON.parse(localStorage.getItem('cart') || '[]');
        let total = 0;
        let html = '<ul>';
        cart.forEach(item => {
            html += `<li>${item.name} - $${item.price} x ${item.qty}</li>`;
            total += item.price * item.qty;
        });
        html += '</ul>';
        document.getElementById('cart-items').innerHTML = html;
        document.getElementById('total').textContent = total.toFixed(2);

        function checkout() {
            fetch('../backend/cart.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(cart)
            }).then(res => res.text()).then(alert);
        }
    </script>
</body>
</html>
