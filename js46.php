<?php
//檔案上傳

// echo $? 命令列：可以看到傳回直
if (!isset($_FILES['upload'] )) exit(0);

$upload = $_FILES['upload'];
var_dump($upload);
// foreach($upload as $key => $value){
//     echo "{$key} : {$value} <br>";
if($upload['error' == 0]){
    // if (copy($upload['tmp_name'], "upload/{$upload['name']}")){
    //     echo 'Upload Success';
    // }else{
    //     echo 'Upload Failure';
    // }
    if (is_uploaded_file($upload['tmp_name'])){
        if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
            echo 'Upload Success';
        }else{
            echo 'Upload Failure';
        }
    }

    }else{
        echo 'Apache error';
  }
