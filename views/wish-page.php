<?php
include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wish</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page-wrapper">
        <?php include "views/top-nav.php" ?>

        <div class="page-content">

            <div id="message"></div>

            <section id="catalog">
                <div class="card-wrapper"></div>
            </section>
        </div>
        
        <?php include "views/footer.php" ?>
    </div>
    <script src="JS/script.js"></script>
    <script src="JS/wish-products.js"></script>
</body>
</html>
