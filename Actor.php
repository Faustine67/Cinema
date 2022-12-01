<?php

class Actor extends Person {

public function __construct($name, $firstname, $gender, $birthdate){
        parent::__construct($name, $firstname, $gender, $birthdate);
}

function getInfos(){
	return $this->getName()." ".$this->getFirstname()
}
public function __toString(){
	return $this->getName()." ".$this->getFirstname();
}
} 