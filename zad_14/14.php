<?php

$path = 'http://techfx.co.nz/wp-json/product_feed';
$file_content = file_get_contents($path);
$data = json_decode($file_content);
print_r($data);

?>
