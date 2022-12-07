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

$actor1= new Actor ("Pattinson","Robert","Homme","13.05.1986");
$actor2= new Actor ("Kravitz","Zoe","Femme","1.12.1988");
$actor3= new Actor ("Clooney","Georges","Homme","06.05.1961");
$actor4= new Actor ("Uma","Thurman","Femme","29.04.1970");

$role1= new Role("Batman");
$role2= new Role("Catwoman");
$role4= new Role("Poison Ivy");

$casting1= new Casting ($movie1,$role1,$actor1);
$casting2= new Casting ($movie2,$role1,$actor3);

echo $role1 -> GetListActor();

// echo $movie1 -> getInfosMovie();
// echo $movie2 -> getInfosMovie();
// echo "<br>";
// echo $realisator1 -> dispFilmo();
// echo $realisator2 -> dispFilmo();
// echo "<br>";
// echo $category1-> displayCategory();
// echo $category2-> displayCategory();
// echo "<br>";
// echo $actor1 -> getInfosActor();
// echo $actor2 -> getInfosActor();
// echo $actor3 -> getInfosActor();
// echo $actor4 -> getInfosActor();






