<?php
  $result= $x= $y='';
  if (isset($_GET['x'])) {  //isset 判斷有沒有做（第一次給值）初始化的設定
   $x = $_GET['x']; $y = $_GET['y'];
   $result1 =(int)($x / $y);
   $result2 =$x % $y;
   $result = "{$result1}......{$result2}";
 //  echo "{$x} + {$y} = {$result}";
  }
 ?>
 
<form action="js3.php">
 <input name="x" value="<?php echo $x; ?>">
 /
<input name="y" value="<?php echo $y; ?>">
<input type="submit" value="=">
<?php
// if (isset($result)) {
  echo $result;
// }
?>
</form>

