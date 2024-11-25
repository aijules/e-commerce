
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
    <link rel="stylesheet" href="css/sustainable.css">
</head>
<body >
    <!-- Navigation -->
    <header>
        <nav>
            <h1>Nexora'Sustainable Products</h1>
            <a href="index.php">index page</a>
            <a href="about us .php">millestones</a>
            <a href="contact-us.php">contact-us</a>
           
            
        </nav>

        <!-- Search bar -->
        <div id="search-container" style="position: relative; margin-top: 20px;">
            <input type="text" id="searchInput" oninput="searchProducts()" placeholder="Search for products...">
            <ul id="searchDropdown" class="hidden"></ul>
        </div>
    </header>
<!-- Product images with prices -->
 <div id="h1a">
  <h1>Welcome to Nexora's sustainable-products</h1>
  <h4>Explore the best eco- friendly products.</h4>
</div>
<section class="product-section">
  <div class="product-row">
    <div class="product">
      <img src="images/solar camera.jpg" alt="solar camera">
      <p>solar camera</p>
      <p>$20</p>
      <button class="buy-now-button" data-name="sparkling Accessories" data-price="80">Buy Now</button>

    </div>
    <div class="product">
      <img src="images/solar cooker.jpg" alt="solar cooker">
      <p>solar cooker</p>
      <p>$120</p>
      
     <button class="buy-now-button">Buy Now</button>
     </div>
    <div class="product">
      <img src="images/solar panel.jpg" alt="solar panel">
      <p>solar panel</p>
      <p>$150</p>
      
    <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/wood toys.jpg" alt="wood toys">
      <p>wood toys</p>
      
      <p>$200</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
  </div>
  
  <div class="product-row">
    <div class="product">
      <img src="images/puzzle wood toys.jpg" alt="puzzle">
      <p>puzzle wood toys</p>
      <p>$80</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/solar washing machine.jpg" alt="camera">
      <p>solar washing machine</p>
      <p>$110</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/power saving lamp.jpg" alt="lamp">
      <p>power saving lamp</p>
      <p>$130</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    
    <div class="product">
      <img src="images/laptop-img.jpg" alt="hairbrush">
      <p>green makeup</p>
      <p>$160</p>
      
     <button class="buy-now-button">Buy Now</button>
     </div>
  </div>
</section>



<div id="section"></div>

<div id="left" style=" width: 50% 5px solid white; padding: 10px; margin: 10px;">
<h1> with"Nexora save the environment "by using our sustainable-products</h1>

</div>

<div id="right" style="width: 100% ;border: 5px solid #ddd; padding: 10px; margin: 10px;">

    <h4> sustainable on promotion and their Prices</h4>
    <div id="box1">
            <h2> cooker : $1000</h2>
            <pre> originalcooker from italy.</pre>
            <label for="quantity1">item numbers:</label>
            <select id="quantity1" onchange="calculateTotal('quantity1', 1000, 'total1')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('cooker', document.getElementById('quantity1').value)">
                make order
            </button>
            <p>Total: $<span id="total1">1000</span></p>

        </div>

        <div id="box2">
            <h2>solar panel : $800 </h2>
            <pre>solar panel</pre>
            <label for="quantity2">item number:</label>
            <select id="quantity2" onchange="calculateTotal('quantity2', 800, 'total2')">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('solar panel'), document.getElementById('quantity2').value)">
                make order
            </button>
            <p>Total: $<span id="total2">800</span></p>


        </div>

        <div id="box3" >
            <h2>power saving lamps: $20</h2>
            <pre>power saving lamp</pre>
            <label for="quantity3">item number:</label>
            <select id="quantity3"onchange="calculateTotal('quantity3', 7, 'total3')">
                
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeorder('power saving lamp', document.getElementById('quantity3').value)">
                make order 
            </button>
            <p>Total: $<span id="total3">20</span></p>

        </div>

        <div id="box4" >
            <h2>wooden toys</h2>
            <pre>wood toys from america reputed industries</pre>
            <label for="quantity4">Quantity:</label>
            <select id="quantity4"onchange="calculateTotal('quantity4', 10, 'total4')">
            
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button onclick="placeOrder('wooden toys', document.getElementById('quantity4').value)">
                make Order
            </button>
            <p>Total: $<span id="total4">30</span></p>

        </div>

    </div>
</div>

<script>
function placeOrder(product, quantity) {
    alert(`You ordered ${quantity}  ${product} successfuly.`);
}
</script>

</div>

   
          <div id="footer">
            <div id="col">
                <h2>About us</h2>
                <pre>Welcome to Nexora, Your Ultimate Shopping</pre>
                 <pre> Destination!" "Explore an exclusive collection </pre>
                  <pre>of products with unbeatable prices,</pre>
                   <pre>fast delivery, and the best customer service.</pre>
                    <pre>Start your shopping journey today!"</pre>
      
                <button>READ MORE</button>
            </div>
            <div id="col">
                <h2>Client information</h2>
                <ul>
                    <li>order and history preferances</li>
                    <li>payment information</li>
                    <li>shipping information</li>
                    <li>special offer and royality program</li>
                    <li>customer support and Feedback</li>
                    <li>marketing information</li>
        
                </ul>
            </div>
            <div id="col">
                <h2>Customer services</h2>
                <ul>
                    <li>support forums</li>
                    <li>community area</li>
                    <li>FAQ</li>
                    <li>customer feedback</li>
                    <li>comunity agent</li>
                    <li>terms&condition</li>
                </ul>
            </div>
            <div id="col">
                <h2>Contact-info</h2>
                <pre>nyarutarama, kg345rd</pre>
                <pre>Rwanda</pre>
                <pre>support@nexora.com</pre>
                <br>
                <pre>open:24/7</pre>
                
            </div>
            <div id="col"></div>
        </div>
        
        
      
          <footer>
            <p>&copy; 2024 Nexora E-Commerce Website | All Rights Reserved</p>
            <div class="social-icons">
              <a href="https://facebook.com" target="_blank">Facebook</a>
              <a href="https://twitter.com" target="_blank">Twitter</a>
              <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
          </footer>
          
    <script src="js/script.js"></script>

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
