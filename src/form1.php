
<?php
 
$i = $_POST["bill"];
$bill = 0;
if($i <= 50) {
    $bill = $i*3.50;
} elseif($i > 50 && $i <=150) {
     $j = $i - 50;
     $bill = 50*3.50 + $j*4.00;
} elseif ($i > 150 && $i <= 250) {
    $j = $i - 150;
    $bill = 50*3.50 + 100*4.00+ $j*5.20;
} else {
    $j = $i - 250;
    $bill = 50*3.50 + 100*4.00+ 100*5.20 +$j*6.50;
}
echo "The bill is ".$bill." rupees";
?>