<?php

spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });


// Commencer par creer la classe Realisateur
// Ensuite Creer une classe Genre
// Puis créer une classe Film
// Il faudra ensuite relier le realisateur au film et le film au genre

