<?php
//影像處理 gd https://www.php.net/manual/en/book.image.php
// 1. canvas(畫布) （new）
// 2. process(處理)
// 3. output => 1. display 2. export to file
// 4. free memory

//google font: https://fonts.google.com/



$img = imagecreatefromjpeg("/opt/lampp/temp/cat.jpeg"); // step 1

$yellow = ImageColorAllocate($img, 255, 255, 0);
imagettftext($img, 36, rand(-30,30), 100, 100, $yellow, "/opt/lampp/htdocs/dashboard/dir1/myfont.ttf", "Hello"); //字體

header("Content-type: image/jpeg");// 宣告header 以下輸出為影像資料
imagejpeg($img); // step 3

imagedestroy($img); // step 4
