<?php
include_once 'functions.php';
?>
<!-- <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'welcome'); ?>>Welcome</a> -->

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
            <div class="logo">
                S.
            </div>
            <form action="search">
                <input type="text" placeholder="Search">
            </form>
            <div class="buttons">
                <a href="">Account</a>
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'wish'); ?>>Wish</a>
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'cart'); ?>>Cart</a>
            </div>
        </section>

        <section id="catalog">
            <div class="card-wrapper">
                <div class="card">
                    <p calss="name">NAME</p>
                    <p class="price">199$</p>
                </div>
                <div class="card">
                    <p calss="name">NAME</p>
                    <p class="price">199$</p>
                </div>
                <div class="card">
                    <p calss="name">NAME</p>
                    <p class="price">199$</p>
                </div>
                <div class="card">
                    <p calss="name">NAME</p>
                    <p class="price">199$</p>
                </div>
                <div class="card">
                    <p calss="name">NAME</p>
                    <p class="price">199$</p>
                </div>
            </div>
        </section>

        <section id="footer">
            <div class="logo">S.</div>
            <div class="menu-contacts">
                <div class="menu">
                    <h3>Menu</h3>
                    <a href="">Home</a>
                    <a href="">Wish</a>
                    <a href="">Cart</a>
                </div>
                <div class="contacts">
                    <h3>Contacts</h3>
                    <a href="tel:tel:+37129292929">+371 29292929 </a>
                    <a href = "mailto: help@sstore.com">help@sstore.com</a>
                    <div class="soc-icons">
                        <a href="inst"><img src="./assets/instagram.svg"></a>
                        <a href="twit"><img src="./assets/twitter.svg"></a>
                        <a href="fb"><img src="./assets/facebook.svg"></a>
                    </div>
                </div>
            </div>
            <div class="notif-subscribe">
                <p>Subscribe</p>
                <form action="">
                    <input type="email" name="email" placeholder="Email Adress">
                    <button type="submit" name="subscribe" value="Submit">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <script src="script.js"></script>
</body>
</html>