<?php include('includes/header.php'); ?>
<main class="index-main">
<section class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="/dropshipping-website/assets/images/banner1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
            <img src="/dropshipping-website/assets/images/banner2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
            <img src="/dropshipping-website/assets/images/banner3.jpg" style="width:100%">
        </div>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
       </script>
        <!-- <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
        <button class="next" onclick="plusSlides(1)">&#10095;</button> -->
    </section>
    <section class="hero-section">
        <h2>Welcome to Our Dropshipping Store</h2>
        <p>Explore our wide range of products and find the perfect items for your needs.</p>
        <a href="/dropshipping-website/pages/products.php" class="btn-shop">Shop Now</a>
    </section>
    <section class="about-section">
        <h2>About Us</h2>
        <p>Welcome to our dropshipping store! We are dedicated to providing high-quality products and exceptional customer service.</p>
    </section>
    <h2>Products</h2>
    <?php
    include('includes/db.php');
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
            echo "<h3>" . $row['name'] . "</h3>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<p>$" . $row['price'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No products available.";
    }
    $conn->close();
    ?>

</main>
<?php include('includes/footer.php'); ?>
