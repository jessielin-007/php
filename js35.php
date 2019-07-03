<?php
// https://www.php.net/manual/en/ref.filesystem.php

date_default_timezone_set('Asia/Taipei'); //設定預設時區
$mydir ='./'; // .. 看前個目錄
$fp = @opendir($mydir) or exit('Server Busy');
//$fp = @opendir('./') or exit('Server Busy');
//$fp = @opendir('/opt/lampp/htdocs/dashboard/') or exit('Server Busy');
//echo gettype($fp);
//var_dump($fp);

//$str = readdir($fp);
//echo $str . '<br>';

while($file = readdir($fp)){ //一個＝ 先代入在判斷boolean(ture/false)
//    $len = filesize("{$mydir}/{$file}"); // 查看檔案大小
//      $len = is_dir("{$mydir}/{$file}"); // 判斷是否為目錄
      $len = filemtime("{$mydir}/{$file}");// 上次修改時間  
      $time = date('Y-m-d H:i:s', $len);
//    echo "{$file} : {$len }<br>";
      echo "{$file} : {$time}<br>";
     
}

if (unlink("./333.html")){
    echo 'Delete OK';
}