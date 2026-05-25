<!---This is the code to insert product item in cart as well as 
my_cart in mysqli data base  ---->

<?php
ob_start();
session_start();

$conn = new mysqli("localhost", "root", "", "product");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['add_to_cart'])) {
    $product_id = (int)$_POST['product_id'];
    $qty = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    // 1. FETCH the latest data from the products table to ensure price is correct
    $stmt = $conn->prepare("SELECT name, price, image FROM product_sale WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        $name  = $product['name'];
        $price = $product['price'];
        $image = $product['image'];
        $total = $price * $qty; // Calculate the total here

        // 2. INSERT into my_cart table
        // Notice: 5 columns = 5 question marks (?)
        $insert_stmt = $conn->prepare("INSERT INTO my_cart (image, name, price, quantity, total) VALUES (?, ?, ?, ?, ?)");
        
        // "ssdid" means: string, string, double(decimal), integer, double(decimal)
        $insert_stmt->bind_param("ssdid", $image, $name, $price, $qty, $total);
        
        if ($insert_stmt->execute()) {
            // 3. Update SESSION for the display table
            $_SESSION['cart'][$product_id] = [
                'name'     => $name,
                'price'    => $price,
                'image'    => $image,
                'quantity' => $qty
            ];
            
            // Success! Redirect to refresh the list
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Database Error: " . $insert_stmt->error;
        }
    } else {
        echo "Product not found.";
    }
}
?>
<?php
// 1. Start output buffering and session
ob_start();


// 2. Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "product";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. LOGIC: HANDLE "ADD TO CART"
if (isset($_POST['add_to_cart'])) {
    $product_id = (int)$_POST['product_id'];
    
    // Fetch product details from DB to ensure valid data
    $stmt = $conn->prepare("SELECT name, price, image FROM product_sale WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // If item exists, increment quantity; otherwise, add new entry
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = [
                'name'     => $product['name'],
                'price'    => $product['price'],
                'image'    => $product['image'],
                'quantity' => 1
            ];
        }
    }
    // Redirect to same page to prevent duplicate form submission on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Store</title>

    <style>
        body { font-family: Arial, sans-serif; background: white; padding: 10px; font-size:8px;}
        .product-container { display: flex; flex-wrap: wrap; gap: 10px; }
        .product-card { background: #fff; border: 1px solid #ddd; padding: 15px; width: 200px; text-align: center; border-radius: 8px; }
        .product-card img { max-width: 10%; height: 50px; object-fit: cover; border-radius: 5px; }
        .price { color: #28a745; font-weight: bold; font-size: 1.2em; }
        .rating { color: #ff9800; margin: 5px 0; }
        .cart-table { width: 5%; border-collapse: collapse; background: #fff; margin-bottom: 30px; }
        .cart-table th, .cart-table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        
    </style>
</head>
<body>

<!---This is the code to insert item in the cart  ---->
    <h2>🛒 Shopping Cart (Items: <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</h2>
    
    <?php if (!empty($_SESSION['cart'])): ?>

        <table class="cart-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $grand_total = 0;
                foreach ($_SESSION['cart'] as $item): 
                    $subtotal = $item['price'] * $item['quantity'];
                    $grand_total += $subtotal;
                ?>
                <tr>
                   <td><img src="<?php echo $item['image']; ?>" width="30px"></td>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td>₹<?php echo number_format($item['price'], 2); ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>₹<?php echo number_format($subtotal, 2); ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" align="right"><strong>Grand Total:</strong></td>
                    <td><strong>₹<?php echo number_format($grand_total, 2); ?></strong></td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        
        <img src="image\cart-empty.png" alt="Empty Cart" width="150px">
        <p>Your cart is empty.</p>
    <?php endif; ?>
    <?php

$conn = new mysqli("localhost", "root", "", "product");

if (isset($_POST['add_to_cart'])) {
    $product_id   = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price        = $_POST['price'];
    $quantity     = $_POST['quantity'];
    $user_id      = 1; // Replace with logged-in user ID

    // Store in session
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'price' => $price,
        'total'=>$totl,
        'quantity' => $quantity
    ];

    // Insert into my_cart database 
    $stmt = $conn->prepare("INSERT INTO my_cart (product_id, product_name, quantity,total, price, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiddi", $product_id, $product_name, $quantity, $price, $user_id);
    $stmt->execute();

    echo "Product added to cart!";
}
?>
