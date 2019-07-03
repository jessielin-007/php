<?php
// file 一次將檔案讀進去陣列(一列一列放涵蓋換列符號)

$content= file('/opt/lampp/temp/file2.bak.txt');
var_dump($content);
foreach ($content as $k => $line){
    echo $line;
}