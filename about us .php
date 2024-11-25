
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
    <title>About Us - Nexora's Book Store</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: rgb(79, 76, 72);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            color: #4CAF50;
            margin-bottom: 15px;
        }

        section p {
            margin: 15px 0;
            font-size: 1.1em;
        }

        section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            margin: 10px 20px;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        .cta {
            text-align: center;
            margin-top: 20px;
        }

        .cta a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .cta a:hover {
            background-color: #45a049;
        }

        footer {
            background-color: rgb(79, 76, 72);
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <h1> welcome to our mult-niche website </h1>
    <div id="cover">
        <img src="images/mult.webp" alt="Bookstore Cover">
    </div>
    <section>
        <h2>Welcome to Nexora website</h2>
        <p>At Nexora, we bring together a world of creativity and style, 
            offering a curated selection of products that cater to your every need.
             Whether you’re looking for the latest bestsellers at our bookstore,
              exploring trendy women’s clothing, indulging in our premium cosmetics and accessories, 
              embracing sustainable living, or discovering fresh music albums – we’ve got something just for you.

            Shop with us and experience the perfect blend of luxury, fashion, and eco-consciousness.
             Welcome to Nexora, where your shopping experience is always unique and exciting!
            
            </p>
        <img src="images/mult2.jpg" alt="Bookshelves at Nexora's Book Store">

        <h2>Our Mission</h2>
        <p>At Nexora, our mission is to inspire and empower individuals through a thoughtfully curated selection
             of products that reflect beauty, style, sustainability, and creativity.
              We are dedicated to offering a seamless shopping experience across multiple niches
             from captivating books and stylish women’s fashion to high-quality cosmetics, accessories, 
               and eco-friendly products.

            We believe in promoting conscious consumerism by supporting sustainable practices and
             providing products that make a positive impact on both you and the planet. 
             Our goal is to create a space where every customer feels valued, inspired, 
             and confident in their choices, knowing that Nexora is more than just a store
              it’s a destination that celebrates individuality, creativity, and sustainability.</p>

        <h2>Our Story</h2>
        <p>Nexora was born from a simple yet powerful idea: to create a space where diverse passions come together
             under one roof, offering a curated blend of products that inspire, delight, and empower.
              What started as a vision to offer quality books and music has blossomed into a vibrant multi-niche marketplace,
               bringing together a wide range of items, from chic women’s clothing and accessories
                to eco-conscious sustainable products and high-performance cosmetics.

            Our journey began with a love for storytelling—whether through the pages of a book, 
            the rhythms of music, or the stories woven into the fabric of fashion. 
            As we explored these passions, we saw the potential to build a community where 
            individuals could find products that reflect their values and help them express their unique style, 
            all while promoting sustainability.
            
            At Nexora, we’re more than just a store—we are a movement. 
            Our commitment to offering products that support both personal expression and 
            a sustainable future is at the heart of everything we do.
             Each item we offer has been carefully selected to enhance
              your life and contribute to a positive impact on the world.
            
            Join us on this journey, and discover a world of endless possibilities at Nexora,
             where passion meets purpose.</p>

        <h2>What We Offer</h2>
        <ul>
            <li>Books: A diverse collection of inspiring and entertaining books for all readers.</li>
            <li>Women’s Clothing : Fashionable and comfortable clothing for every occasion.</li>
            <li>Accessories & Cosmetics : High-quality beauty and fashion accessories to enhance your look.</li>
            <li>Sustainable Products : Eco-friendly goods to help you live a greener lifestyle.</li>
            <li>Music Albums : A curated selection of albums for every music lover.</li>
        </ul>

        <div class="cta">
            <p>Ready to discover your next great read?</p>
            <a href="index.html">Explore Our Collection</a>
        </div>
    </section>

    <footer>
        <p>Copyright © 2024 Nexora's Book Store. All Rights Reserved.</p>
    </footer>
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
