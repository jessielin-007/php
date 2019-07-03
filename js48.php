<?php
//影像處理 gd https://www.php.net/manual/en/book.image.php
// 1. canvas(畫布) （new）
// 2. process(處理)
// 3. output => 1. display 2. export to file
// 4. free memory

//$rate = 94.87; //  94.87%
$rate = $_GET['rate'];

$img = imagecreatetruecolor(400,20); // step 1

$red = imagecolorallocate ($img, 255, 0, 0); 
$yellow = imagecolorallocate ($img, 255, 255, 0); // 配置顏色 step 2
imagefilledrectangle($img, 0, 0, 400, 20, $yellow); // step 2
imagefilledrectangle($img, 0, 0, $rate*400/100, 20, $red); 

header("Content-type: image/jpeg");// 宣告header 以下輸出為影像資料
imagejpeg($img); // step 3

imagedestroy($img); // step 4
