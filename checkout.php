<?php
session_start();

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Display cart for checkout
    foreach($_SESSION['cart'] as $product_id => $product_details) {
        echo "<div class='cart-item'>";
        echo "<img src='images/" . $product_details['image'] . "' alt='" . $product_details['name'] . "'>";
        echo "<p>" . $product_details['name'] . "</p>";
        echo "<p>$" . $product_details['price'] . "</p>";
        echo "<p>Quantity: " . $product_details['quantity'] . "</p>";
        echo "</div>";
    }

    // Add form to capture shipping details or payment info
    echo '<form action="process_order.php" method="POST">
            <input type="text" name="shipping_address" placeholder="Enter Shipping Address" required>
            <input type="submit" value="Place Order">
          </form>';
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
