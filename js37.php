<?php
//https://www.php.net/manual/en/book.filesystem.php

// $mydir ='./'; // .. 看前個目錄
// $fp = @opendir($mydir) or exit('Server Busy');
// while($file = readdir($fp)){ 
//     echo "{$file} \n";
// }

// if(@mkdir("dir1")){ //＠ 抑制訊息
//   echo 'mkdir OK';
// }else{
//     echo 'mkdir failure'; //執行第二次失敗, 因為目錄已存在
// }
// // Apache所賦予的user/group身份 (daemon)


// // 絕對路徑永遠從 / 開始
// //$fp = @fopen('/opt/lampp/temp/file2.txt', 'w');
// $fp = @fopen('/opt/lampp/temp/file2.bak.txt', 'r');
// //var_dump($fp);
// while($c = fgetc($fp)){
//     echo nl2br ($c); //nl2br 換列
// }
// fclose($fp); // 開始串流, 結束串流

// fread($fp,1); // 讀取工具：一次讀一個字元

// fgets 一次讀一列(適合讀文字檔, 文字檔才有換列)

// fopen 可以撈回頁面原始碼
$fp = @fopen('https://tw.yahoo.com', 'r');
$i =1;
while($line = fgets($fp)){
        if(preg_match('/href/',$line)){
           echo "{$i} => {$line}";
           $i++;
        }
     }
     fclose($fp); 


