<?php
$start = microtime(true);

$path = 'http://php.net/archive/1998.php';
$ch = curl_init($path);

$time_elapsed_secs = microtime(true) - $start;

echo "$time_elapsed_secs";

?>
