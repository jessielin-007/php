<?php
$poker = [];
for($i=0; $i<52; $i++){
    $rand = rand(0,51);
    
    //檢查機制
    $isReapeat = false;
    for($j=0; $j<$i; $j++){
        if($rand == $poker[$j]){
            $isReapeat = true;
            break; // 跳出迴圈
        }
    }
    if($isReapeat){
      $i--;
      continue;  //   底下不做, 直接跳到上面
    }


    
    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}

