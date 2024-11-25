<?php
// Include database connection
include('config.php');

// Fetch products from the database
$query = "SELECT * FROM Products";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Loop through the products and display them
    echo "<h2>Product List</h2>";
    echo "<table border='1'>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><img src='images/" . $row['image'] . "' width='100'></td>
                <td>" . $row['product_name'] . "</td>
                <td>$" . $row['price'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>
                    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}

$conn->close();
?>
