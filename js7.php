<?php
    $result = $x = $y = $op= '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y']; $op = $_GET['op'];
        if ($op == '1'){
            $result = $x + $y;
        }else if ($op == '2'){
            $result = $x - $y;
        }else if ($op == '3') {
            $result = $x * $y;
        }else if ($op == '4'){
            $r1 = (int)($x / $y);
            $r2 = $x % $y;
            $result = "{$r1} ...... {$r2}";
        }else {
            $result = 'bug!';
        }
    }
?>
 
<form action="js7.php">
 <input name="x" value="<?php echo $x; ?>">
 <select name="op">
    <option value="1" <?php if ($op =='1') echo 'selected'; ?>> + </option>
    <option value="2" <?php if ($op =='2') echo 'selected'; ?>> - </option>
    <option value="3" <?php if ($op =='3') echo 'selected'; ?>> x </option>
    <option value="4" <?php if ($op =='4') echo 'selected'; ?>> / </option>
</select>
<input name="y" value="<?php echo $y; ?>">
<input type="submit" value="=">
<?php
// if (isset($result)) {
  echo $result;
// }
?>
</form>
 