<!--



Tienes la siguiente definición de clase que pretende modelar al famoso personaje de Tigger de los libros "Winnie The Pooh" de A A. Milne:

classes.->Tiger.php

Parece razonable esperar que sólo haya un objeto Tigger (después de todo, ¡él es el único!), 
pero la implementación actual permite tener múltiples objetos Tigger diferentes:

Refactorizar la clase Tigger en un Singleton considerando los siguientes puntos:

Define el método getInstance ()que carezca de argumentos. Esta función es responsable de crear una instancia de la clase Tigger sólo una vez y devolver esta única instancia cada vez que se llama.
Imprime en pantalla múltiples veces el rugido de Tigger.
Añade un método getCounter ()que devuelva el número de veces que Tigger ha realizado rugidos.

 -->

<?php

require_once "Classes/Tigger.php";

$tigger = Tigger::getInstance();

for ($i = 0; $i < rand(1, 12); $i++) {
    $tigger->roar();
}

echo "Tigger ha rugido " . $tigger->getCounter() . " veces" . PHP_EOL;

?>