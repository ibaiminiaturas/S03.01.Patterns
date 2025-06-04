<?php
require_once(__DIR__ . "\BMWCouponGenerator.php");
require_once(__DIR__ . "\MercedesCouponGenerator.php");


class CouponGeneratorContext
{

    private CarCouponGenerator $carCouponGenerator;

    public function __construct(CarCouponGenerator $carCouponGenerator)
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    public function setStrategy(CarCouponGenerator $carCouponGenerator): void
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    public function generateCoupon(bool $isHighSeason, bool $isBigStock): string
    {
        $discount = 0;
        if ($isBigStock) {
            $discount += $this->carCouponGenerator->addStockDiscount();
        }
        if ($isHighSeason) {
            $discount += $this->carCouponGenerator->addSeasonDiscount();
        }
        return "Get {$discount}% off the price of your new car.";
    }

}



?>