<?php
// Include the database connection
include 'config.php';

// Check if the request is valid
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $product_id = intval($_GET['id']); // Get the product ID safely

    // Fetch product details for the form
    $query = "SELECT * FROM Products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc(); // Fetch the product data
    } else {
        echo "Product not found!";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Handle form submission to update the product
    $product_id = intval($_POST['id']);
    $product_name = $_POST['product_name'];
    $price = floatval($_POST['price']);
    $description = $_POST['description'];

    // Update the product in the database
    $update_query = "UPDATE Products SET product_name = ?, price = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("sdsi", $product_name, $price, $description, $product_id);

    if ($stmt->execute()) {
        echo "Product updated successfully!";
        header("Location: view.php"); // Redirect to view page after update
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>Update Product</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description
