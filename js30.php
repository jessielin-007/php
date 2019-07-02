<?php
//php7的功能 （: 宣告傳回Return的型別）
//網頁所有的內容都是字串 strinig

function test1($x, $y): string  {
    return $x / $y;
}

$v = test1(10,3);
var_dump($v);

