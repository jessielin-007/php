<?php
// // fwrite: 進行資料寫出
//  $fp = @fopen('/opt/lampp/temp/file2.bak.txt', 'r+');
//  fwrite($fp, "Hello\n123"); //雙引號：\n會解譯換行
//  fflush($fp); // 提醒cpu做flush
//  fclose($fp);

// // w模式 將原資料清空, 重寫
//  $fp = @fopen('/opt/lampp/temp/file2.bak.txt', 'w');
//  fwrite($fp, "Ya\n123"); 
//  fwrite($fp, "Ya\n123"); 
//  fflush($fp); 
//  fclose($fp); 

// a模式 apend(適合用於日誌模式)
 $fp = @fopen('/opt/lampp/temp/file2.bak.txt', 'a');
 fwrite($fp, "Ya\n123"); 
 fwrite($fp, "Ya\n123"); 
 fwrite($fp, "Ya\n123"); 
 fwrite($fp, "Ya\n123"); 
 fwrite($fp, "Ya\n123"); 
 fflush($fp); 
 fclose($fp); 


