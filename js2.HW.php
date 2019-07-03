<?php
//$a = 8; 
//echo($a %2 == 0)?'pink':'yellow';

// tr: table橫列,  table row有td

// HW1: 參考js14.php(黃粉黃粉)
// HW2: 1-100 一列10（用黃色印出質數, 除了1和自己不能被整除）
?>


<table border='1' wiidth='100%'>   
        <?php
          echo '<tr>';
          $num=1;
          for($j = 1; $j<=10; $j++){
          for ($i = 1; $i <= 10; $i++) {
//          echo '<td>';
          
          $Imtree=true;
          for($k=2 ;$k<$num ;$k++){
            if($num%$k==0) {
            $Imtree = false;
            break;
            }
          } 
          if($Imtree == false || $num ==1 ){
            echo '<td>';
          }else{
            echo '<td bgcolor="green">';
          }



          echo $num;
          $num++;
          echo '</td>'; 
          }
          echo '</tr>'; 
        }
        ?> 
</table>
<?php
//<td bgcolor="yellow">




