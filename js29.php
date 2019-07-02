<?php

function test1(){
    global $v; //宣告這個v是外面的v (不建議使用,會使得程式的相依性變高)
    $v +=7;
}

$v =100;
test1();
test1();
test1();
test1();
echo $v;