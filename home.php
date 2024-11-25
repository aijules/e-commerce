
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
    <title>Nexora's Book Store</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: azure;
        }

        header {
            background-color: rgb(79, 76, 72);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        header h2 {
            margin: 0;
        }

        nav {
            background-color: black;
            color: white;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            margin: 0;
            padding-left: 20px;
        }

        #links {
            margin-right: 20px;
        }

        #links a {
            text-decoration: underline;
            color: blue;
            margin-left: 20px;
        }

        #links a:hover {
            color: darkblue;
            text-decoration: none;
        }

        #cover {
            height: 700px;
        }

        #cover img {
            width: 100%;
            height: 700px;
        }
        #links a {
            text-decoration: underline;
            color: blue;
            margin-left: 20px;
        }

        #links a:hover {
            color: red;
            text-decoration: underline;
        }
        #section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px;
        }

        #left {
            width: 45%;
            padding-right: 20px;
        }

        #right {
            width: 50%;
        }

        #right div {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            background-color: rgb(235, 229, 172);
            border-radius: 8px;
        }

        #right h2 {
            font-size: 1.2em;
            color: #4CAF50;
        }

        #right p {
            font-size: 1em;
            color: #333;
        }

        #right select {
            padding: 5px;
            margin-top: 5px;
        }

        #right button {
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #right button:hover {
            background-color: #45a049;
        }

        #footer {
            display: flex;
            justify-content: space-between;
            background-color: #333;
            color: white;
            padding: 20px;
            margin-top: 40px;
        }

        #footer #col {
            width: 22%;
        }

        #footer h2 {
            margin-top: 0;
        }

        #footer p, #footer pre {
            font-size: 0.9em;
        }

        #footer ul {
            list-style-type: none;
            padding-left: 0;
        }

        #footer ul li {
            font-size: 1em;
        }

        #foot {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        #foot p {
            margin: 0;
        }

        @media screen and (max-width: 768px) {
            #section {
                flex-direction: column;
            }

            #left, #right {
                width: 100%;
                padding: 0;
            }

            #footer {
                flex-direction: column;
                text-align: center;
            }

            #footer #col {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h2>Nexora's Book Store</h2>
        </div> 
    </header>

    <nav>
        <div>
            <h1 id="h1a">"Discover Our Collection of Books"</h1>
        </div>
        <div id="links">
            <a href="index.php">index page</a>
            <a href="about us .php">millestones</a>
            <a href="Contact-us.php">Contact Us</a>
        </div>
    </nav>

    <div id="cover">
        <img src="images/booka.jpg" alt="Bookstore Cover">
    </div>

    <div id="section">
        <!-- Left Section: Images -->
        <div id="left">
            <h1>"Discover Books That Captivate and Inspire"</h1>
            <p><strong>"Welcome to Nexora's Book Store, where every book tells a story, and every reader finds a home."</strong></p>
            <h5>Novel Books</h5>
            <img width="40%" height="230px" src="images/book.jpg" alt="Book Image">
            <img width="40%" height="230px" src="images/book3.jpg" alt="Book Image">
            <h5>Books for the Blind</h5>
            <img width="40%" height="230px" src="images/book1.jpg" alt="Book Image">
            <img width="40%" height="230px" src="images/bookb.jpg" alt="Book Image">
            <h5>Books for Languages</h5>
            <img width="40%" height="230px" src="images/book2.jpg" alt="Book Image">
            <img width="40%" height="230px" src="images/bookc.jpg" alt="Book Image">
            <h5>Books for Kids</h5>
            <img width="40%" height="230px" src="images/book4.jpg" alt="Book Image">
            <img width="40%" height="230px" src="images/bookd.jpg" alt="Book Image">
        </div>

        <!-- Right Section: Product Boxes -->
        <div id="right">
            <h1><strong>Available Books & Their Prices</strong></h1>
            <!-- Product Box 1 -->
            <div id="box1">
                <h2>Novel Books: $6</h2>
                <p>Discover captivating stories in our novel collection!</p>
                <label for="quantity1">Number of Books:</label>
                <select id="quantity1" onchange="calculateTotal('quantity1', 6, 'total1')">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button onclick="placeOrder('Novel Books', document.getElementById('quantity1').value)">Buy Now</button>
                <p>Total: $<span id="total1">6</span></p>
            </div>
        <!-- Box 2 - Dictionaries -->
        <div id="box2">
            <h2>Books for Blind: $4.50</h2>
            <p>"Our Braille books open the door to a world of stories, knowledge, and imagination for those who are blind or visually impaired. Crafted in clear, tactile Braille, these books empower readers to engage with the written word by touch."</p>
            <label for="quantity2">Number of Books:</label>
            <select id="quantity2" onchange="calculateTotal('quantity2', 4.5, 'total2')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('Books for Blind', document.getElementById('quantity2').value)">Buy Now</button>
            <p>Total: $<span id="total2">4.5</span></p>
        </div>

        <!-- Box 3 - Language Books -->
        <div id="box3">
            <h2>Books for Languages: $7</h2>
            <p>Unlock the world with our beginner-friendly language books! Designed for absolute beginners, these books offer simple, step-by-step lessons to introduce you to the basics of a new language. Perfect for travelers, beginners, or those just looking to explore a new language.</p>
            <label for="quantity3">Number of Books:</label>
            <select id="quantity3" onchange="calculateTotal('quantity3', 7, 'total3')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('Language Books', document.getElementById('quantity3').value)">Buy Now</button>
            <p>Total: $<span id="total3">7</span></p>
        </div>

        
        <!-- Box 4 - Kids Books -->
        <div id="box4">
            <h2>Kids Books: $10</h2>
            <p>Spark imagination and adventure with our collection of kids' books! From fun-filled stories to educational tales, every book is a new journey that will inspire young minds and create lasting memories.</p>
            <label for="quantity4">Number of Books:</label>
            <select id="quantity4" onchange="calculateTotal('quantity4', 10, 'total4')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('Kids Books', document.getElementById('quantity4').value)">Buy Now</button>
            <p>Total: $<span id="total4">10</span></p>
        </div>
    </div>
