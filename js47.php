<?php
//多個檔案上傳
if (!isset($_FILES['upload'] )) exit(0);
$upload = $_FILES['upload'];
var_dump($upload);

foreach($upload['error'] as $k => $value ){
  if($value == 0){
      if (is_uploaded_file($upload['tmp_name'][$k])){
         if (move_uploaded_file($upload['tmp_name'][$k],
            "upload/{$upload['tmp_name'][$k]}")){
                echo "{$upload['tmp_name'][$k]} Upload Success<br>";
            }else{
                echo "{$upload['tmp_name'][$k]} Upload Failure<br>";
            }
      }
  }
}