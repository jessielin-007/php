<?php
 $dstW = 240; $dstH = 240;

 $src = imagecreatefromjpeg("/opt/lampp/htdocs/dashboard/dir1/cat-wide.jpg");
 $srcW = ImageSX($src); $srcH = ImageSX($src);

if($srcW > $srcH){
    //寬型
    $dstX = $dstW;
    $dstY = $dstH * $srcH / $srcW;
}else{
    //高型
    $dstY = $dstH;
    $dstX = $dstW * $srcW / $dstH;
}


 $dst = imagecreate($dstX, $dstY);

//   imagecopyresampled($dst,$src,
//     0, 0,
//     0, 0,
//     $dstX , $dstY, 
//     $srcW , $srcH);

    imagecopyresized($dst,$src,
    0, 0,
    0, 0,
    $dstX , $dstY, 
    $srcW , $srcH);

    //header("Content-type: image/jpeg");
    //    imagejpeg($dst);
    imagejpeg($dst,"/opt/lampp/temp/new-photo.jpg");  //另存新檔 



    imagedestroy($src);
    imagedestroy($dst);
?>