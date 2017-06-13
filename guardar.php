<?php

 require_once 'Personaje.php';

 $persona = new Personaje('Batman', 'Encapuchado, disfrazado de murciélago que sale por las noches a combatir el mal.', 1);
 $persona->guardar();
 echo $persona->getNombre() . ' se ha guardado correctamente con el id: ' . $persona->getId();

 
?>