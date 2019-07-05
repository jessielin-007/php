<?php
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });    //按照檔名, 自動載入

    // include_once 'myclass1.php';
    // include_once 'myclass2.php';
    $obj1 = new MyClass1;
    $obj2 = new MyClass2;
    $obj1->showMe();
    $obj2->showMe();

    $c1 = new Cart;
    $c1->addProduct('P001',30);
    $c1->addProduct('P002',2);
    $mylist = $c1->getList();
    var_dump($mylist);
?>