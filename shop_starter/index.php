<?php

include('autoloader.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <a href="index.php" class="logo">SHOP</a>
        <nav class="nav">
            <a href="index.php"><i class="bi"></i> Dashboard</a>
            <a href="orders.php"><i class="bi"></i> Orders</a>

            <?php if (isset($_SESSION['user'])): ?>
            <a href="#" title="Update my profile">Hi <?= $_SESSION['user'] ?></a>
            <a href="logout.php" class="btn btn-outline">Logout</a>
            <?php else: ?>
            <a href="logout.php" class="btn btn-outline">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

<div class="container">
<?php
    $url = strtok($_SERVER["REQUEST_URI"], '?');
    $c = new Controller_Front($url);
    $c->run();
?>
</div>

<footer class="footer">
    <div class="container">
        <p>&copy; Copyright by <a href="#">Jasper Scripts</a></p>
    </div>
</footer>

</body>
</html>