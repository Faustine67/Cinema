<?php

class Casting {

  private $_movie;
  private $_role;
  private $_actor;

public function __construct (Movie $movie,Role $role,Actor $actor){
    $this->_movie=$movie;
    $this->_movie->addCasting($this);
    $this->_role=$role;
    $this->_role->addCasting($this);
    $this->_actor=$actor;
    $this->_actor->addCasting($this);
}
// public function GetInfoMovie();
// public function GetInfoRole();
// public function GetInfosActor();
}
   