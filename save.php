<?php
$content = $_POST['content'];
$file = fopen('saved.txt', 'a');
fwrite($file, $content . PHP_EOL);
fclose($file);
?>
