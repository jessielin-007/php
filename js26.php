<?php
//$_GET['x'] //用字串當成index,取得其值 
echo count ($_SERVER);
echo "<hr>";
foreach ($_SERVER as $key => $value){
    echo "{$key} : {$value} <br>";
}


echo count ($_ENV);

