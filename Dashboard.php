
<?php
include 'config.php'; // Include the database connection

$sql = "SELECT * FROM products"; // Query to fetch all products
$result = $conn->query($sql); // Execute the query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexora Multi-Niche E-Commerce Website</title>
    <link rel="stylesheet" href="css/Dashboard.css">
</head>
<body >

<a href="index.php">index page</a>

<a href="create.php">Add Product </a>
<a href="view.php">View & Delete </a>



<script src="js/homescript.js"></script>
    
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='images/" . $row['image'] . "' alt='" . $row['product_name'] . "'>";
        echo "<p>" . $row['product_name'] . "</p>";
        echo "<p>$" . $row['price'] . "</p>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
    ?>



</body>
</html>
