<?php

class User
{
    public MyStuff $myStuff;
    public function __construct($myStuff)
    {
        echo "I am a User..." . PHP_EOL;
        $this->myStuff = $myStuff;
    }

    public function getHouseKeys(): HouseKeys
    {

        return $this->myStuff->getHouseKeys();
    }

    public function getPhone(): Smartphone
    {
        return $this->myStuff->getPhone();
    }

    public function getTransportationMethod(): TransportationMethod
    {
        return $this->myStuff->getTransportationMethod();
    }

    public function getWallet(): Wallet
    {
        return $this->myStuff->getWallet();
    }

}




?>