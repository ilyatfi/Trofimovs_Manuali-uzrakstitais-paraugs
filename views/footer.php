<section id="footer">
    <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?> class="logo">S.</a>
    <div class="menu-contacts">
        <div class="menu">
            <h3>Menu</h3>
            <div class="buttons">
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?>>Home</a>
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'wish'); ?>>Wish</a>
                <a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'about-us'); ?>>About us</a>
            </div>
        </div>
        <div class="contacts">
            <h3>Contacts</h3>
            <a href="tel:tel:+37129292929">+371 29292929 </a>
            <a href = "mailto: help@sstore.com">help@sstore.com</a>
        </div>
    </div>
    <form id="notif-subscribe" action="post-email.php" method="post">
        <h3>Subscribe</h3>
        <input class="input" type="email" name="email" placeholder="Email Adress">
        <input class="btn" type="submit" name="subscription" value="Submit" placeholder="Submit">
        <p id="subscribed"></p>
    </form>
</section>
