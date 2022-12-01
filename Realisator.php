<?php

class Realisator extends Person{
	private $_listMovies;


public function __construct($name, $firstname, $gender, $birthdate){
	parent::__construct($name, $firstname, $gender, $birthdate);
	$this->_listMovies = []	;
}

function getInfos(){
	return $this->getName()." ".$this->getFirstname()." ".$this->getGender()." ".$this->getBirthDate()."<br>";
}

public function __toString()
{
	return $this->getName()." ".$this->getFirstname();
}
public function addMovie($movie){
	$this->_listMovies[] = $movie;
}

public function dispFilmo(){
	$result = "Films réalisés par $this :<br>";
	foreach($this->_listMovies as $movie){
		$result.=$movie . "<br>";
	}
	return $result;
}

// function getInfosMovie(){
// 	$infoMovie= "";
// 	foreach ($this->_listMovies as $movie){
// 	$infoMovie .= $infoMovie. $movie->getTitle(). " ". $movie->getRealeasedate()."".$movie->getLast()."".$movie->getSynopsis()."".$movie->getCategory()."<br>";
// 	}	
// 	return $infoMovie;
// }
}