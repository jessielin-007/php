<?php
    include_once('utils.2.php');
    session_start();
    $var1 = $_SESSION['var1'];
    echo "Sum : {$var1->sum()}; Avg : {$var1->avg()} <br>";
//    echo $var1[2]; 
    ?>