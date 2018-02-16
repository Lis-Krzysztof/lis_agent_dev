<?php
$start = microtime(true);

exec('wget http://php.net/archive/1998.?><?php');

$time_elapsed_secs = microtime(true) - $start;
echo "$time_elapsed_secs";

?>
