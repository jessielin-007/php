<?php

$i=0; 
for(printjs() ; $i <10 ;  printline()){    //for什麼條件, 不是計數器
  // code block
  echo "{$i}<br>";
  $i++;
}


function printjs(){
  echo 'jessie<br>';
}

function printline(){
  echo '<hr>';
}

/*
* 1. 初始化
* 2. 看條件,做什麼事情
* 3. 直到條件結束為止
*/