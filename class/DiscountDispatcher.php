<?php

include_once 'RegularDiscount.php';
include_once 'PremiumDiscount.php';
include_once 'VipDiscountType.php';

class DiscountDispatcher {   
    public function getDiscount(DiscountType $type, float $amount): float {
        var_dump($type);
        var_dump($amount);
    }
}

?>