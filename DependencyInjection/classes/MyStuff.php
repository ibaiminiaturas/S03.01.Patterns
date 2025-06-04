<?php
foreach (glob(__DIR__ . "/*.php") as $filename) {
    require_once $filename;
}

class MyStuff
{
    private HouseKeys $keys;
    private Smartphone $phone;
    private TransportationMethod $transportationMethod;
    private Wallet $wallet;

    public function getHouseKeys(): HouseKeys
    {
        echo "Here are my keys" . PHP_EOL;
        return $this->keys;
    }

    public function getPhone(): Smartphone
    {
        echo "Here is my phone" . PHP_EOL;
        return $this->phone;
    }

    public function getTransportationMethod(): TransportationMethod
    {
        echo "Here is my transportation method" . PHP_EOL;
        return $this->transportationMethod;
    }

    public function getWallet(): Wallet
    {
        echo "Here is my wallet" . PHP_EOL;
        return $this->wallet;
    }

    public function __construct()
    {
        $this->keys = new HouseKeys();
        $this->transportationMethod = new TransportationMethod();
        $this->wallet = new Wallet();
        $this->phone = new SmartPhone();

    }
}


?>