<?php

class Person {

	private $_name;
	private $_firstname;
	private $_gender;
	private $_birthdate;

	public function __construct($name,$firstname,$gender,$birthdate)
	{
	  	$this->_name= $name;
        $this->_firstname= $firstname;
        $this->_gender = $gender;
        $this->_birthdate = $birthdate;

	}
	public function getName(){
    return $this->_name;
}

public function getFirstName(){
    return $this->_firstname;
}

public function getGender(){
    return $this->_gender;
}

public function getBirthDate(){
    return $this->_birthdate;

}
}