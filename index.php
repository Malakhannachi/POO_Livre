<?php

spl_autoload_register(function($class_name){

    require 'classe/'. $class_name . '.php';

});

$auteur = new Auteur("Stephen", "King");
$livre = new Livre ("Simetierre", "1983", 374, 15, $auteur);
$livre2 = new Livre ("Ca", "1986", 1138, 20, $auteur);
$livre3 = new Livre ("Ca", "1986", 1138, 20, $auteur);
$livre4 = new Livre ("Ca", "1986", 1138, 20, $auteur);
//echo $auteur->afficherLivres();
echo $livre->getInfos();
