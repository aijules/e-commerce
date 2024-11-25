<?php
// Include database connection
include('config.php');

// Check if the 'id' is passed in the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // SQL query to delete the product by ID
    $query = "DELETE FROM Products WHERE id = ?";
    
    // Prepare and bind parameters to the query
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $product_id);
    
    // Execute the query
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
        // Redirect to the product list page
        header("Location: view.php");
        exit();
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo "No product ID provided.";
}

$conn->close();
?>
