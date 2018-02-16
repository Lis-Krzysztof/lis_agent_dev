<?php

$path = 'http://massagestolhemma.se/wp-content/uploads/woo-product-feed-pro/csv/ecca90fc5eab1d159821c2c62cf7933e.csv';
$file_content = file_get_contents($path);

preg_match_all('/(\d+),"([^"]+)",.*?(http[^,]+),([^,]*),(\d+),(.*?)\n/s',$file_content,$data,PREG_SET_ORDER);





print_r($data);

?>
