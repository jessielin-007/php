<?php
    // PDO : https://www.php.net/manual/en/book.pdo.php
    // dsn : data source name 資料來源名稱
    $dsn = "mysql:host=localhost;dbname=cy";
    $opt = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' //::常數
    );
    $pdo = new PDO($dsn, 'root', '', $opt);
    $result = $pdo->prepare('select * from product');
    $result->execute();

    while($product = $result->fetch(PDO::FETCH_OBJ)){
        echo $product->id . ":" . $product->pname . ":" . $product->price . '<br>';
    }

