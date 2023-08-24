<?php

require_once "Serie.php";
require_once "Temporada.php";
require_once "Emulti.php";
require_once "Capitulo.php";

$serie = new Serie ("Juego de Tronos", "fantasía");

$temporada1 = new Temporada ("2012", "1"); 
$temporada2 = new Temporada ("2014", "2");

$capitulo1 = new Capitulo ("Capitulo uno", "1/1/2012", 4.5, "1", "90min");
$capitulo2 = new Capitulo ("Capitulo dos", "1/2/2012", 4.1, "2", "90min");
$capitulo3 = new Capitulo ("Capitulo tres", "1/3/2012", 3.7, "3", "90min");
$capitulo4 = new Capitulo ("Capitulo cuatro", "1/4/2012", 4.8, "1", "90min");

$temporada1->addCapitulos($capitulo1);
$temporada1->addCapitulos($capitulo2);
$temporada1->addCapitulos($capitulo3);
$temporada2->addCapitulos($capitulo4);

$serie-> addTemporada($temporada1);
$serie->addTemporada($temporada2);

$numCapitulosT1 = $serie->numCapitulosTemporada(1);
$numCapitulosT2 = $serie->numCapitulosTemporada(2);
echo "La temporada 1 tiene " . $numCapitulosT1 . " capitulos" ."</br>"; 
echo "La temporada 2 tiene " . $numCapitulosT2 . " capitulos" ."</br>";

$valoracionSerie = $serie->valoracionMedia();
echo "Mi serie tiene una valoracion media de" .$valoracionSerie;