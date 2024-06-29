<?php include('../includes/header.php'); ?>
<main>
    <h2>Products</h2>
    <div class="product-cards">
        <?php
        include('../includes/db.php');
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product-card'>";
                echo "<a href='product.php?id=" . $row['id'] . "'>";
                echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "</a>";
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
        $conn->close();
        ?>
    </div>
</main>
<?php include('../includes/footer.php'); ?>

