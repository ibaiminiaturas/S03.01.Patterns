<?php

class Tigger
{
    private static $instance;
    private static $roarCount = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
        self::$roarCount++;
    }

    public static function getInstance(): Tigger
    {
        if (!isset(self::$instance)) {
            self::$instance = new Tigger();
        }

        return self::$instance;

    }

    public static function getCounter(): int
    {
        return self::$roarCount;
    }

}

?>