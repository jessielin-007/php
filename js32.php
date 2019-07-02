<?php
  foreach($_REQUEST as $k => $v){ //隱藏url資訊
    if (is_array($v)){
        foreach ($v as $k => $v){
        echo "{$k} : {$v}<br>";
        }
    }else{
       echo "{$k} => {$v}<br>";
    }
    
  }
?>