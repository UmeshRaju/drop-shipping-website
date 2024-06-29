<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dropshipping Website</title>
    <link rel="stylesheet" href="/dropshipping-website/assets/css/style.css">
</head>
<body>
<header>
    <h1>Welcome to My Dropshipping Website</h1>
    <nav>
        <ul>
            <li><a href="/dropshipping-website/index.php">Home</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="/dropshipping-website/pages/cart.php">Cart</a></li>
            <a href="/dropshipping-website/pages/logout.php">Logout</a>
            <?php else: ?>
            <li><a href="/dropshipping-website/pages/login.php">Login</a></li>
            <li><a href="/dropshipping-website/pages/logout.php">logout</a></li>
            <li><a href="/dropshipping-website/pages/register.php">Register</a></li>
            <?php endif; ?>
            <li><a href="/dropshipping-website/pages/admin.php">Admin</a></li>
            <li><a href="/dropshipping-website/pages/products.php">View Our Products</a></li>
        </ul>
    </nav>
</header>
