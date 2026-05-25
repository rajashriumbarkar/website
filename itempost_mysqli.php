 <?php
$conn = new mysqli("localhost", "root", "", "product");

if (isset($_POST['add_to_cart'])) {
    $product_id   = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price        = $_POST['price'];
    $total        = $_POST['total'];
    $quantity     = $_POST['quantity'];
    $user_id      = 1; // Replace with logged-in user ID

    // Store in session
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'price' => $price,
        'total'=>$total,
        'quantity' => $quantity
    ];

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO my_cart (product_id, product_name, quantity,total, price, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiddi", $product_id, $product_name, $quantity, $price, $user_id);
    $stmt->execute();

    echo "Product added to cart!";
}
?>
