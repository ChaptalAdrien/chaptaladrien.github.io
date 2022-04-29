
<?php
$c = htmlspecialchars($_GET["c"]);

$file = 'c.txt';

file_put_contents($file, $c, FILE_APPEND | LOCK_EX);
?>
