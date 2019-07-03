<?php
$var1 = 'jessie';//字串用單引號不解譯 ; 變數用雙引號
$var2 = 40;
echo "{$var1} => {$var2}kg<br>"; // 字串要習慣加{}

$var3 = '12'; $var4= '3';
$var5 = $var3 . $var4;     // .代表字串相加, +代表數學運算
echo $var5; 


//  $var6 = '10js'; $var7= '3';
//  $var8 = $var6 + $var7;     // .代表字串相加, +代表數學運算
//  echo $var8; 


// true:1 false:0 布林值也可以運算 
// '' 空字串