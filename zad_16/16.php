<?php

$path = 'https://performancevelo.com/25-velos-gravel';
$file_content = file_get_contents($path);
preg_match_all('/<div\sclass="product-container(.*?)<\/div/',$file_content, $data,PREG_PATTERN_ORDER);
$p_data = array();
$p_dat = array();
$p_data_char = array();
$p_data_char_final = array();
$names = array('code','Product name','Product page','Product img','SKU','Junk status','Price','Versions');


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
  //print_r($value);

  //array_push($p_data[$key][$value], $p_data_char[$key]);
  foreach ($p_data[$key] as $key => $value) {
    # code...
    http://www.triaxe-store.com/catalog/category/moreproducts
  }


}


/*


foreach ($p_data_char as $key => $value) {
  array_push($p_data_char_final,array_combine($names,$p_data_char[$key]));
}



foreach ($p_data as $key => $value) {
  print_r($value);
}





*/



//print_r($pd);
//print_r($data);
//print_r($p_data);
//print_r($p_dat);
//print_r($all_data);
//print_r($pd_char);
//print_r($p_data_char);
//print_r($p_data_char_final);
?>