</div>

<script>
    function placeOrder(product, quantity) {
        alert(`You ordered ${quantity} ${product} successfully.`);
    }

    function calculateTotal(quantityId, pricePerUnit, totalId) {
        const quantity = document.getElementById(quantityId).value;
        const total = quantity * pricePerUnit;
        document.getElementById(totalId).innerText = total.toFixed(2);
    }
</script>

<div id="footer">
    <div id="col">
        <h2>About Us</h2>
        <p>We're passionate about bringing stories to life. Our mission is to provide a diverse collection of books that inspire, educate, and entertain readers of all ages. Whether you're searching for your next great read or a special gift, we're here to help you discover the perfect book!</p>
        <button>READ MORE</button>
    </div>
    <div id="col">
        <h2>Client Information</h2>
        <ul>
            <li>Order Process</li>
            <li>Delivery and Pickup Options</li>
            <li>discount imformation</li>
            <li>Special Offers and Loyalty Programs</li>
            <li>Customer Support</li>
        </ul>
    </div>
    <div id="col">
        <h2>Customer Services</h2>
        <ul>
            <li>Support Forums</li>
            <li>Community Area</li>
            <li>FAQ</li>
            <li>Customer Feedback</li>
            <li>Community Agents</li>
            <li>Terms & Conditions</li>
        </ul>
    </div>
    <div id="col">
        <h2>Contact Us</h2>
        <pre>nyarutarama</pre>
        <pre>Rwanda</pre>
        <pre>support@nexora.com</pre>
        <pre>Open: 24/7</pre>
    </div>
</div>

<div id="foot" style="padding: 0 60px 30px;">
    <p>Copyright 2024 by Nexora's Book Store | All Rights Reserved</p>
</div>

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
