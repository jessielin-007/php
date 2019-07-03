<?php
$a = 10; $b = 3; 
if ($a++ >= 10 && $b-- <= 3){ // &: 兩個條件都會判斷,&&：前面條件為false就不判斷後面, ||(or)：前面為true即為true
    echo "OK;  a={$a}; b={$b}";
}else{
    echo "xx;  a={$a}; b={$b}";
}

echo '<hr>';
$c =3; $d = 2; 
$e = $c & $d; // &(and),|(or): 二進位運算; ^ 異性相吸,同性相斥
echo $e;  