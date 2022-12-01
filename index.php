<?php

spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });



 $realisator1 = new Realisator ("Reeves","Matt","Homme","27.04.1966");
 $realisator2 = new Realisator ("Schumacher","Joel","Homme","29.08.1939");

 $category1 = new Category("action");
 $category2 = new Category("aventure");

$movie1 = new Movie("The Batman","2022","176","blabla", $category1,$realisator1);
$movie2= new Movie("Batman & Robin","1997","125","blablabis",$category2,$realisator2);


echo $movie1 -> getInfosMovie();
echo $movie2 -> getInfosMovie();
echo "<br>";
echo $realisator1 -> dispFilmo();
echo $realisator2 -> dispFilmo();
echo "<br>";
echo $category1-> displayCategory();
echo $category2-> displayCategory();




