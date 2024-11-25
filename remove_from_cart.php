<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Get the index of the item to be removed

    // Check if the cart session exists
    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]); // Remove the item
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the cart array
    }

    // Redirect back to the cart page
    header("Location: view_cart.php");
    exit;
}
?>
