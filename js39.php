<?php
// file 一次將檔案讀進去陣列(一列一列放涵蓋換列符號)

$content= file('/opt/lampp/temp/file2.bak.txt');
var_dump($content);
foreach ($content as $k => $line){
    echo $line;
}

// file_get_contents 把檔案讀到字串裡面
// getcsv 讀到陣列中 