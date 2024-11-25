<?php
session_start();
include('config.php');

// Check if the product ID is set
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Fetch product details from the database
    $product_query = "SELECT * FROM products WHERE ID = $product_id";
    $product_result = mysqli_query($conn, $product_query);
    $product = mysqli_fetch_assoc($product_result);

    // If the product is found
    if ($product) {
        // If the cart session is not set, initialize it as an empty array
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            // If the product is already in the cart, increase the quantity
            $_SESSION['cart'][$product_id]['quantity'] += 1;
        } else {
            // If the product is not in the cart, add it
            $_SESSION['cart'][$product_id] = [
                'name' => $product['product_name'],
                'price' => $product['price'],
                'quantity' => 1,
                'image' => $product['image']
            ];
        }

        // Redirect to cart page
        header('Location: cart.php');
        exit();
    } else {
        echo "Product not found!";
    }
}
?>
