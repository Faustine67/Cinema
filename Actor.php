<?php

class Actor extends Person
{
	private $_castings=[];

	public function __construct($name, $firstname, $gender, $birthdate)
	{
		parent::__construct($name, $firstname, $gender, $birthdate);
	}

	public function addCasting($newCasting)
	{
		$this->_castings[] = $newCasting;
	}

	public function getInfosActor()
	{
		return $this->getName() . " " . $this->getFirstname() . " " . $this->getGender() . " " . $this->getBirthDate() . "<br>";
	}
	public function __toString()
	{
		return $this->getName() . " " . $this->getFirstname() . " " . $this->getGender() . " " . $this->getBirthDate();
	}
}
// public function addMovie($movie){
// 	$this->_listMovies[] = $movie;
// }

// public function dispFilmo(){
// 	$result = "Films réalisés par $this :<br>";
// 	foreach($this->_listMovies as $movie){
// 		$result.=$movie . "<br>";
// 	}
// 	return $result;
// }
// }