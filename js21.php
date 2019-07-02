<?php
// 一維陣列
// $p[index:類書本目錄 = offset偏移量] = 值
// $p[出現點數] = 出現次數
$p = array(1 => 0,0,0,0,0,0); //$p[1] = 0, $p[2] = 0, ...$p[6] = 0
var_dump($p);

for($i=0; $i<100000;$i++){
    $point =  rand(1,9);
    $p[$point>6?$point-3:$point]++; // 三元運算式: 大於6就-3, 不然就保持原狀
}


for ($i = 1; $i <=6; $i++){
    echo "{$i}點出現{$p[$i]}次<br>";

}

echo '<hr>';
foreach ($p as $key => $value){ // 用foreach: 跑每一個值放進value
  echo "{$key}點出現{$value}次<br>";
}



