<?php

require_once 'class/ICalculateDiscount.php';
require_once 'class/DiscountType.php';
require_once 'class/DiscountDispatcher.php';

define('DISCOUNTS',['regular' => 0.05,'premium' => 0.1, 'vip' => 0.15]);

echo calculateDiscount('regular', 1000);
echo "\n";
echo calculateDiscount('premium', 2000);
echo "\n";
echo calculateDiscount('vip', 3000);
echo "\n";
echo calculateDiscount('other', 500);

?>