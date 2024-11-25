<?php
include 'config.php'; // Include the database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];  // Corrected column name 'description'
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    
    // Move the uploaded image to the "images" directory
    move_uploaded_file($image_tmp, "images/" . $image);
    
    // Insert product into the database
    $sql = "INSERT INTO products (product_name, price, description, image) 
            VALUES ('$product_name', '$price', '$description', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <link rel="stylesheet" href="css/Dashboard.css">

</head>
<body>
    <h1>Add New Product</h1>
    <a href="Dashboard.php">Dashboard</a>

    <form action="create.php" method="POST" enctype="multipart/form-data">

        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br> <!-- Corrected to 'description' -->

        <label for="image">Product Image:</label><br>
        <input type="file"  id="image" name="image" accept="image/*" required><br><br>
        
        <input type="submit" value="Add Product">
        



    
    </form>

</body>
</html>
