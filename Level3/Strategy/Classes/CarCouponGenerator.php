<?php

interface CarCouponGenerator
{
    function addSeasonDiscount(): int;
    function addStockDiscount(): int;

}

?>