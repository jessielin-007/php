<?php
$n = $sum = '';
if (isset($_GET['n'])){
    $n = $_GET['n'];
    $sum = 0;
    $i = 1;
    while ($i <= $n){
        $sum += $i; // sum值自我累加
        $i++;
    }
}
?>

<form action="js17.php">
1 + 2 + ... +
<input type="number" name="n" value="<?php echo $n; ?>">
<input type="submit" value="=">
<?php echo $sum; ?>
</form>