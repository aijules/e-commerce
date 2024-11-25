<?php
session_start();
include('config.php');

// Display cart contents
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $product_id => $product_details) {
        // Loop through products in cart
        echo "<div class='cart-item'>";
        echo "<img src='images/" . $product_details['image'] . "' alt='" . $product_details['name'] . "'>";
        echo "<p>" . $product_details['name'] . "</p>";
        echo "<p>$" . $product_details['price'] . "</p>";
        echo "<p>Quantity: " . $product_details['quantity'] . "</p>";
        echo "</div>";
    }
    // Display Clear Cart Button
    echo '<form action="clear_cart.php" method="POST">
            <button type="submit">Clear Cart</button>
          </form>';
    
    // Display Checkout Button
    echo '<a href="checkout.php">Proceed to Checkout</a>';
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
