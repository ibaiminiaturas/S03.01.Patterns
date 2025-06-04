<!--Sprint 2. Chapter 1. Level 3. Exercise 2

Imagina que debemos implementar un mecanismo para notificar a los mentores y mentoras que ha entrado una nueva tarea en Moodle.
Haz un programa que implemente el patrón Observer de tal forma que cada vez que se genere una nueva entrega en Moodle, avise a los mentores/as de esta entrega.

-->

<?php

require_once(__DIR__ . "\Classes\Mentor.php");
require_once(__DIR__ . "\Classes\Moodle.php");

$moodle = new Moodle();

$mentor1 = new Mentor();
$mentor2 = new Mentor();

$moodle->registerMentor($mentor1);
$moodle->registerMentor($mentor2);

$moodle->newDelivery("You have a message");
$moodle->newDelivery("You have another message");


?>