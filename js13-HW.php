<?php

// tr: table橫列,  table row有td

// HW1: 參考js14.php(黃粉黃粉)
// HW2: 1-100 一列10（用黃色印出質數, 除了1和自己不能被整除）
?>

<table border='1' wiidth='100%'>   
        <?php
        define("ROWS", 3); //define用來定義常數
        define("FROM", 1); 
        define("TO", 3); 
        for($k =  0; $k < ROWS; $k++){
          echo '<tr>';
          for($j = FROM; $j<=TO; $j++){
          echo '<td bgcolor="pink">';
        $newj = $j + (TO-FROM+1) * $k;
          for($i = 1; $i <= 9; $i++){
            $r = $newj  * $i;
            echo "{$newj} x {$i} = {$r} <br>";
          }
          echo '</td>';
          }
        echo '</tr>';    
        }
        ?> 
</table>