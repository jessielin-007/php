<?php
$poker = [];
for($i=0; $i<52; $i++){
    
    do {
    $rand = rand(0,51);
    
    //檢查機制
    $isReapeat = false;
    for($j=0; $j<$i; $j++){
        if($rand == $poker[$j]){
            $isReapeat = true;
            break; // 跳出迴圈
        }
    }
     }while($isReapeat);


    
    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}

