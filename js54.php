<?php
include_once('utils.2.php');
    session_start();
// $var1 = rand(0,100);
//    $var1 = array(1,2,3,4,5);
    $var1 = new Student(90,80,70);
//    $sum = $var1->sum(); $avg = $var1->avg();
//    echo "Sum : {$sum}; Avg : {$avg} <br>";
    echo "Sum : {$var1->sum()}; Avg : {$var1->avg()} <br>";
    $_SESSION['var1'] = $var1;
    $var1->setCh(9);
//    $var1[2]=200;
?>

<a href='js55.php'>Next Page</a> 