
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Store</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; font-size:15px;}
        .product-container { display: flex; flex-wrap: wrap; gap: 20px; margin-top:100px;}
        .product-card { background: #fff; border: 1px solid #ddd; padding: 15px; width: 220px;height:350px; text-align: center; border-radius: 8px; }
        .product-card img { max-width: 100%; height: 200px; object-fit: cover; border-radius: 5px; }
        .price { color: #28a745; font-weight: bold; font-size: 1.2em; }
        .rating { color: #ff9800; margin: 5px 0; }
        .cart-table { width: 100%; border-collapse: collapse; background: #fff; margin-bottom: 30px; }
        .cart-table th, .cart-table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        .btn-add { background: #007bff; color: white; border: none; padding: 8px 15px; cursor: pointer; border-radius: 4px; }
        /* Container for the stars */
.stars-outer {
    display: inline-block;
    position: relative;
    font-family: FontAwesome; /* Or use standard Unicode stars */
    font-size: 20px;
    letter-spacing: 2px;
}

.stars-outer::before {
    content: "★★★★★";
    color: #ccc; /* Empty star color */
}

.stars-inner {
    position: absolute;
    top: 0;
    left: 0;
    white-space: nowrap;
    overflow: hidden;
    width: 0; /* This will be changed by PHP */
    color: #f8ce0b; /* Filled star color */
}

.stars-inner::before {
    content: "★★★★★";
}
        
    </style>
</head>
<body>

    <h1>Available Products</h1>
    <div class="product-container">
        <?php
        // Fetch all products from MySQL
        $sql = "SELECT * FROM product_sale";
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
            while($row = $result->fetch_assoc()):
        ?>
            <div class="product-card">
                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="product">
                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                <div class="rating">
    <?php 
        // Calculate percentage (e.g., 4.5 / 5 * 100 = 90%)
        $ratingValue = $row['rating'];
        $ratingPercentage = ($ratingValue / 5) * 100;
    ?>
    
    <div class="stars-outer" title="<?php echo $ratingValue; ?> stars">
        <div class="stars-inner" style="width: <?php echo $ratingPercentage; ?>%;"></div>
    </div>
    
    <span class="number-rating"><br>
        <?php echo $ratingValue; ?></span>
     
</div>
                      <script src="js/script.js"></script>
                <div class="price">₹<?php echo number_format($row['price'], 2); ?></div>
                
                <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="add_to_cart" class="btn-add">Add to Cart</button>
                </form>
            </div>
        <?php 
            endwhile; 
        else:
            echo "No products found.";
        endif; 
        ?>
    </div>

</body>
</html>
<?php ob_end_flush(); ?>