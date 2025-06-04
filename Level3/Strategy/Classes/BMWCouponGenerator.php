<?php

require_once(__DIR__ . "\CarCouponGenerator.php");

class BMWCouponGenerator implements CarCouponGenerator
{
    public function addSeasonDiscount(): int
    {
        return 5;
    }

    public function addStockDiscount(): int
    {
        return 7;
    }
}

?>