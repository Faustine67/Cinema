<?php

class Movie {

	private $_title;
	private $_realeasedate;
	private $_last;
	private $_synospis;
	private $_category;
	private $_listactors;

	public function __construct($title,$realeasedate,$last,$synopsis,$category,$_listactors)
	{
	  	$this->_title= $title;
        $this->_realeasedate= $realeasedate;
        $this->_last = $last;
        $this->_synopsis = $synopsis;
		 $this->_category = $category;
        $this->_listactors = [];
	}
	public function __addActor($actor){
        $this-> _listactors[]= $actor;
}
	 function getInfosActor(){
        $informationActor="";
        foreach ($this->_listactors as $actor){
            $informationActor .= $informationActor.$actor->getName().  " " .$actor-> getFirstName()." ".$actor->getGender()." ".$$actor->getBirthDate()."<br>";
        }
        return $informationActor;
}
	 public function addActor($actor){
        $this->_listactors [] = $actor;
    }
}