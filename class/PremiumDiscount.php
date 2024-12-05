<?php

class PremiumDiscount implements ICalculateDiscount {
    public function calculateDiscount(float $amount): float {
        return $amount - $amout*0.1;   
    }
}

?>