<?php

$path = 'http://www.triaxe-store.com/accessoires-videos';
$products_path = 'http://www.triaxe-store.com/catalog/category/moreproducts';
$ch = curl_init($path);

curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
$data = file_get_contents($products_path);


//curl_exec($ch);
print_r($data);



//CURLOPT_FOLLOWLOCATION
?>
