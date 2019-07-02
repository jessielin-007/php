<?php
//function fx($x){
//    return 2* $x + 1;
//}

//$var1 = fx(3);
//echo $var1;

function test1($var1){    // $var1是區域變數, 只有活在9-12行（傳值）
    $var1 += 10;
    return $var1;
}

function test2(&$var1){    //加入＆：傳遞整個變數(傳址)
    $var1 += 10;
    return $var1;
}

$var1 = 100;

//test1($var1);
//$var1 = test1($var1);
test2($var1);
echo $var1;