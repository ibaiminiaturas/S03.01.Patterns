<!--Sprint 2. Chapter 1. Level 2. Exercise 2

Cuando lavamos los platos (a mano), generalmente cogemos una pieza a lavar, la enjabonamos, la aclaramos y la colocamos en el secador.

Estos pasos quedan totalmente automatizados con un lavavajillas automático donde, básicamente ponemos una pastilla o gel lavadero, 
tomamos el botón "on" y se procede a estos pasos de forma automática. Implementa esta lógica utilizando el patrón Facade.

-->

<?php

require_once(__DIR__ . "\Classes\WashingMachine.php");

$washingMachine = new WashingMachine(4);
$washingMachine->on();

?>