<?php

require_once(__DIR__ . "\PickUpDish.php");
require_once(__DIR__ . "\CleanDish.php");
require_once(__DIR__ . "\RinseDish.php");
require_once(__DIR__ . "\DryDish.php");


class WashingMachine
{
    private CleanDish $cleanDish;
    private DryDish $dryDish;

    private PickUpDish $pickUpDish;
    private RinseDish $rinseDish;
    private int $numberOfDishes;
    public function __construct(int $numberOfDishes)
    {
        $this->numberOfDishes = $numberOfDishes;
        $this->dryDish = new DryDish();
        $this->pickUpDish = new PickUpDish();
        $this->rinseDish = new RinseDish();
        $this->cleanDish = new CleanDish();
    }

    public function on()
    {
        echo "Let's Wash the dishes" . PHP_EOL;
        for ($i = 0; $i < $this->numberOfDishes; $i++) {
            echo "Dish number " . ($i + 1) . ":" . PHP_EOL;
            $this->dryDish->dryDish();
            $this->pickUpDish->pickUpDish();
            $this->rinseDish->RinseDish();
            $this->cleanDish->cleanDish();
        }
        echo "Finished washing dishes" . PHP_EOL;
    }

}

?>