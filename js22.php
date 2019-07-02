<?php
$a = array(1,2,3,7 => 4,5,6,'js',12.3); // => : mapping 對應關係
for ($i=0; $i<=11; $i++){
    echo $a[$i] . '<br>';
}


echo '<hr>';
foreach ($a as $key => $value){ // 用foreach: 跑每一個值放進value
  echo $key . '=>'  . $value . '<br>';
}