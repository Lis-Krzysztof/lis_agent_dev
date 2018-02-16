<?php

$path = 'https://performancevelo.com/25-velos-gravel';
$file_content = file_get_contents($path);
preg_match_all('/<div\sclass="product-container(.*?)<\/div/',$file_content, $data,PREG_PATTERN_ORDER);
$variants = array();
$p_dat = array();
$variants_char = array();
$variants_char_final = array();
$names = array('code','Product name','Product page','Product img','SKU','Junk status','Price',);


foreach ($data[1] as $key => $value) {
  preg_match("/product_img_link\"\shref=\"([^\"]+)/",$value,$pd);
  array_push($p_dat,file_get_contents($pd[1]));
}


foreach ($p_dat as $key => $value) {
  preg_match_all('/title="(\d{2})"/',$value,$pd_version);
  array_push($variants,$pd_version[1]);
}

foreach ($p_dat as $key => $value) {
  preg_match('/\/li><li><span>([^<]+)<.*?content="([^"]+)".*?a\shref="([^"]+jpg)".*?itemprop="sku"\scontent="([^"]+)".*?class="editable">([^<]+)<.*?itemprop="price"[^>]*>([^<]+)</',$value,$pd_char);
  array_push($variants_char,$pd_char);
}


foreach ($variants_char as $key => $value) {
  array_push($variants_char_final,array_combine($names,$variants_char[$key]));
}

foreach ($variants as $key => $value) {
  foreach ($value as $max => $min) {



  }
}






print_r($variants);
print_r($variants_char_final);
?>
