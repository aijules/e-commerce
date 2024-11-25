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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body >
    <!-- Navigation -->
    <header>
        <nav>
            <h1>Welcome to Nexora E-Commerce Website</h1>
            <a href="accessories.php">Cosmetics and Accessories</a>
            <a href="women clothing.php">Women Clothing</a>
            <a href="home.php">Book Store</a>
            <a href="sustainable product.php">sustainable-products</a>
            <a href="music.php">Music Accessories</a>
            <a href="view_cart.php">cart view</a>
            
      
            <a href="Dashboard.php">Dashboard</a>
            
              

            </a>

            <!-- Sign Up and Sign In buttons -->
            <button id="signupButton" onclick="showSignupForm()">Sign Up</button>
            <button id="signinButton" onclick="showSigninForm()">Sign In</button>
        </nav>

        <!-- Search bar -->
        <div id="search-container" style="position: relative; margin-top: 20px;">
            <input type="text" id="searchInput" oninput="searchProducts()" placeholder="Search for products...">
            <ul id="searchDropdown" class="hidden"></ul>
        </div>
    </header>
<!-- Product images with prices -->
 <div id="h1a">
 <h1>"Welcome to Nexora,Your Ultimate Shopping Destination!"</h1>
 <h1>"christmas  Deals Are Here! Save Big on Must-Have Products!" 
  Unbeatable discounts on the products you love. Hurry, before they’re gone,buy one get one free😊</h1>
  </div>
<section class="product-section">
  <div class="product-row">
    <div class="product">
      <img src="images/product1.jpg" alt="Elegant Tote">
      <p>Elegant Tote</p>
      <p>$100</p>
      <button class="buy-now-button">Buy Now</button>

    </div>
    <div class="product">
      <img src="images/product2.jpg" alt="Product 2">
      <p>sophisticated showroom sitting chairs</p>
      <p>$120</p>
      
     <button class="buy-now-button">Buy Now</button>
     </div>
    <div class="product">
      <img src="images/product3.jpg" alt="Product 3">
      <p>Dazzling Heels</p>
      <p>$150</p>
      
    <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/product4.jpg" alt="Product 4">
      <p>luxirious classy glasses</p>
      
      <p>$200</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
  </div>
  
  <div class="product-row">
    <div class="product">
      <img src="images/product5.jpg" alt="Product 5">
      <p>sparking Accessories</p>
      <p>$80</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/product6.jpg" alt="Product 6">
      <p>fashionable finds</p>
      <p>$110</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="product">
      <img src="images/product7.jpg" alt="Product 7">
      <p>Botanical beauty</p>
      <p>$130</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    
    <div class="product">
      <img src="images/product8.jpg" alt="Product 8">
      <p>AI-books</p>
      <p>$160</p>
      
     <button class="buy-now-button">Buy Now</button>
     </div>
  </div>
</section>

