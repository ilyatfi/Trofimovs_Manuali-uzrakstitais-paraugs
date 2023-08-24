<?php
include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrapper">
        <section id="top-nav">
            <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?> class="logo">S.</a>
            <form action="search">
                <input type="text" placeholder="Search">
            </form>
            <div class="buttons">
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'wish'); ?>>Wish</a>
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'cart'); ?>>Cart</a>
            </div>
        </section>

        <div class="page-content">

            <div id="message"></div>

            <section id="catalog">
                <div class="card-wrapper"></div>
            </section>
        </div>

        <section id="footer">
            <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?> class="logo">S.</a>
            <div class="menu-contacts">
                <div class="menu">
                    <h3>Menu</h3>
                    <div class="buttons">
                        <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?>>Home</a>
                        <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'wish'); ?>>Wish</a>
                        <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'cart'); ?>>Cart</a>
                    </div>
                </div>
                <div class="contacts">
                    <h3>Contacts</h3>
                    <a href="tel:tel:+37129292929">+371 29292929 </a>
                    <a href = "mailto: help@sstore.com">help@sstore.com</a>
                    <div class="soc-icons">
                        <a href="inst"><img src=""></a>
                        <a href="twit"><img src=""></a>
                        <a href="fb"><img src=""></a>
                    </div>
                </div>
            </div>
            <div class="notif-subscribe">
                <p>Subscribe</p>
                <form action="post-email.php" method="post">
                    <input type="email" name="email" placeholder="Email Adress">
                    <input type="submit" name="subscribtion" value="Submit" placeholder="Submit">
                </form>
            </div>
        </section>
    </div>
    <script src="home-products.js"></script>
    <script src="script.js"></script>
</body>
</html>
