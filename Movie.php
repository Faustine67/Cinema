<?php

class Movie {

	private $_title;
	private $_realeasedate;
	private $_last;
	private $_synospis;
	private $_category;
	private $_realisator;
	
	public function __construct($title,$realeasedate,$last,$synopsis,$category,$realisator)
	{
	  	$this->_title= $title;
        $this->_realeasedate= $realeasedate;
        $this->_last = $last;
        $this->_synopsis = $synopsis;
		$this->_category = $category;
		$this->_category->addMovie($this);
		$this->_realisator = $realisator;
		$this->_realisator->addMovie($this);
	}

	public function getTitle(){
        return $this->_title;
	}

	public function getRealeaseDate(){
        return $this->_realeasedate;
	}
	public function getLast(){
        return $this->_last;
	}
	public function getSynopsis(){
        return $this->_synopsis;
	}
	public function getCategory(){
        return $this->_category;
	}
	public function getRealisator(){
		return $this->_realisator;
	}
	public function getInfosMovie(){
		return $this->_title." ".$this->_realeasedate." ".$this->_last." ".$this->_synopsis." ".$this->_category." ".$this->_realisator ."<br>";
	}

	public function __toString()
	{
		return $this->getTitle() . " (". $this->getRealeaseDate(). ")";
	}
}
	

// 	/public function __addActor($actor){
//         $this-> _listactors[]= $actor;
// }
// 	public function getInfosActor(){
//         $informationActor="";
//         foreach ($this->_listactors as $actor){
//             $informationActor .= $informationActor.$actor->getName().  " " .$actor-> getFirstName()." ".$actor->getGender()." ".$$actor->getBirthDate()."<br>";
//         }
//         return $informationActor;
// }
// 	//  public function addActor($actor){
//         $this->_listactors [] = $actor;