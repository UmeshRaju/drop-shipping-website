<?php include('../includes/header.php'); ?>
<main class="admin-main">
    <h2>Add New Product</h2>
    <form action="admin.php" method="post" class="admin-form">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea id="product_description" name="product_description" required></textarea>
        </div>

        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" id="product_price" name="product_price" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="product_image_url">Product Image URL:</label>
            <input type="url" id="product_image_url" name="product_image_url" required>
        </div>

        <input type="submit" value="Add Product" class="btn-submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productName = $_POST['product_name'];
        $productDescription = $_POST['product_description'];
        $productPrice = $_POST['product_price'];
        $productImageUrl = $_POST['product_image_url'];

        include('../includes/db.php');
        $sql = "INSERT INTO products (name, description, price, image_url) VALUES ('$productName', '$productDescription', '$productPrice', '$productImageUrl')";
        if ($conn->query($sql) === TRUE) {
            echo "<p class='success-message'>The product has been added successfully.</p>";
        } else {
            echo "<p class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
        $conn->close();
    }
    ?>
</main>
<?php include('../includes/footer.php'); ?>
