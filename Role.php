<?php

Class Role {
 private $_roleName;
 private $_casting;

 public function __construct ($roleName){
    $this->_roleName=$roleName;
    $this->_casting=[];
 }
 public function addCasting ($newCasting){
    $this-> _casting[]= $newCasting ;
 }
public function getRoleName(){
    return $this->_roleName;
}
 public function GetInfoRole(){
    return $this->getRoleName();
}
public function GetListActor(){
    foreach( $this->_casting as $actor){
        return $actor;
    }
}
}