<?php
//https://www.php.net/manual/en/book.array.php
// shuffle: 在一堆不重複, 重新打亂
//洗牌
$poker = range(0,51);
shuffle($poker);

foreach($poker as $value){
    echo $value . '<br>';
}


//發牌
echo '<hr>';

$players = [[],[],[],[]];
//var_dump($players);

foreach($poker as $i => $card){
  $players[$i%4][(int)($i/4)] = $card; // 第幾家players（取餘數）, 手上的第幾張（取商）
}

//foreach($players[1] as $card){
//    echo $card . '<br>';
//}


?>

//攤牌
<table border='1' wiidth='100%'>   

      <?php
      $suits = array("&spades;","<font color = 'red'>&hearts;</font>",
      "<font color = 'red'>&diams;</font>","&clubs;");
      $values = array ('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
      foreach($players as $player){
      sort($player);    //php function 做排序
      echo '<tr>';
      foreach ($player as $card){
          echo'<td>';
          echo "{$suits[(int)($card/13)]}{$values[$card%13]}";
          echo '</td>';
      }
      echo '</tr>';
    }
      ?>

</table>


