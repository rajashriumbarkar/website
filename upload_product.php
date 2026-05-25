<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="css/upload_product.css">
    <title>Product for sale</title>
    
</head>
<body>
    <h2>Upload Product for sale </h2>
    <div class="product">
    <form action="fetch_products.php" method="POST" enctype="multipart/form-data">
        <label>Product Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" required><br><br>
         
        <label>quantity:</label>
        <input type="text" name="quantity" required><br><br>

        
  
        <label>Rating (0-5):</label>
        <input type="number" step="0.1" min="0" max="5" name="rating"  required><br><br>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <button type="submit">Upload</button>
    </form>
</div>
    