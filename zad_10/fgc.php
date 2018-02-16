<?php
$start = microtime(true);

$path = 'http://php.net/archive/1998.php';
file_get_contents($path);

$time_elapsed_secs = microtime(true) - $start;
echo "$time_elapsed_secs";

?>
