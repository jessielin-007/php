<?php
 $n = 100;

 echo sqrt(73); //開根號

 $isPrime = true;
 for($i = 2; $i < $n; $i++){
    if($n % $i ==0){
    //不是質數
      $isPrime = false;
      break;
    }
 }

 echo  $isPrime?"OK":"XX";

 // 迴圈1~100 ,當到了10 mod 10 換列