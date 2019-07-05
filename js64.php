<?php
if(isset($_POST['name']) && isset($_POST['age'])){
    $name =  $POST['name']; $age =  $POST['age'];
    $obj = new stdClass;
    $obj->name=$name; $obj->age=$age;
    $ret = json_encode($obj);
    //echo "{$name}  : {$age}";
}