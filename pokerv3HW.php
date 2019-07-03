<?php
$poker = [];
$poker = range(0,51);

$end=51;
for($i=0; $i<52; $i++){
    
//    do {
    $rand = rand(0,$end);
    
    $box = $poker[$end];
    $poker[$end]=$poker[$rand];
    $poker[$rand]=$box;

    // //檢查機制
    // $isReapeat = false;
    // for($j=0; $j<$i; $j++){
    //     if($rand == $poker[$j]){
    //         $isReapeat = true;
    //         break;
    //     }
    // }
    //  }while($isReapeat);


    
    // $poker[$i] = $rand;
    echo $poker[$end] . '<br>';

    $end--;
}