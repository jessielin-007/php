<?php
// https://www.php.net/ref.strings

$mystr = 'abc';
//$findme = 'a';
$findme = 'd';

$pos = strpos($mystr, $findme);
if ($pos !== false){ 
    echo 'find it';
}else{
    echo 'not found';
}