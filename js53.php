<?php
//任何物件object都要定義, 用類別class定義

class Bike {
    // public $speed = 0; //屬性, 誰能存取
    // private $speed = 100; //private(封裝)只有自己能存取的到
    protected $speed = 0;    //protect 繼承的子類別可以呼叫使用
    function upspeed(){
        $this->speed = $this->speed<1 ? 1 : $this->speed*1.2; //等類別做的物件實體, ->呼叫
    }
    function downspeed(){
        $this->speed = $this->speed<1 ? 0 : $this->speed*0.7;
    }
    function getspeed(){
        return $this->speed;
    }
}
class Scooter extends Bike{ //繼承腳踏車,把腳踏車發揚光大 （extend衍伸,擴大）
    private $gear = 0;
    // overwrite(蓋掉原本功能)
    function upspeed(){
        // echo 'new upSpeed';
        // parent::upspeed(); //呼叫上一輩的方法
        //$this->speed = $this->speed<1 ? 2 : $this->speed*2.5;
    }    
    function changeGear($gear){
        $this->gear = $gear;
    }
    function upspeedV2(){
        $this->speed = $this->speed<1 ? 2 : $this->gear*1.2;
    }
}
class Persion {
    private $mybike; //人類擁有一台腳踏車的物件 has-a bike object
    private $myscooter;
    private $myname;
    function __construct($name){ //建構式 兩個底線construct, 在”new“出來的時候就呼叫, (該物件的初始化)
        //echo 'here';        // 建構式, 建構子, 建構方法 => 物件的初始化程序 
        $this->mybike = new Bike;
        $this->myscooter = new Scooter;
        $this->myname = $name;
    } 
    // function __destruct($name){ // 解構式 死前要做的事

    // }
}

$b1 = new Bike; //透過new來產生物件實體 //物件：靜態“屬性”,動態方法
//var_dump($b1);
$b2 = new Bike;   
// $b1->upspeed();$b1->upspeed();$b1->upspeed();
// $b1->downspeed();
// $b2->upspeed();$b2->upspeed();$b2->upspeed();$b2->upspeed();$b2->upspeed();

// echo $b1->speed . '<br>';
// echo $b2->speed ;

// $b1->speed =10;
// echo $b1->speed;
echo $b1->getspeed();

$s1 = new Scooter;
var_dump($s1);
$s1 ->upspeed();
echo '<hr>';
echo $s1 ->getSpeed() . '<br>';
$s1->changeGear(4);
$s1->upspeedV2();
echo $s1 ->getSpeed() . '<br>';
$s1->upspeedV2();
echo $s1 ->getSpeed() . '<br>';

echo '<hr>';
$p1 = new Persion('Jessie');
var_dump($p1);



