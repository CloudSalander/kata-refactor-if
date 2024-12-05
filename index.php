<?php

define('DISCOUNTS',['regular' => 0.05,'premium' => 0.1, 'vip' => 0.15]);

function calculateDiscount(string $type, float $amount): float {
    $discount = 0;
    if (in_array($type,array_keys(DISCOUNTS))) $amount -= $amount * DISCOUNTS[$type];
    else $discount = 0;
    return $amount - $discount;
}

echo calculateDiscount('regular', 1000);
echo "\n";
echo calculateDiscount('premium', 2000);
echo "\n";
echo calculateDiscount('vip', 3000);
echo "\n";
echo calculateDiscount('other', 500);

?>