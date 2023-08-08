<?php
include_once 'functions.php';

echo 'home page';
echo '<br>';

?>

<br>
<a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'welcome'); ?>>Welcome</a>
