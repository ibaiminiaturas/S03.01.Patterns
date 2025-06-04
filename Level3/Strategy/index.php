<!--Sprint 2. Chapter 1. Level 3. Exercise 1

Imprime por pantalla el resultado del cupón para ambas marcas de coche (BMW y Mercedes).

-->

<?php

require_once(__DIR__ . "\Classes\CouponGeneratorContext.php");

$discount = 0;
$isHighSeason = false;
$bigStock = true;

$bmwStrategy = new BMWCouponGenerator();
$couponGenerator = new CouponGeneratorContext($bmwStrategy);

$discount = $couponGenerator->generateCoupon($isHighSeason, $bigStock);
echo $discount . PHP_EOL;

$mercedesStrategy = new MercedesCouponGenerator();
$couponGenerator->setStrategy($mercedesStrategy);

$discount = $couponGenerator->generateCoupon($isHighSeason, $bigStock);
echo $discount . PHP_EOL;



?>