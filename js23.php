<?php
$person['name']='jessie';
$person['age']=25;
echo $person['name'];

echo '<hr>';
foreach($person as $key => $value){ //尋訪所有的屬性
  echo "{$key} : {$value} <br>";
} 