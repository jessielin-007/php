<?php
//$ch = curl_init("https://www.bradchao.com/apptest/posttest1.php");
$ch = curl_init("http://192.168.64.2/dashboard//js65.php");
//$dataString = "name=Jessie&age=26";
$dataString = "id=1";

curl_setopt($ch, CURLOPT_CUSTOMERREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

$ret = curl_exec($ch);
curl_close($ch);

$obj = json_decode($ret);
//var_dump($ret);

if($ret->code == '200'){
    echo  $ret->product->pname . ":" . $ret->product->price;
}
//echo $product->id . ":" .  $product->name . ":" . $product->price;  
//echo $obj->name . ":" . $obj->age;

//echo $ret;