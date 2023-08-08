<?php
include_once 'functions.php';

echo 'welcome';
echo '<br>';

?>

<br>
<a href=<?php echo getNewUrl($_SERVER['REQUEST_URI'], 'home'); ?>>Home</a>
