<?php
  include_once 'utils.1.php'; //呼叫api

  $twid = createTWid(false);
  echo $twid . '<br>';
  //$twid = 'A123456789';
  if(isTWid($twid)){
    echo 'ok';
  }else{
    echo 'xx';
  }
?>