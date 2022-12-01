<?php

class Category {
    private $_categoryname;
    private array $_listMovies;

    public function __construct($categoryname){
        $this->_categoryname=$categoryname;
        $this->_listMovies=[];
        
}
    public function getCategoryname(){
        return $this->_categoryname;
}

public function addMovie($movie){
	$this->_listMovies[] = $movie;
}

public function displayCategory(){
	$result = "Films de categorie $this :<br>";
	foreach($this->_listMovies as $movie){
		$result.=$movie . "<br>";
	}
	return $result;
}
public function __toString(){
    return $this->getCategoryname();
}
}

// Les films d'action sont : The Batman
// Les films d'aventure sont : Batman & Robin
