<?php
$money = 20;
$price = 10;
$taxRate = 0.08;
echo 'Value of $money: '.$money;
echo '<br>';
echo 'Value of $price: '.$price;
echo '<br>';
echo 'Value of $taxRate: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// Write your code below
$total = $price + $price * $taxRate;
if ($money > $total) {
  echo 'You can buy this item';
} elseif ($money == $total) {
  echo 'You can buy this item, but you will not have any money left';
} else {
  echo 'You cannot buy this item';
}

?>