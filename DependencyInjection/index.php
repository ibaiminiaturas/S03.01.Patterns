<!--
Imagina que eres una persona que está a punto de salir de casa para estudiar/trabajar. 
Antes de salir de casa necesitarás llevar la cartera, las llaves de casa, quizás las llaves del coche/moto o la tarjeta del transporte público, y el smartphone.

Realiza un programa que simule esta lógica utilizando el patrón de inyección de dependencias.
 -->

<?php
foreach (glob(__DIR__ . "/Classes/*.php") as $filename) {
    require_once $filename;
}

$myStuff = new MyStuff();

$user = new User($myStuff);

$user->getHouseKeys();

$user->getWallet();

$user->getPhone();

$user->getTransportationMethod();




?>