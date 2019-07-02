<?php

$var1 =1; 
echo gettype($var1) .  '<br>';
$var1 =12.3; 
echo gettype($var1) .  '<br>';


$var1 =10; $var2 =3;
$var3 = $var1 / $var2;
echo (int)($var3) .  '<br>'; //強制轉型 double => integer

$var4 = $var1 % $var2; // 取餘數
echo ($var4) .  '<br>';

$var5 = 012; //０開頭 八進位
echo ($var5) .  '<br>';

$var6 = 0x12; 
echo ($var6) .  '<br>';

$var7 = 10;
$var8 = $var7++;  // ++在前, ++在後
echo "{$var7} : {$var8}<br>";
