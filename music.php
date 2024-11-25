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
    <title>E-COMMERCE</title>
    <link rel="stylesheet" href="css/e-commerce.css">
</head>
<body>
    <section id="header">
<a href="#"><img src="images/logo.png" class="logo" alt=""</a>

<div>
   <ul id="navbar">
    <li><a href="index.php">index page</a></li>
    
    <li><a href="about us .php">millestones</a></li>
    <li><a href="contact-us.php">contact-us</a></li>
   </ul>
</div>

    </section>
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>
    <section id="feature" class=".section-p1">
<div class="fe-box">
<img width="30%" src="images/headphones.jpg" alt="">
<h6>Free shipping</h6>
</div>
<div class="fe-box">
    <img width="30% " src="images/african guitar.jpg alt="">
    <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img width="30%"src="images/analog radio.jpg" alt="">
        <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img width="30%" src="images/cassette.jpg" alt="">
            <h6>Promotions</h6>
            </div>
            <div class="fe-box">
                <img width="30%"  src="images/piano.jpg" alt="">
                <h6>Happy Sell</h6>
                </div>
                <div class="fe-box">
                    <img width="30%" src="images/african guitar.jpg" alt="">
                    <h6>F24/7 surpport</h6>
                    </div>
    
    </section>
    <section id="product1" class=".section-p1">
        <h2>FEATURED PRODUCTS</h2>
        <P>summer collection new morden design</P>
        <div class="pro-container">
            <div class="pro">
                <img  width="30%"   src="images/light stage.jpg" alt="">
                <h5>light to light up your stage</h5>
                <h4>$50</h4>
            </div>
        </div>
        <div class="pro">
            <img width="30%"   src="images/earpods.jpg" alt="">
            <h5>Earpods for life</h5>
            <h4>$100</h4>
        </div>
        <div class="pro">
            <img width="30%" src="images/earphones.jpg" alt="">
            <h5>cozy earphones</h5>
            <h4>$20</h4>
        </div>
        <div class="pro">
            <img width="30%" src="images/microphone.jpg" alt="">
            <h5>stage microphone/h5>
            <h4>$500</h4>
        </div>
        <div class="pro">
            <img width="30%" src="images/italian guitar.jpg" alt="">
            <h5>italian guitar</h5>
            <h4>$25-50</h4>
        </div>
        <div class="pro">
            <img width="30%" src="images/simphony.jpg" alt="">
            <h5>symphony </h5>
            <h4>$2-5</h4>
        </div>

    </section>
    <section id="banner">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% Off</span>-All Products</h2>
        <button class="normal">Explore More</button>


    </section>
    <section id="newsletter">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign up</button>

        </div>
    </section>
    
    <link rel="stylesheet" href="e-commerce.js">

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