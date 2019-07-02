<?php
//function 呼叫
sayYa(); sayYa();

echo "<hr>";
sayHello('Jessie'); sayHello('Brad');

echo "<hr>";
//sayHelloV2('Jessie'); 
//sayHelloV2('');

//sayHelloV2(); //看下面n的預設值=1次HelloWorld
sayHelloV2(5);

echo "<hr>";
sayHelloV3(array('Jessie', 'Rey', 'Lid'));

echo "<hr>";
sayHelloV4('Hello');
sayHelloV4('Hello',1,2,3,4);

function  sayYa(){
    echo 'Ya<br>';
}


function  sayHello($name){
    echo "Hello, {$name}<br>";
}


function  sayHelloV2($n =1, $name = 'World'){ //等號給預設值
    for($i=0; $i<$n; $i++)
    echo "Hello, {$name}<br>";
}

function  sayHelloV3($names = 'World'){
    if (is_array($names)){  //判斷是不是陣列
        foreach($names as $name){
        echo "Hello, {$name}<br>";
        }
    }else{
        echo "Hello, {$name}<br>";
    }
    
}

function  sayHelloV4(){
//        echo "OK<br>"; //有接收,但未做處理
   $names = func_get_args(); //傳幾個參數

   foreach($names as $name){
        echo "Hello, {$name}<br>";
        }
    }
    