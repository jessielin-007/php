<?php

function isTWid($id) : bool {
// 1. precheck
// length, A, 1or2, 3-10 => 0~9
// /^[A-Z][12][0-9]{8}$/ 正規表示regx
// https://www.php.net/manual-lookup.php?pattern=preg&scope=quickref

$ret = false;
  if(preg_match("/^[A-Z][12][0-9]{8}$/", $id)) {
    $letters='ABCDEFGHJKLMNPQRSTUVXYWZIO';
    $c1 = substr($id, 0, 1); //從第0個位置取一個
    $n12 = strpos($letters, $c1) + 10; //A:10, B:11 ...
//    echo $n12; //邊codinng邊debug
    $n1 = (int)($n12 / 10);
    $n2 = $n12 % 10;
    $n3 = substr($id, 1, 1);
    $n4 = substr($id, 2, 1);
    $n5 = substr($id, 3, 1);
    $n6 = substr($id, 4, 1);
    $n7 = substr($id, 5, 1);
    $n8 = substr($id, 6, 1);
    $n9 = substr($id, 7, 1);
    $n10 = substr($id, 8, 1);
    $n11 = substr($id, 9, 1);

    $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 + $n6*5 +
    $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
    
    $ret = $sum % 10 == 0; 

    
  }
  
  return $ret;

}
?>