<?php
$a = 10; $b = 8; //case比對只要值一樣就ok
switch ($a){
    case 1: 
      echo 'A';
      break;     //break才會脫離結構
    case 10:
      echo 'B1';
      break;
    case '10':
      echo 'B2';
      break;
    case 100:
      echo 'C';
      break;
    default:      //default不一定要寫最後
      echo 'x';
}
echo '<hr>';