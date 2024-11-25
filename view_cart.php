<?php
session_start();  // Start the session to access cart

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    echo "<h1>Your Cart</h1>";
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
    
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total = $item['price'] * $item['quantity'];
        $total_price += $total;
        echo "<tr>";
        echo "<td>" . $item['product_name'] . "</td>";
        echo "<td>$" . $item['price'] . "</td>";
        echo "<td>" . $item['quantity'] . "</td>";
        echo "<td>$" . $total . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<p>Total Price: $" . $total_price . "</p>";
}
?>
