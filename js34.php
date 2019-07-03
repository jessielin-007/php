<?php
  include_once 'utils.php'; //呼叫api

//  $a = true;
//  var_dump($a);

  $twid = 'B123456789';
  if(isTWid($twid)){
    echo 'ok';
  }else{
    echo 'xx';
  }
?>