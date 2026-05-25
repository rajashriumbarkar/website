<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "product";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name   = trim($_POST['name']);
    $price  = trim($_POST['price']);
    $rating = trim($_POST['rating']); // NEW: Get rating from form

    // Validate inputs (including rating)
    if (empty($name) || !is_numeric($price) || !is_numeric($rating)) {
        echo "Invalid product details.";
        exit;
    }

    // File upload handling
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExt = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowed)) {
            echo "Invalid file type.";
            exit;
        }

        if (!is_dir("uploads")) {
            mkdir("uploads", 0777, true);
        }

        $fileName = uniqid("prod_", true) . "." . $fileExt;
        $filePath = "uploads/" . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
            
            // UPDATED: Added 'rating' to the column list and 'd' (double/float) to bind_param
            $stmt = $conn->prepare("INSERT INTO product_sale (name, price, image, rating) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sdsd", $name, $price, $filePath, $rating);

            if ($stmt->execute()) {
                echo "Product uploaded successfully with rating: " . $rating;
            } else {
                echo "Database error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please select an image.";
    }
}
$conn->close();
?>