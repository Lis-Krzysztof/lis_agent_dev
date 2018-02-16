<?php

$path = 'https://performancevelo.com/25-velos-gravel';
$file_content = file_get_contents($path);
preg_match_all('/<div\sclass="product-container(.*?)<\/div/',$file_content, $data,PREG_PATTERN_ORDER);
$p_data = array();
$p_dat = array();
$p_data_char = array();
$p_data_char_final = array();
$names = array('code','Product name','Product page','Product img','SKU','Junk status','Price',);


foreach ($data[1] as $key => $value) {
  preg_match("/product_img_link\"\shref=\"([^\"]+)/",$value,$pd);
  array_push($p_dat,file_get_contents($pd[1]));
}


foreach ($p_dat as $key => $value) {
  preg_match_all('/title="(\d{2})"/',$value,$pd_version);
  array_push($p_data,$pd_version[1]);
}

foreach ($p_dat as $key => $value) {
  preg_match('/\/li><li><span>([^<]+)<.*?content="([^"]+)".*?a\shref="([^"]+jpg)".*?itemprop="sku"\scontent="([^"]+)".*?class="editable">([^<]+)<.*?itemprop="price"[^>]*>([^<]+)</',$value,$pd_char);
  array_push($p_data_char,$pd_char);
}




foreach ($p_data as $key => $value) {
  foreach ($value as $max => $min) {



  }
}



foreach ($p_data_char as $key => $value) {
  array_push($p_data_char_final,array_combine($names,$p_data_char[$key]));
}



print_r($p_data_char_final);
?>
