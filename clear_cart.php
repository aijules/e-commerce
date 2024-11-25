<?php
session_start();

// Clear the cart by destroying the session or emptying the cart array
if(isset($_SESSION['cart'])) {
    unset($_SESSION['cart']); // Removes the cart array from the session
    // Or you could use session_destroy() to clear all session data (if you want to clear everything)
    echo "Cart cleared successfully.";
    header('Location: cart.php'); // Redirect back to cart page
    exit();
}
?>
