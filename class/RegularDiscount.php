<?php

class RegularDiscount implements ICalculateDiscount {
    public function calculateDiscount(float $amount): float {
        return $amount - $amout*0.5;   
    }
}

?>