<?php
session_start();  // Start the session to store cart items
while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<img src='images/" . $row['image'] . "' alt='" . $row['product_name'] . "'>";
    echo "<p>" . $row['product_name'] . "</p>";
    echo "<p>$" . $row['price'] . "</p>";
    echo "<p>" . $row['description'] . "</p>";

    // Add to Cart Form
    echo "<form action='add_to_cart.php' method='POST'>";
    echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
    echo "<input type='hidden' name='product_name' value='" . $row['product_name'] . "'>";
    echo "<input type='hidden' name='price' value='" . $row['price'] . "'>";
    echo "<label for='quantity_" . $row['id'] . "'>Quantity:</label>";
    echo "<input type='number' id='quantity_" . $row['id'] . "' name='quantity' min='1' value='1' required>";
    echo "<button type='submit'>Add to Cart</button>";
    echo "</form>";
    echo "</div>";
}
?>





    <!-- Sign Up Form -->
    <div id="signupForm" class="form-container hidden">
        <h2>Sign Up</h2>
        <form id="signup" action="signup.php" method="POST" >
            <input type="text" id="names" placeholder="Full names">
            <input type="email" id="emailSignup" placeholder="Email">
            <input type="password" id="passwordSignup" placeholder="Password">
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Sign In Form -->
    <div id="signinForm" class="form-container hidden">
        <h2>Sign In</h2>
        <form id="signin" action="signin.php" method="POST">
            <input type="email" id="emailSignin" placeholder="Email">
            <input type="password" id="passwordSignin" placeholder="Password">
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Background Image Slider Controls -->
    <div class="slider-controls">
        <button id="leftArrow">&larr;</button>
        <button id="rightArrow">&rarr;</button>
    </div>
    
    <div id="section">

      <div id="left" style="width: 50%;">
          
        <h1>Welcome to Nexora, Your Ultimate Shopping</h1>
        
        <p><strong>Destination!" "Explore an exclusive collection 
        
         of products with unbeatable prices,<br>
          fast delivery, and the best customer service.<br>
          Start your shopping journey today!"
        </strong>
      </div>
      
      <div id="right" style="width: 100%;">
          
              <h2 id="mid">promotional products</h2>
              <div id="box1"style="border: 1px solid #ddd; padding: 10px; margin: 10px;">
                      <h2>sustainable-products: below $200</h2>
                      
                    <pre><strong>  Functional Wooden Shelving Unit</strong></pre>
                      <h1>40%discount off</h1>
                      <img height="5%" width="5%" src="images/promotion2.jpg" alt="">
                      <h2>Descriptions</h2>
                     <p>
                      <strong>
                      Transform your space with the timeless charm of , 
                      a wooden shelving unit designed to combine style and practicality.
                       Crafted from high-quality, sustainably sourced wood, this piece boasts 
                       durability and natural beauty, making it a perfect addition to any room.

                      Featuring spacious shelves, it offers ample storage and 
                      display options for your books, plants, decor, and more. Its versatile 
                      design seamlessly complements modern, rustic, or classic interiors,
                       adding warmth and character to your home or office.
                      
                      Easy to assemble and built to last,  is the 
                      ultimate blend of elegance and functionality. Bring organization 
                      and style to your space with this eco-friendly shelving solution.</strong>
                     </p>

                  </div>
          
                  <div id="box2"style="border: 1px solid #ddd; padding: 10px; margin: 10px;">
                    <h2>perfume & fragnance: below $80</h2>
                    <pre><strong> Elegance: A Fragrance That Defines You</strong></pre>

                   <h1>20%discount off</h1>
                    <img height="5%" width="5%" src="images/promotion1.jpg" alt="">
                    <h2>Descriptions</h2>

                   <p> 
                    <strong>
                    Immerse yourself in a world of timeless beauty with [Perfume Name]. 
                    Carefully crafted to awaken your senses, this luxurious blend of 
                    [key notes, e.g., bergamot, jasmine, and sandalwood] is designed
                     to reflect your unique personality and charm.

                    Perfect for every occasion, [Perfume Name] lingers delicately, 
                    leaving a trail of sophistication and allure wherever you go.
                     Encased in a stunning bottle that embodies elegance, this 
                     fragrance is more than a scent—it's a statement.
                    
                    Discover your signature essence today with [Perfume Name],
                     because every moment deserves a touch of magic.
                    </strong>
                    </p>
                    
                    
                   

                </div>
          
                <div id="box3"style="border: 1px solid #ddd; padding: 10px; margin: 10px;">
                  <h2>dresses: below $50</h2>
                  <pre><strong> Elegance: Discover the Perfect Dress</strong></pre>

                 <h1>20%discount off</h1>
                  <img height="5%" width="5%" src="images/promotion3.jpg" alt="">
                  <h2>Descriptions</h2>
                 <p>
                  <strong>
                  Step into timeless style with our collection of dresses,
                   designed to celebrate your individuality and elevate your wardrobe.
                    Whether you're embracing casual charm, exuding professional poise,
                     or dazzling at special events, our dresses are crafted to fit every occasion.

                  Made from premium fabrics with meticulous attention to detail, 
                  each piece offers unparalleled comfort and a flattering silhouette. 
                  From flowing maxi dresses to chic midi and mini styles, our range features 
                  [highlight details, e.g., vibrant prints, delicate lace, or minimalist designs]
                   to suit your unique taste.
                  
                  Redefine your style effortlessly with a dress that feels as good as it looks.
                   Find your perfect fit today and make every moment unforgettable.
                   </strong>
                 </p>
              </div>
              <div id="box4"style="border: 1px solid #ddd; padding: 10px; margin: 10px;">
                <h2>books: below $100</h2>
                <pre><strong> Worlds of Knowledge and Imagination</strong></pre>

               <h1>20%discount off</h1>
                <img height="5%" width="5%" src="images/promotion5.jpg" alt="">
                <h2>Descriptions</h2>
                <p>
                  <strong>
                  Dive into our curated collection of books, where every page offers 
                  a journey of discovery, inspiration, and adventure. From timeless classics
                   to the latest bestsellers, our library caters to every reader—whether 
                   you seek gripping mysteries, heartfelt romances, thought-provoking non-fiction,
                    or captivating fantasy.

                  Each book is a gateway to new ideas, unforgettable stories, 
                  and moments of quiet reflection. Perfect as a gift or a personal treasure,
                   our selection is thoughtfully chosen to inspire, educate, and entertain.
                  
                  Find your next favorite read today and let the power of words transform your world.
                  </strong>
                  </p>
            </div>
          
              </div>
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
