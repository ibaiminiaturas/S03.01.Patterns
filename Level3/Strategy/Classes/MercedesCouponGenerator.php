<?php

require_once(__DIR__ . "\CarCouponGenerator.php");

class MercedesCouponGenerator implements CarCouponGenerator
{
    public function addSeasonDiscount(): int
    {
        return 4;
    }

    public function addStockDiscount(): int
    {
        return 10;
    }
}

?>