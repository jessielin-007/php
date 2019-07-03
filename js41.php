<?php
// 輸入檔名,內容
//create 做完看到檔案內容

if(!isset($_REQUEST['filename']))die('Get out here!');

 $filename = $_REQUEST['filename'];
 $content = $_REQUEST['content'];

 $fp = @fopen("/opt/lampp/temp/{$filename}", 'w');
if (@fwrite($fp, $content)){
    header("Location: {$filename}"); //送出html擋頭資料,送出前不得有輸出動作
}else{
    echo 'write error';
}

  