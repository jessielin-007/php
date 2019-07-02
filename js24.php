<?php
//二維陣列 ： 樹狀圖
$a[0] = 123;
$a[1] = array(1,2,3,4);
echo $a[0] . '<br>';
echo $a[1][0]. '<br>';
echo $a[1][2] . '<br>';
var_dump($a);

echo '<hr>';
echo is_array($a[0]); // 詢問是不是陣列, 1為ture, 不顯示為false